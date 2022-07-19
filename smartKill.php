<?php
$a = explode("\n", shell_exec("ps aux | grep php"));

if(!empty($a) and isset($a)){
foreach($a as $process){

if(strpos($process,"xxxx_bot.php") or strpos($process,"yyyy_bot.php")){

$allProcesses = explode(" ",$process);
for($x=1;$x<20;$x++){
if($allProcesses[$x]!=""){
$id = explode(" ",$process)[$x];
break;
}
}
posix_kill($id,SIGKILL);

}
}
}

