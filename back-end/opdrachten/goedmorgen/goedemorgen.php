<html>
<head>
    <title>Tijdsgroeting</title>
    <style>
        body {
            text-align: center;
            font-size: 24px;
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body>
<?php
date_default_timezone_set('Europe/Amsterdam');

$currentTime = new DateTime();
$currentHour = $currentTime->format('H');

if ($currentHour >= 6 && $currentHour < 12) {
    $greeting = "Goede morgen";
    $backgroundImage = "morning.png";
} elseif ($currentHour >= 12 && $currentHour < 18) {
    $greeting = "Goede middag";
    $backgroundImage = "afternoon.png";
} elseif ($currentHour >= 18 && $currentHour < 24) {
    $greeting = "Goede avond";
    $backgroundImage = "evening.png";
} else {
    $greeting = "Goede nacht";
    $backgroundImage = "night.png";
}

echo "<h1>$greeting</h1>";
echo "<p>Het is nu " . $currentTime->format('H:i:s') . "</p>";
echo "<style>body {background-image: url('$backgroundImage');}</style>";
?>
</body>
</html>