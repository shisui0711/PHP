<?php
error_reporting(0);
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
$xnhac = "\033[1;96m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;93m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$white= "\033[1;37m";
$green="\033[1;32m";
$yellow="\033[1;33m";
$xnhac = "\033[1;36m";
$do = "\033[1;31m";
$luc = "\033[1;32m";
$vang = "\033[1;33m";
$xduong = "\033[1;34m";
$hong = "\033[1;35m";
$trang = "\033[1;37m";
$logo = "
\033[1;31m╔═════════════════════════════════╗
\033[1;31m║ \033[1;32m➽ Facebook : Nguyễn Văn Khang   \033[1;31m║ 
\033[1;31m║ \033[1;32m➽ Zalo : 0988655794             \033[1;31m║
\033[1;31m║ \033[1;32m➽ Youtube : Shisui0711          \033[1;31m║
\033[1;31m║ \033[1;32m➽ Bản Quyền : Shisui0711        \033[1;31m║
\033[1;31m╚═════════════════════════════════╝ 
\n";
@system("clear");
echo $logo;
echo "\n";
sleep(5);
$key_pastebin = file_get_contents("https://pastebin.com/raw/xSWKZxu0");
while (true){
    echo $luc."Nhập Key ".$trang."===>: $vang";
    $key = trim (fgets(STDIN));
    if (strpos($key_pastebin,$key) !== false){
        break;
    }else{
        echo $do."Vui lòng nhập đúng key";
        sleep(2);
    }
};

