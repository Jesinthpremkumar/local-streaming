<?php

$dir=".";
$li=array_filter(glob("{*.mp4,*.mkv,*.avi}",GLOB_BRACE),'is_file');
$count=count($li);

for($i=0;$i<$count;$i++)
{
  	$myobj['file'][]=$li[$i];
}
echo json_encode($myobj);

?>