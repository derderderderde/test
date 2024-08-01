<?php
// 读取计数器文件
$file = 'counter.txt';
$count = file_get_contents($file);

// 增加计数
$count++;

// 写回计数器文件
file_put_contents($file, $count);

// 显示计数
echo $count;
?>
