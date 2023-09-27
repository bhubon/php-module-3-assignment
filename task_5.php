<?php
function generatePassword($length) {
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    $allCharacters = $lowercase . $uppercase . $numbers . $specialChars;

    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, strlen($allCharacters) - 1);
        $password .= $allCharacters[$randomIndex];
    }

    return $password;
}

$password = generatePassword(12);

echo "Generated Password: " . $password;
