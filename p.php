<?php
// === الأنواع الأساسية ===

// متغير من نوع عدد صحيح (Integer)
$agee = 90;
echo "العمر: $age\n";

// متغير من نوع عدد عشري (Float)
$pi = 9.14; 
echo "قيمة π: $pi\n";

// متغير من نوع نص (String)
$name = "أمين المنصوري"; 
echo "امين: $name\n";

// متغير من نوع منطقي (Boolean)
$is_student = true; //
echo "هل هو طالب؟ " . ($is_student ? "نعم" : "لا") . "\n";

// متغير من نوع كائن (Object)
class Car {
    public $carr;
    public $color;

    public function __construct($carr, $color) {
        $this->carr = $carr;
            $this->color = $color;
    }
    public function displayInfo() {
        echo "السيارة: {$this->carr}, اللون: {$this->color}\n";
    }
}
$myCar = new Car("تويوتا", "أسود");
   $myCar->displayInfo();
// === الأنواع الخاصة (Special Types) ===

// متغير من نوع NULL
$empty_var = NULL; // المتغير لا يحتوي على قيمة
echo "المتغير الفارغ: " . ($empty_var === NULL ? "NULL" : "له قيمة") . "\n";

fwrite($file, "مرحبًا بك في عالم PHP!"); // كتابة نص في الملف
fclose($file); // إغلاق الملف
echo "تم إنشاء ملف example.txt وكتابة نص فيه.\n";

$text = "123";
$number = (int)$text; // تحويل النص "123" إلى عدد صحيح
echo "النص '$text' بعد تحويله إلى عدد صحيح: $number\n";

// تحويل عدد صحيح إلى نص
$integer = 100;
$string = (string)$integer; // تحويل العدد 100 إلى نص
echo "العدد $integer بعد تحويله إلى نص: '$string'\n";
?>