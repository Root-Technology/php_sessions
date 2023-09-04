<?php

session_start();
require_once("db.php");
if (empty($_SESSION['id_user'])) {
    header("location: index");
    exit();
} else {
    $id_user = $_SESSION['id_user'];
}


$name = $email = $lastname = $profileimage = $birthday = $degree = $phone = $countryname = $placeofbirth = $gender = $website = $about ="";

$sql = "SELECT * FROM users WHERE id_user= $id_user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $name = $row['name'];
        $email = $row['email'];
        $lastname = $row['last_name'];
        $birthday =  $row['birthday'];
        $profileimage = $row['profile_image'];
        $gender =  $row['gender'];
        $phone =  $row['phone'];
        $about =  $row['about'];
        $website =  $row['website'];
    }

    $birthday_formatted = date("Y-m-d", strtotime($birthday));
}


function makeLinksClickable($text) {
    // Regular expression to match URLs
    $pattern = '/https?:\/\/[^\s<]+[^<.,:;"\')\]\s]/';

    // Replace URLs with anchor tags
    $text = preg_replace($pattern, '<a href="$0" target="_blank">$0</a>', $text);

    return $text;
}

function get_time_ago($time)
{
    $time_difference = time() - $time;

    if ($time_difference < 1) {
        return 'less than 1 second ago';
    }
    $condition = array(
        12 * 30 * 24 * 60 * 60 =>  'year',
        30 * 24 * 60 * 60       =>  'month',
        24 * 60 * 60            =>  'day',
        60 * 60                 =>  'hour',
        60                      =>  'minute',
        1                       =>  'second'
    );

    foreach ($condition as $secs => $str) {
        $d = $time_difference / $secs;

        if ($d >= 1) {
            $t = round($d);
            return 'about ' . $t . ' ' . $str . ($t > 1 ? 's' : '') . ' ago';
        }
    }
}

function daysUntilBirthday($birthday) {
    // Get the current date
    $currentDate = date("Y-m-d");

    // Convert the$birthday and current date to DateTime objects
    $birthdayDate = new DateTime($birthday);
    $currentDate = new DateTime($currentDate);

    // Calculate the time difference
    $timeDifference = $currentDate->diff($birthdayDate);

    // Get the number of days left
    $daysLeft = $timeDifference->days;

    return $daysLeft;
}