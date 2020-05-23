<?php
include 'conf/init.php';
$job = new Job();


if (isset($_POST['del_id'])) {
	$del_id = $_POST['del_id'];
	if ( $job->deleteJob($del_id) ) {
		redirect('index.php', 'Job deleted', 'succes');
	} else{
		redirect('index.php', 'Job is not deleted', 'error');
	}
}

$template = new Template('template/job-single.php');

$jobId = isset($_GET['id']) ? $_GET['id'] : null;

$template->job = $job->getJob($jobId);


echo  $template;