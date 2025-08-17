<?php
trait LoggingTrait {
    public function log($message) {
        file_put_contents('system.log', date('[Y-m-d H:i:s] ').$message.PHP_EOL, FILE_APPEND);
    }
}
