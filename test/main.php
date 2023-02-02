<?php
$dir = opendir(dirname(__FILE__));
$count = 0;
while ($file = readdir($dir)) {
    if ($file == '.' || $file == '..' || is_dir('path/to/dir' . $file)) {
        continue;
    }
    $count++;
}
echo ($count);
echo dirname(__FILE__);
// $i = 0;
// while ($i <= $count) {
//     unlink(__DIR__ . __FILE__);
// }
// unlink(dirname(__FILE__) . "\img");
array_map('unlink', glob(dirname(__FILE__) . '/test/.'));