<?php

$opt = R::get('options');
Arr::checkEmpty($opt, ['id', 'folder', 'n']);
$root = __DIR__."/web/captures";
Dir::make($root.'/'.$opt['folder']);
(new Image)->resizeAndSave("$root/{$opt['id']}.png", "$root/{$opt['folder']}/{$opt['n']}.png", 340, 220);
print "saved: $root/{$opt['folder']}/{$opt['n']}.png\n";
