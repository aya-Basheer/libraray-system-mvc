<?php
interface NotificationInterface {
    public function send($message, $recipient);
}
