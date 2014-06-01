<?php
    if(!defined("__ZBXE__"))
	if(!defined('__XE__'))
	exit();

    /**
     * @file xdt_css.addon.php
     * @author 도라미 (suppor@xdt.kr)
     **/

    // 어드민 모듈 리턴
    if(Context::get('module')=='admin') return;

    if($GLOBALS['_called_addon_xdt_css_']) return;
    $GLOBALS['_called_addon_xdt_css_'] = true;

    $css_code = <<<Endcss

<style type="text/css"> 
body div.xe_mobile {opacity:0.7; margin:1em 0; padding:.5em; background:#333; border:1px solid #666; border-left:0; border-right:0; clear: both;}
</style>

Endcss;
    Context::addHtmlHeader($css_code);
?>