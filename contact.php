<?php
// Basic email handler for Umbler.
// For higher deliverability, configure authenticated SMTP and use PHPMailer,
// but this keeps it simple with PHP mail().

header('Content-Type: application/json');

function respond($ok, $msg) {
  echo json_encode(['success' => $ok, 'message' => $msg]);
  exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  respond(false, 'Invalid request method.');
}

$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '' || !filter_var($email, FILTER_VALIDATE_EMAIL) || $message === '') {
  respond(false, 'Please provide a valid name, email, and message.');
}

$to      = 'hugo.mariano@hotmail.com';
$subject = 'New message from profile site';
$body    = "From: $name <$email>\n\n$message\n\n--\nSent from profile site";
$headers = [
  'From' => 'no-reply@' . ($_SERVER['HTTP_HOST'] ?? 'site.local'),
  'Reply-To' => $email,
  'Content-Type' => 'text/plain; charset=UTF-8'
];

$headers_str = '';
foreach ($headers as $k => $v) { $headers_str .= "$k: $v\r\n"; }

$sent = @mail($to, $subject, $body, $headers_str);
respond($sent, $sent ? 'Message sent. Thanks!' : 'Failed to send. Please try again later.');