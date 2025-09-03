<?php
$username = "danredpena";
$role = "moderator"; 
$isActive = true;
$isPremium = true;
$lastLoginDaysAgo = 0; 


$welcomeMessage = ($role === "administrator")
    ? "Welcome back, mighty Admin!"
    : "Welcome back, $username!";

$loginMessage = ($lastLoginDaysAgo <= 1)
    ? "You logged in recently."
    : "It’s been $lastLoginDaysAgo days since your last login.";

echo "===== PROFILE =====\n";
echo $welcomeMessage . "\n";
echo $loginMessage . "\n\n";

echo "===== FEATURE ACCESS =====\n";

if (!$isActive) {
    echo "Your account is inactive. Please contact support.\n\n";
    exit; 
} elseif ($role === "administrator") {
    echo "Access granted: Full administrator privileges.\n";
} elseif ($role === "moderator") {
    echo "Access granted: Moderator tools enabled.\n";
    if ($isPremium) {
        echo "Bonus: Premium moderator resources unlocked!\n";
    }
} elseif ($role === "member") {
    echo "Access granted: Member features available.\n";
    if ($isPremium) {
        echo "Bonus: Premium content unlocked!\n";
    }
} else {
    echo "Access granted: Guest view only.\n";
}
echo "\n";

echo "===== NOTIFICATION PREFERENCES =====\n";

$notificationPreference = "both"; 

switch ($notificationPreference) {
    case "email":
        echo "Notifications will be sent via Email.\n";
        break;
    case "sms":
        echo "Notifications will be sent via SMS.\n";
        break;
    case "both":
        echo "Notifications will be sent via Email and SMS.\n";
        break;
    case "none":
        echo "Notifications are turned off.\n";
        break;
    default:
        echo "Invalid notification preference. Please update settings.\n";
        break;
}
echo "\n";
?>