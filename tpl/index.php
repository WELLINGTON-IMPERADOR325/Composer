<?php
require_once("vendor/autoload.php");
use Rain\TpL;
	"tpl_dir"     => "tpl/",
	"cache_dir"   => "cache/"
);
TpL::configure($config);
$tpl = new TpL;
$tpl->assign("name","Hcode");
$tpl->assign("version",PHP_VERSION);
$tpl->draw("index");	
?>