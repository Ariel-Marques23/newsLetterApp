<?php

namespace App\Kafka;

class Producer
{
    const PRODUCER_BAT_FILE_PATH = 'C:/kafka/producer.bat';
    const PRODUCER_CONTENT_FILE_PATH = 'C:/kafka/burno.txt';

    public function produce($message)
    {
        file_put_contents(self::PRODUCER_CONTENT_FILE_PATH, $message);

        $result = exec('c:\WINDOWS\system32\cmd.exe /c ' . self::PRODUCER_BAT_FILE_PATH, $result, $code);
    }
}