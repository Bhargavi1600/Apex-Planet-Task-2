<?php
header('Content-Type: application/json');

// in a real app, query DB. Here we use a dummy list.
$existing = ['test@example.com','alice@test.com'];

// read posted email
$email = isset($_POST['email']) ? trim($_POST['email']) : '';

$response = ['exists' => false];

if ($email !== '') {
    $response['exists'] = in_array(strtolower($email), array_map('strtolower', $existing));
}

echo json_encode($response);