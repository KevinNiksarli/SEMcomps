<?php
if(!session_id()){
     session_start();
}

function ago($time) {
    $timediff=time()-$time;

    $days=intval($timediff/86400);
    $remain=$timediff%86400;
    $hours=intval($remain/3600);
    $remain=$remain%3600;
    $mins=intval($remain/60);
    $secs=$remain%60;

    if ($secs>=0) $timestring = "0m".$secs."s";
    if ($mins>0) $timestring = $mins."m".$secs."s";
    if ($hours>0) $timestring = $hours."u".$mins."m";
    if ($days>0) $timestring = $days."d".$hours."u";

    return $timestring;
}
function formatMilliseconds($milliseconds) {
    $seconds = floor($milliseconds / 1000);
    $s = $seconds;
    $minutes = floor($seconds / 60);
    $hours = floor($minutes / 60);
    $milliseconds = $milliseconds % 1000;
    $seconds = $seconds % 60;
    $minutes = $minutes % 60;

    $format = '%u:%02u:%02u.%03u';
    $time = sprintf($format, $hours, $minutes, $seconds, $milliseconds);
    return array('time'=>$time, 'hours'=>$hours, 'minutes'=>$minutes, 'seconds'=>$seconds,'milliseonds'=> $milliseconds,'actual_second'=>$s);
}


/*if(!isset($_SESSION['server_auth'])){
    die("It is not Supposed to run here");
}*/


//$filename = "../logger/".$_SESSION['server_auth'].".stn";
$scans  = scandir("../logger/");
unset($scans[0]);unset($scans[1]);
echo "<pre>";
 $t = time();
foreach ($scans as $key => $value) {
echo $t-filemtime("../logger/".$value).'</br>';
}

die;
 //header('Content-Type: application/json');

$msg = isset($_GET['msg']) ? $_GET['msg'] : '';
if ($msg != '')
{
  file_put_contents($filename,$msg);
  die();
}
$lastmodif    = isset($_GET['timestamp']) ? $_GET['timestamp'] : 0;
$currentmodif = filemtime($filename);
while(1){
    sleep(1); // sleep 10ms to unload the CPU
    clearstatcache();
     $currentmodif = filemtime($filename);
    if($currentmodif>$lastmodif){
        break;
    }
}

// return a json array
//header('Content-Type: application/json');
$response = array();
$response['msg']       = file_get_contents($filename);
$response['timestamp'] = $currentmodif;
echo json_encode($response);
flush();
?>