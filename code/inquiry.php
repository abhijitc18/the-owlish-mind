<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';
require_once 'conn.php';

$mail = new PHPMailer(true);

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve and sanitize form inputs
  $name = trim($conn->real_escape_string($_POST['name']));
  $email = trim($conn->real_escape_string($_POST['email']));
  $phone = trim($conn->real_escape_string($_POST['phone']));
  $subject = trim($conn->real_escape_string($_POST['subject']));
  $message = trim($conn->real_escape_string($_POST['message']));

  $created_at = date('Y-m-d H:i:s'); // Format: YYYY-MM-DD HH:MM:SS

  // SQL query to insert data
  $query = "INSERT INTO contact_tbl (name, email, phone, subject, message, created_at) 
              VALUES (?, ?, ?, ?, ?, ?)";

  $stmt = $conn->prepare($query);

  if (!$stmt) {
    error_log("Prepare statement failed: " . $conn->error);
    die("Something went wrong. Please try again later.");
  }

  // Bind parameters
  $stmt->bind_param(
    "ssssss",
    $name,
    $email,
    $phone,
    $subject,
    $message,
    $created_at
  );

  // Emojis
  $emojiArray = ['🎉', '🚀', '🔥', '🌍', '🎯'];
  $randomEmoji = $emojiArray[array_rand($emojiArray)];

  $mail->CharSet = 'UTF-8';
  // send data
  try {
    // SMTP server configuration
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ashuabhi1008@gmail.com';       // Your Gmail address
    $mail->Password = 'ljul uanl kvpq dkae';          // App password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Recipients
    $mail->setFrom('ashuabhi1008@gmail.com', 'New Enquiry ' . $randomEmoji);
    $mail->addAddress('chouguleabhijit18@gmail.com'); // Recipient email

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'New Enquiry Received';
    $mail->Body = "
            <p>A new enquiry has been submitted with the following details:</p>
            <table border='1'>
                <tr>
                  <td style='padding: 10px;'>
                    <strong>Name:</strong>
                  </td>
                  <td style='padding: 10px;'>$name</td>
                </tr>
                <tr>
                  <td style='padding: 10px;'>
                    <strong>Email:</strong>
                  </td>
                  <td style='padding: 10px;'>$email</td>
                </tr>
                <tr>
                  <td style='padding: 10px;'>
                    <strong>Phone No.:</strong>
                  </td>
                  <td style='padding: 10px;'>$phone</td>
                </tr>
                <tr>
                  <td style='padding: 10px;'>
                    <strong>Subject:</strong>
                  </td>
                  <td style='padding: 10px;'>$subject</td>
                </tr>
                <tr>
                  <td style='padding: 10px;'>
                    <strong>Message: </strong>
                  </td>
                  <td style='padding: 10px;'>$message</td>
                </tr>
                <tr>
                  <td style='padding: 10px;'>
                    <strong>Date: </strong>
                  </td>
                  <td style='padding: 10px;'>$created_at</td>
                </tr>
            </table>
            <p>The above enquiry has been received from <b style='color: red;'>Contact Us</b> page</p>
        ";

    $mail->send();
  } catch (Exception $e) {
    echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }

  // Execute the statement
  if ($stmt->execute()) {
    header("Location: /theowlishmind/pages/contact");
    exit;
  } else {
    error_log("Error executing query: " . $stmt->error);
    echo "An error occurred while submitting the form. Please try again.";
  }

  // Close the statement and connection
  $stmt->close();
  $conn->close();
} else {
  // If accessed without POST method, redirect to the contact page
  header("Location: /theowlishmind/pages/contact");
  exit;
}