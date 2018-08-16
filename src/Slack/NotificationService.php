<?php
namespace Raketsky\Slack;

use Maknz\Slack\Client;
use Maknz\Slack\Message;

class NotificationService
{
    /**
     * @var Message
     */
    private $client;

    public function __construct()
    {
        $config = config('services.slack');
        $this->client = new Client($config['endpoint']);
    }

    public function sendMessage($message)
    {
//        if (env('APP_ENV')) {
//            return $this->client->send('Local env! Notifications is disabled');
//        }

        return $this->client->send($message);
    }
}