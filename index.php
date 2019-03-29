<?php

require __DIR__ . "/vendor/autoload.php";

$init = include(__DIR__ . "/lib/init.php");
$templates = new League\Plates\Engine(__DIR__ . '/site/templates');

$goal = "show";
$public_id = '79982844-6a27-4b3b-b77f-419a79be0e10';
$primary_color = '#970635';
$text_color = '#5c5c5c';
$background_color = '#ffffff';
$host = "https://gjs-singlesignon.herokuapp.com";
$stream_host = "";
$theme = "light";

echo $templates->render($_GET["page"], [
        "goal"             => $goal,
        "brand"            => "CFM Interactive Consulting",
        "public_id"        => $public_id, // $init($public_id), // (new \Tholu\Packer\Packer($init($public_id)))->pack()
        "primaryColor"     => $primary_color,
        "textColor"        => $text_color,
        "backgroundColor"  => $background_color,
        "host"             => $host,
        "theme"            => $theme,
        "streamHost"       => $stream_host
    ]
);