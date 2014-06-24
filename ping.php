<?php

try {
  (new Image)->resizeAndSave(__DIR__.'/web/captures/1.png', __DIR__.'/web/captures/11.png', 340, 220);
  if (($client = (new WsClient('localhost', 9000))->connect(false)) !== false) $client->sendData('capture:/captures/11.png');
} catch (Exception $e) {}

