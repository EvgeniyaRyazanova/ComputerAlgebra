<?php
echo "<body>";
echo "<br/>The history of requests<br/><pre><code>";
$res = file_get_contents('history.txt');
echo $res;
echo "</code></pre></body>";
?>