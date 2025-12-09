<?php
namespace user\laba7;

class EmailNotification extends AbstractNotification
{
    public function send(string $message): string
    {
        $this->status = 'отправлено';
        $this->timestamp = date('Y-m-d H:i:s');
        return "email отправлен: {$message}";
    }

    public function getType(): string
    {
        return 'Email';
    }
}
