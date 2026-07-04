<?php

use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'home'])->name('home');

Route::get('/about-us', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/thank-you', [PagesController::class, 'thankyou']);

Route::get('/business-solution', [PagesController::class, 'businessSolution']);
Route::get('/flutter-app-development-company-in-chennai', [PagesController::class, 'flutter']);

Route::get('/mobile-app-company-in-chennai', [PagesController::class, 'mobileApp'])->name('mobile-app');
Route::get('/mobile-app-development-company-in-dubai', [PagesController::class, 'mobileAppdubai'])->name('mobile-app');
Route::get('/mobile-app-development-company-in-uae', [PagesController::class, 'mobileAppuae'])->name('mobile-app');
Route::get('/mobile-app-development-company-in-tamilnadu', [PagesController::class, 'mobileApptamilnadu'])->name('mobile-app');
Route::get('/mobile-app-development-company-in-coimbatore', [PagesController::class, 'mobileAppcoimbatore'])->name('mobile-app');
Route::get('/mobile-app-development-company-in-salem', [PagesController::class, 'mobileAppsalem'])->name('mobile-app');
Route::get('/mobile-app-development-company-in-erode', [PagesController::class, 'mobileApperode'])->name('mobile-app');

Route::get('/consulting', [PagesController::class, 'consulting']);
Route::get('/software-development', [PagesController::class, 'software']);
Route::get('/Support', [PagesController::class, 'support']);

Route::get('/Engineering', [PagesController::class, 'engineering']);
Route::get('/cloud-service', [PagesController::class, 'cloudService']);
Route::get('/AI', [PagesController::class, 'ai']);
Route::get('/products', [PagesController::class, 'products']);
Route::get('/Data-Science', [PagesController::class, 'dataScience'])->name('data-science');

Route::get('/DigitalPrograming', [PagesController::class, 'digitalProgramming']);
Route::get('/ui-ux-design', [PagesController::class, 'uiux']);
Route::get('/seo-sem-company-in-chennai', [PagesController::class, 'seoSem']);
Route::get('/google-services', [PagesController::class, 'googleServices']);
Route::get('/Web-Development', [PagesController::class, 'webDevelopment']);

Route::get('/Fullstack-Developer-Training-Placement', [PagesController::class, 'fullStack'])->name('full-stock');
Route::get('/digital-marketing', [PagesController::class, 'digitalMarketing']);
Route::get('/AI-course', [PagesController::class, 'aiCourse']);
Route::get('/salesforce-admin', [PagesController::class, 'salesforceAdmin']);
Route::get('/salesforce-ba', [PagesController::class, 'salesforceBa']);
Route::get('/power-BI', [PagesController::class, 'powerBI']);
Route::get('/tech-school-data-science', [PagesController::class, 'techSchool']);

Route::get('/privacypolicy', [PagesController::class, 'privacyPolicy']);
Route::get('/termsandconditions', [PagesController::class, 'termsConditions']);
Route::get('/tech-AI', [PagesController::class, 'techAI']);
Route::get('/services', [PagesController::class, 'services']);

Route::get('/zoho-books', [PagesController::class, 'zohoBooks']);

Route::get('/scriberry', [PagesController::class, 'scriberry'])->name('scriberry');
Route::get('/flutter-app-development-company-in-canada', [PagesController::class, 'fluttercanada'])->name('fluttercanada');

Route::post('/send-greeting', [PageController::class, 'sendGreeting'])->name('send.greeting');
Route::get('/copy-rights', [PagesController::class, 'copyrights'])->name('copyrights');

Route::get('/mobile-app-development-company-in-chennai', [PagesController::class, 'mobileAppChennai'])->name('mobile-app');
Route::get('/just-build-it', [PagesController::class, 'justBuildIt'])->name('just-build-it');

Route::post('/contact-submit', [ContactController::class, 'submitForm'])
    ->name('contact.submit');

Route::post('/chatbot/chat', [ChatbotController::class, 'chat'])
    ->name('chatbot.chat')
    ->middleware('throttle:30,1');

    Route::post('/voice-to-text', [ChatbotController::class, 'voiceToText'])
    ->name('voice.to.text');
