<?php

echo preg_replace("/.*?\./", '', 'photo.jpg') . PHP_EOL;

preg_match_all("|<[^>]+>(.*)</[^>]+>|U", "<b>пример: </b><div align=left>это тест</div>", $out, PREG_PATTERN_ORDER);
print_r($out) . PHP_EOL;
