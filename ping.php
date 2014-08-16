<?php

$id = R::get('options')['id'];
(new Image)->resizeAndSave(__DIR__.'/web/captures/'.$id.'.png', __DIR__.'/web/captures/'.$id.'.png', 340, 220);
if (($client = (new WsClient('localhost', 9000))->connect(false)) !== false) $client->sendData("capture:/captures/$id.png");
