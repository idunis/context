<?php

declare(strict_types=1);

namespace Idunis\EventSauce\Message;

use EventSauce\EventSourcing\Message;
use EventSauce\EventSourcing\MessageDispatcher;

final class EventMessageDispatcher implements MessageDispatcher
{
    public function dispatch(Message ...$messages)
    {
        foreach ($messages as $message) {
            event($message->event());
        }
    }
}
