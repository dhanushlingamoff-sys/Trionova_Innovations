<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function submitForm(Request $request)
    {
        $rules = [
            'name' => 'required|min:3',
            'phone' => 'required|digits:10',
            'email' => 'required|email',
            'business' => 'required',
        ];

        // Only require captcha for normal website form (skip on local)
        if (! $request->ajax() && ! app()->environment('local')) {
            $rules['g-recaptcha-response'] = 'required';
        }

        $request->validate($rules, [
            'name.required' => 'Name is required.',
            'name.min' => 'Name must be at least 3 characters.',
            'email.required' => 'Email is required.',
            'email.email' => 'Please enter a valid email address.',
            'business.required' => 'Business is required.',
            'g-recaptcha-response.required' => 'Please verify that you are not a robot.',
        ]);

        // ✅ Verify Google reCAPTCHA
        // ✅ Verify Google reCAPTCHA only for website form (skip on local)
        if (! $request->ajax() && ! app()->environment('local')) {

            $captcha = Http::asForm()->post(
                'https://www.google.com/recaptcha/api/siteverify',
                [
                    'secret' => env('RECAPTCHA_SECRET_KEY'),
                    'response' => $request->input('g-recaptcha-response'),
                    'remoteip' => $request->ip(),
                ]
            );

            if (! $captcha->json('success')) {
                return back()->withErrors([
                    'captcha' => 'Captcha verification failed.',
                ])->withInput();
            }

        }

        $referrer = $request->headers->get('referer') ?? 'Direct / Unknown';

        $utm_source = $request->query('utm_source') ?? 'N/A';
        $utm_medium = $request->query('utm_medium') ?? 'N/A';
        $utm_campaign = $request->query('utm_campaign') ?? 'N/A';
        $gclid = $request->gclid ?? 'N/A';

        // ✅ Prepare form data
        $formData = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'business' => $request->business,
            'message' => $request->message,
            'referrer' => $referrer,
            'utm_source' => $utm_source,
            'utm_medium' => $utm_medium,
            'utm_campaign' => $utm_campaign,
            'gclid' => $gclid,
        ];

        try {

            $response = Http::withHeaders([
                'api-key' => env('BREVO_API_KEY'),
                'Content-Type' => 'application/json',
                'accept' => 'application/json',
            ])->post('https://api.brevo.com/v3/smtp/email', [

                'sender' => [
                    'name' => 'Trionova',
                    'email' => 'info@trionova.in',
                ],

                // 'to' => [
                //     ['email' => 'dhanush@trionova.in']
                // ],

                "to" => [
                    ["email" => "durgadevi@trionova.in"],
                    ["email" => "prakas@trionova.in"],
                    ["email" => "info@trionova.in"]
                ],

                'subject' => 'New Contact Form Submission',

                'htmlContent' => "
                    <h2>New Contact Form Submission</h2>

                    <p><strong>Name:</strong> {$formData['name']}</p>
                    <p><strong>Email:</strong> {$formData['email']}</p>
                    <p><strong>Phone:</strong> {$formData['phone']}</p>
                    <p><strong>Business:</strong> {$formData['business']}</p>
                    <p><strong>Message:</strong> ".($formData['message'] ?? 'N/A')."</p>

                    <hr>

                    <h3>Lead Source</h3>

                    <p><strong>Referrer:</strong> {$formData['referrer']}</p>
                    <p><strong>Source:</strong> {$formData['utm_source']}</p>
                    <p><strong>Medium:</strong> {$formData['utm_medium']}</p>
                    <p><strong>Campaign:</strong> {$formData['utm_campaign']}</p>
                    <p><strong>Google Click ID:</strong> {$formData['gclid']}</p>
                ",
            ]);

            // ✅ Log response for debugging
            Log::info('Brevo Email Response', [
                'status' => $response->status(),
                'body' => $response->body(),
            ]);

        } catch (\Exception $e) {

            Log::error('Brevo Email Error', [
                'error' => $e->getMessage(),
            ]);

        }

        if ($request->ajax()) {

            return response()->json([
                'success' => true,
                'message' => 'Thank you! Our team will contact you soon.',
            ]);

        }

        return redirect('/thank-you');
    }
}
