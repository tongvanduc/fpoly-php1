<?php

echo "<div>";
    echo "<h4>trim — Xóa khoảng trắng hoặc ký tự bất kỳ ở 2 đầu 1 chuỗi</h4>";
    $str = "    abc@gmail.com   ";
    echo trim($str);
echo "</div>";

echo "<div>";
    echo "<h4>htmlentities — Chuyển tất cả ký tự HTML sang dạng mã hóa";
    echo "<h4>html_entity_decode — Chuyển đổi các ký tự mã hóa về HTML</h4>";

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
    echo "<h4>str_contains — Tìm kiếm sự tồn tại của 1 chuỗi nhỏ trong 1 chuỗi lớn</h4>";
    $str = "abc@gmail.com";

    if (str_contains($str, "@gmail.")) {
        echo "Thằng này là email";
    } else {
        echo "Thằng này KHÔNG là email";
    }
echo "</div>";

echo "<div>";
    echo "<h4>str_pad — Thêm cho 1 chuỗi đủ số lượng ký tự mong muốn bằng 1 ký tự bất kỳ</h4>";
    
    $str = "092";

    echo str_pad($str, 10, "*");
echo "</div>";

echo "<div>";
    echo "<h4>str_replace — Thay thế tất cả từ tìm kiếm bằng 1 chuỗi mới </h4>";
    
    $str = "Replace all occurrences of the search string with the replacement string";

    echo str_replace('string', '<b>ahihi</b>', $str);
echo "</div>";

echo "<div>";
    echo "<h4>strcmp — So sánh 2 chuỗi, bằng nhau trả về 0, khác nhau trả về số lượng ký tự chênh lệch</h4>";
    
    $str1 = "ahihi";
    $str2 = "ahihi";

    if (strcmp($str1, $str2) == 0) {
        echo "2 chuỗi bằng nhau";
    } else {
        echo "2 chuỗi KHÔNG bằng nhau";
    }
echo "</div>";

echo "<div>";
    echo "<h4>strip_tags — Xóa tất cả ký tự HTML</h4>";
    
    $str = "<h4>Ahihi</h4> <script>alert('Đã bị XSS')</script>";

    echo strip_tags($str);
echo "</div>";

echo "<div>";
    echo "<h4>strtolower — Chuyển chuỗi về chữ in Thường</h4>";
    
    $str = "AHIHI";

    echo $str . ' - ' . strtolower($str);
echo "</div>";

echo "<div>";
    echo "<h4>strtoupper — Chuyển chuỗi về chữ in Hoa</h4>";
    
    $str = "ahihi";

    echo $str . ' - ' . strtoupper($str);
echo "</div>";