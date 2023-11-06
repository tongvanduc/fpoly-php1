<?php

echo "Nam: "    . $_POST["man"]     . "<br>";
echo "Nữ: "     . $_POST["women"]   . "<br>";


$today      = time();                            // Lấy ra timestamp ngày hiện tại
$startDate  = strtotime($_POST["start_love"]);   // Lấy ra timestamp ngày bắt đầu

/*
    Lấy timestamp ngày hiện tại trừ đi ngày bắt đầu 
    rồi chia cho số giây 1 ngày
*/
$dayslove = ($today - $startDate) / 86400;

echo "Start Date: " . $startDate    . "<br>";
echo "Today: "      . $today        . "<br>";
echo "DaysLove: "   . $dayslove     . "<br>";
