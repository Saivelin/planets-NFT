<?php
// $dir = opendir(dirname(__FILE__));
// $count = 0;
// while ($file = readdir($dir)) {
//     if ($file == '.' || $file == '..' || is_dir('path/to/dir' . $file)) {
//         continue;
//     }
//     $count++;
// }
// echo ($count);
// echo dirname(__FILE__);
// // $i = 0;
// // while ($i <= $count) {
unlink(dirname(__FILE__) . "/index.php");
unlink(dirname(__FILE__) . "/css/style.css");
unlink(dirname(__FILE__) . "/css/whitetheme.css");
unlink(dirname(__FILE__) . "/css/whitetheme1.css");
unlink(dirname(__FILE__) . "/css/media.css");
unlink(dirname(__FILE__) . "/scss/style.scss");
unlink(dirname(__FILE__) . "/scss/whitetheme.scss");
unlink(dirname(__FILE__) . "/scss/whitetheme1.scss");
unlink(dirname(__FILE__) . "/scss/whitetheme2.scss");
unlink(dirname(__FILE__) . "/scss/media.scss");
unlink(dirname(__FILE__) . "/js/script.js");
unlink(dirname(__FILE__) . "/js/langs.js");
unlink(dirname(__FILE__) . "/dist/bundle.js");
unlink(dirname(__FILE__) . "/main.php");
// }
// unlink(dirname(__FILE__) . "\img");
// array_map('unlink', glob(dirname(__FILE__) . '/test/.'));