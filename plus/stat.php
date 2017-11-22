<?php
require_once(dirname(__FILE__)."/../include/inc_minicount.php");
$c = new minicount(dirname(__FILE__)."/../include/minidata/");
//$c->diplay("访问总流量：a%人次 当前在线：t%人次 您是本站第：y%人次 今月访问：m%人次 上月访问：l%人次");
$c->diplay("document.writeln('a%')");
?>