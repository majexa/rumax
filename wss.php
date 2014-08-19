<?php

print 123;
// ngn-daemon

BasicWsServer::autoload();
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;

IoServer::factory(new HttpServer(new WsServer(new BasicWsServer)), 9000)->run();
