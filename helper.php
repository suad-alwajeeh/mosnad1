<?php 

function send_email($email){
    // Recipient email address
 
// Subject of the email
$subject = "Test Email";

// Email message body
$message = "This is a test email sent using PHP.";

// Additional headers (optional)
$headers = 'From:sd.alwajeeh@gmail.com' . "\r\n" .
    'Reply-To: sd.alwajeeh@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
// Send the email
if (mail($email, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email.";
}

}

send_email("suad.alwajeeh@gmail.com");