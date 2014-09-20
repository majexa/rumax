<?php

$opt = R::get('options');
Arr::checkEmpty($opt, ['id', 'folder', 'n']);
$root = __DIR__."/web/captures";
$folder = $root.'/'.$opt['folder'];
Dir::make($folder);
FileVar::updateSubVar("$folder/titles.php", $opt['n'], $opt['caption']);
(new Image)->resizeAndSave("$root/{$opt['id']}.png", "$folder/{$opt['n']}.png", 340, 220);
print "saved: $folder/{$opt['n']}.png\n";
