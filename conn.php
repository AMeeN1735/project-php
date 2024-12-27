<?php
//إعدادات الاتصال بقاعدة البيانات
$server = "localhost";
$username = "root";
$password = "";
$dbname = "pdodb";

try {
    // إنشاء اتصال PDO محاولة الاتصال
    $dsn = "mysql:host=$server;dbname=$dbname";
    $pdo = new PDO($dsn, $username, $password);

    // إعداد وضع الخطأ تجهيزه(Error Mode)
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connection successful!";
} catch (Exception $e) {
    //للابتعاد عنة التعامل مع الأخطاء
    echo "Connection failed: " . $e->getMessage();
}
?> 