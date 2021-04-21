<?php

interface MessageTransport
{
    public function send(string $recipient, string $message): void;
}

class EmailMessageTransport implements MessageTransport
{
    public function send(string $recipient, string $message): void
    {
        // implementation
    }
}

final class WelcomeNotificationSender
{
    protected EmailMessageTransport $transport;

    public function __construct(MessageTransport $transport)
    {
        $this->transport = $transport;
    }

    public function send(string $recipient): void
    {
        $this->transport->send($recipient, $this->buildMessage($recipient));
    }

    final protected function buildMessage(string $recipient): string
    {
        return 'Приветствуем Вас на нашем портале, $recipient!';
    }
}
