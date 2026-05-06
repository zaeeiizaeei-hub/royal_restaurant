<?php
$host = "localhost:3307"; // هنا أضفنا رقم المنفذ بعد النقطتين
$user = "root";
$pass = "";
$dbname = "royal_db";

// إنشاء الاتصال
$conn = mysqli_connect($host, $user, $pass, $dbname);

// التأكد من الاتصال
if (!$conn) {
    die("فشل الاتصال بالقاعدة: " . mysqli_connect_error());
}

// لضمان دعم اللغة العربية
mysqli_set_charset($conn, "utf8");
?>