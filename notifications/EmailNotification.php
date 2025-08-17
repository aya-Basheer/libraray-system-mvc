<?php
class EmailNotification implements NotificationInterface {
    public function send($message, $recipient) {
        // مثال: فقط تسجيل الرسالة
        file_put_contents('email.log', "Email to $recipient: $message\n", FILE_APPEND);
    }
}
