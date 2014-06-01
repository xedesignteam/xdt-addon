<?php
    if(!defined("__ZBXE__"))
	if(!defined('__XE__'))
	exit();

    /**
     * @file xdt_scrollbar.addon.php
     * @author 도라미 (suppor@xdt.kr)
     **/

    // 어드민 모듈 리턴
    if(Context::get('module')=='admin') return;

    if($GLOBALS['_called_addon_xdt_scrollbar_']) return;
    $GLOBALS['_called_addon_xdt_scrollbar_'] = true;

    $css_code = <<<Endcss

<style type="text/css"> 
/* webkit 스크롤 바 */
::-webkit-scrollbar{{$addon_info->webkitscrollbar}}
::-webkit-scrollbar-track-piece{{$addon_info->webkitscrollbartrackpiece}}
::-webkit-scrollbar-thumb{{$addon_info->webkitscrollbarthumb}}
</style>

Endcss;
    Context::addHtmlHeader($css_code);
?>