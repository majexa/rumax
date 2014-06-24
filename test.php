<?php

(new WsClient('localhost', 9000))->connect()->sendData(Misc::randString());
//$c = new WsClient2('localhost', 9000);
//$c->connect('localhost', 9000, '/');
//$c->sendData('dwqdqw');
