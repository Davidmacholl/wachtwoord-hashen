<?php
$wachtwoord = "geheim123";

$hash = password_hash($wachtwoord, PASSWORD_BCRYPT);

echo "hash: " . $hash . "\n";

if (password_verify("geheim123", $hash)) {
    echo "Wachtwoord is correct!";
} else {
    echo "Wachtwoord is incorrect!";
}
