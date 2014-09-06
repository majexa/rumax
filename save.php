<?php

$id = R::get('options')['id'];
$folder = __DIR__.'/web/captures/'.R::get('options')['folder'];
Dir::make($folder);
(new Image)->resizeAndSave(__DIR__.'/web/captures/'.$id.'.png', "$folder/$id.png", 340, 220);
