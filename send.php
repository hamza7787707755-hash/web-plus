<?php
// البريد الذي تريد استقبال الرسائل عليه
$to = "hamza.7787707755@gmail.com";  // ضع بريدك الكامل هنا

// البيانات القادمة من النموذج
$name = $_POST['name'];
$email = $_POST['email'];
$description = $_POST['description'];

// إعداد الرسالة
$subject = "طلب جديد من عميل Web Plus";
$message = "الاسم: $name\nالبريد: $email\nالوصف: $description";
$headers = "From: $email";

// إرسال البريد
if(mail($to, $subject, $message, $headers)) {
    echo "✅ تم إرسال الوصف بنجاح، سنتواصل معك قريبًا.";
} else {
    echo "❌ حدث خطأ أثناء الإرسال، حاول مرة أخرى.";
}
?>
