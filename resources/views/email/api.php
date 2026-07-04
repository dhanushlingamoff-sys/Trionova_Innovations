<?php

// Function to clean input strings
function clean_string($string)
{
    $bad = array("content-type", "bcc:", "to:", "cc:", "href");
    return str_replace($bad, "", $string);
}

// Function to send the email using Sendinblue API
function sendEmail($to, $otp, $name)
{
    // Sendinblue API URL
    $url = 'https://api.sendinblue.com/v3/smtp/email';

    // Subject of the email
    $subject = 'Verify Your Email - OTP Inside';

    // Construct the email content with the OTP
    $htmlContent = '<html>
<head></head>
<body>
    
Dear ' . $name . ',

<p>Welcome to RANZRA, where learning meets convenience! To complete your registration, please verify your email by entering the OTP below.</p>

<p>Your OTP: <strong>' . $otp . '</strong></p>

<p>This OTP is valid for the next 10 minutes. If you didn’t request this, please ignore this message.</p>

<p>We look forward to seeing you explore, learn, and grow with us!</p>

<p>Best regards,<br>
The RANZRA Team</p>

</body>
</html>
';

    // Prepare data for Sendinblue API
    $data = array(
        'sender' => array(
            'name' => 'Noreply',
            'email' => 'info@RANZRA.com'
        ),
        'to' => array(
            array(

                'email' => $to,
            )
        ),
        'subject' => $subject,
        'htmlContent' => $htmlContent
    );

    $json_data = json_encode($data);

    // cURL setup
    $options = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $json_data,
        CURLOPT_HTTPHEADER => array(
            'accept: application/json',
            'api-key: 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',
            'content-type: application/json'
        )
    );

    // Execute cURL request
    $curl = curl_init();
    curl_setopt_array($curl, $options);
    $response = curl_exec($curl);
    $responseArray = "";
    if (curl_errno($curl)) {
        return "Error sending mail to $to: " . curl_error($curl);
    } else {
        $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        if ($http_code != 201) {
            return array('status' => 'error', 'http_code' => $http_code, 'response' => $responseArray);
        } else {
            return array('status' => 'success', 'response' => $responseArray);
        }
    }

    curl_close($curl);
}
