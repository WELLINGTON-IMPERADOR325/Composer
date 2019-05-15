<?php
require_once("vendor/autoload.php");
use Rain\TpL;
	"tpl_dir"     => "tpl/",
	"cache_dir"   => "cache/"
);
TpL::configure($config);
$tpl = new TpL;
$tpl->draw("index");	
?>