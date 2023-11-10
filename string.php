<?php

echo "<div>";
    echo "<h4>trim — Strip whitespace (or other characters) from the beginning and end of a string</h4>";
    $str = "    abc@gmail.com   ";
    echo trim($str);
echo "</div>";

echo "<div>";
    echo "<h4>html_entity_decode — Convert HTML entities to their corresponding characters</h4>";
    echo "<h4>htmlentities — Convert all applicable characters to HTML entities</h4>";

    $str = "I'll \"walk\" the <b>dog</b> now";
    
    $a = htmlentities($str);

    $str = "&lt;b&gt;dog&lt;/b&gt;";
    $b = html_entity_decode($str);

    echo $a . "<br>";
    echo $b . "<br><br>";

    $str = "<script>alert('Đã bị XSS')</script>";
    $str = htmlentities($str);
    echo $str;
echo "</div>";

echo "<div>";
    echo "<h4>str_contains — Determine if a string contains a given substring</h4>";
    $str = "abc@gmail.com";

    if (str_contains($str, "@gmail.")) {
        echo "Thằng này là email";
    } else {
        echo "Thằng này KHÔNG là email";
    }
echo "</div>";

echo "<div>";
    echo "<h4>str_pad — Pad a string to a certain length with another string</h4>";
    
    $str = "092";

    echo str_pad($str, 10, "*");
echo "</div>";

echo "<div>";
    echo "<h4>str_replace — Replace all occurrences of the search string with the replacement string</h4>";
    
    $str = "Replace all occurrences of the search string with the replacement string";

    echo str_replace('string', '<b>ahihi</b>', $str);
echo "</div>";

echo "<div>";
    echo "<h4>strcmp — Binary safe string comparison</h4>";
    
    $str1 = "ahihi";
    $str2 = "ahihi";

    if (strcmp($str1, $str2) == 0) {
        echo "2 chuỗi bằng nhau";
    } else {
        echo "2 chuỗi KHÔNG bằng nhau";
    }
echo "</div>";

echo "<div>";
    echo "<h4>strip_tags — Strip HTML and PHP tags from a string</h4>";
    
    $str = "<h4>Ahihi</h4> <script>alert('Đã bị XSS')</script>";

    echo strip_tags($str);
echo "</div>";

echo "<div>";
    echo "<h4>strtolower — Make a string lowercase</h4>";
    
    $str = "AHIHI";

    echo $str . ' - ' . strtolower($str);
echo "</div>";

echo "<div>";
    echo "<h4>strtoupper — Make a string uppercase</h4>";
    
    $str = "ahihi";

    echo $str . ' - ' . strtoupper($str);
echo "</div>";