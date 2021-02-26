<?php
    if(!defined("__ZBXE__")) exit();
    if(!defined("__XE__")) exit();

    // 관리자 모듈 리턴
    if(Context::get('module')=='admin') return;

    if($GLOBALS['_called_addon_xdt_google_analytics_']) return;
    $GLOBALS['_called_addon_xdt_google_analytics_'] = true;

    $js_code = <<<EndOfGA

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id={$addon_info->tracking_id}"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '{$addon_info->tracking_id}');
</script>

EndOfGA;
    Context::addHtmlHeader($js_code);
?>
