<?php
    if(!defined("__ZBXE__")) exit();
    if(!defined("__XE__")) exit();

    // 관리자 모듈 리턴
    if(Context::get('module')=='admin') return;

    if($GLOBALS['_called_addon_xdt_google_analytics_']) return;
    $GLOBALS['_called_addon_xdt_google_analytics_'] = true;

    $js_code = <<<EndOfGA

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', '{$addon_info->tracking_id}', '{$addon_info->domain}');
  ga('send', 'pageview');

</script>

EndOfGA;
    Context::addHtmlHeader($js_code);
?>