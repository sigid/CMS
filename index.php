<?php
require_once('includes/cmsApplication.php');

$app = new CmsApplication();
if(isset($_REQUEST['task']))
{
	$task=$_REQUEST['task'];
	Switch($task)
	{
		 case 'addcontent':$app->addcontent();break;
		 case 'anyothertask':$app->anyothertask();break;
		 default: $app->viewcontent();break;
}
}
else
{
	//jika tidak querystring akan di panggil fungsi viewContent
$app->viewcontent();
}