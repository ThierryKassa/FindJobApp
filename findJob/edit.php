<?php include 'conf/init.php';?>
<?php 
$job = new Job();


$jobId = (isset($_GET['id'])) ? $_GET['id'] : null;

if (isset($_POST['submit'])) {
	$data = array();
	
	$data['categorie_id'] = $_POST['categorie_id'];
	$data['company'] =  $_POST['company'];
	$data['job_title'] = $_POST['job_title'];
	$data['description'] = $_POST['description'];
	$data['salary'] = $_POST['salary'];
	$data['location'] = $_POST['location'];
	$data['contact_user'] = $_POST['contact_user'];
	$data['contact_email'] = $_POST['contact_email'];

	$update = $job->updateJob($_POST['id'], $data);
	
	if ($update) {
		redirect("index.php", "Your job has been updated", "success");
	} else {
		redirect("index.php", "Job edition error", "error");
	}
	
}

$template = new Template('template/job-edit.php');
	
$template->job = $job->getJob($jobId);
$template->categories  = $job->getAllCategories();
	
echo $template;