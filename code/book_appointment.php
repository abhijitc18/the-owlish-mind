<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';
require_once 'conn.php';

$mail = new PHPMailer(true);

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve and sanitize form inputs
  $full_name = trim($conn->real_escape_string($_POST['full_name']));
  $email = trim($conn->real_escape_string($_POST['email']));
  $phone = trim($conn->real_escape_string($_POST['phone']));
  $service = trim($conn->real_escape_string($_POST['service']));
  $date = trim($conn->real_escape_string($_POST['date']));

  $created_at = date('Y-m-d H:i:s'); // Format: YYYY-MM-DD HH:MM:SS

  // Server-side validation
  if (empty($full_name) || empty($email) || empty($phone) || empty($service) || empty($date)) {
    echo "All fields are required!";
    exit;
  }

  // Validate email
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format!";
    exit;
  }

  // Validate phone number (e.g., 10 digits)
  if (!preg_match("/^[0-9]{10}$/", $phone)) {
    echo "Invalid phone number format!";
    exit;
  }

  // SQL query to insert data
  $query = "INSERT INTO appointment_tbl (full_name, email, phone, service, date, created_at) 
              VALUES (?, ?, ?, ?, ?, ?)";

  $stmt = $conn->prepare($query);

  if (!$stmt) {
    error_log("Prepare statement failed: " . $conn->error);
    die("Something went wrong. Please try again later.");
  }

  // Bind parameters
  $stmt->bind_param(
    "ssssss",
    $full_name,
    $email,
    $phone,
    $service,
    $date,
    $created_at
  );

  // Emojis
  $emojiArray = ['🎉', '🚀', '🔥', '🌍', '🎯'];
  $randomEmoji = $emojiArray[array_rand($emojiArray)];

  $mail->CharSet = 'UTF-8';
  // send data
  try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ashuabhi1008@gmail.com'; // Your Gmail address
    $mail->Password = 'ljul uanl kvpq dkae'; // App password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Recipients
    $mail->setFrom('ashuabhi1008@gmail.com', 'New Enquiry ' . $randomEmoji);
    $mail->addAddress('chouguleabhijit18@gmail.com'); // Recipient email

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'New Enquiry Received';
    $mail->Body = "
            <p>A new Book Appoinment has been submitted with the following details:</p>
            <table border='1'>
                <tr>
                  <td style='padding: 10px;'>
                    <strong>Full Name:</strong>
                  </td>
                  <td style='padding: 10px;'>$full_name</td>
                </tr>
                <tr>
                  <td style='padding: 10px;'>
                    <strong>Email:</strong>
                  </td>
                  <td style='padding: 10px;'>$email</td>
                </tr>
                <tr>
                  <td style='padding: 10px;'>
                    <strong>Mobile No.:</strong>
                  </td>
                  <td style='padding: 10px;'>$phone</td>
                </tr>
                <tr>
                  <td style='padding: 10px;'>
                    <strong>Service.:</strong>
                  </td>
                  <td style='padding: 10px;'>$service</td>
                </tr>
                <tr>
                  <td style='padding: 10px;'>
                    <strong>Appointment Date: </strong>
                  </td>
                  <td style='padding: 10px;'>$date</td>
                </tr>
                <tr>
                  <td style='padding: 10px;'>
                    <strong>Date: </strong>
                  </td>
                  <td style='padding: 10px;'>$created_at</td>
                </tr>
            </table>
            <p>The above enquiry has been received from <b style='color: red;'>Book Appointment</b> form</p>
        ";

    $mail->send();
  } catch (Exception $e) {
    echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }

  // Execute the statement
  if ($stmt->execute()) {
    header("Location: /theowlishmind/index");
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
  header("Location: /theowlishmind/index");
  exit;
}
