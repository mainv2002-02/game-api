<?php

use Ratchet\ConnectionInterface;
use Ratchet\MessageComponentInterface;

// Make sure composer dependencies have been installed
require __DIR__ . '/chat/vendor/autoload.php';

/**
 * chat.php
 * Send any incoming messages to all connected clients (except sender)
 */
class MyChat implements MessageComponentInterface
{
    protected ?SplObjectStorage $clients;

    public function __construct()
    {
        $this->clients = new SplObjectStorage;
    }

    public function onClose(ConnectionInterface $conn): void
    {
        $this->clients->detach($conn);
    }

    public function onError(ConnectionInterface $conn, Exception $e): void
    {
        $conn->close();
    }

    public function onMessage(ConnectionInterface $from, $msg): void
    {
        foreach ($this->clients as $client) {
            if ($from != $client) {
                $client->send($msg);
            }
        }
    }

    public function onOpen(ConnectionInterface $conn): void
    {
        $this->clients->attach($conn);
    }
}

// Run the server application through the WebSocket protocol on port 8080
$app = new Ratchet\App('localhost', 6001);
$app->route('/chat', new MyChat, array('*'));
$app->route('/echo', new Ratchet\Server\EchoServer, array('*'));
$app->run();