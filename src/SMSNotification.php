<?php
namespace user\laba7;

class SMSNotification extends AbstractNotification
{
    public function send(string $message): string
    {
        $this->status = 'отправлено';
        $this->timestamp = date('Y-m-d H:i:s');
        return "смс отправлен с содержимым: {$message}";
    }

    public function getType(): string
    {
        return 'SMS';
    }
}
