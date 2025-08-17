<?php
class SMSNotification implements NotificationInterface {
    public function send($message, $recipient) {
        file_put_contents('sms.log', "SMS to $recipient: $message\n", FILE_APPEND);
    }
}
