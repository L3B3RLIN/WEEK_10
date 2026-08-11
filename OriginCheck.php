<?php
// 1. تحديد القائمة البيضاء للنطاقات المسموح لها بالوصول
$allowed_origins = [
    'http://localhost:3000',
    'https://my-trusted-site.com'
];

// 2. التحقق من الهيدر القادم مع الطلب
if (isset($_SERVER['HTTP_ORIGIN'])) {
    $origin = $_SERVER['HTTP_ORIGIN'];
    
    // إذا كان النطاق ضمن القائمة البيضاء، نرسل الهيدرز المناسبة
    if (in_array($origin, $allowed_origins)) {
        header("Access-Control-Allow-Origin: " . $origin);
        header("Access-Control-Allow-Credentials: true");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type, Authorization");
    }
}

// 3. التعامل مع طلبات الاستكشاف المسبق (Preflight Requests)
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// 4. استجابة السيرفر للبيانات (مثال: إرجاع بيانات البروفايل)
header('Content-Type: application/json');
echo json_encode([
    "status" => "success",
    "user" => "Carlos",
    "email" => "carlos@example.com"
]);
?>
