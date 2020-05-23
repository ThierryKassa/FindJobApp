 <?php require 'conf/init.php';?>
 <?php 
$job = new Job();

if (isset($_POST['submit'])) {
	$data = array();

	$data['categorie_id'] = $_POST['categorie_id'];
	$data['company'] = $_POST['company'];
	$data['job_title'] = $_POST['job_title'];
	$data['description'] = $_POST['description'];
	$data['salary'] = $_POST['salary'];
	$data['location'] = $_POST['location'];
	$data['contact_user'] = $_POST['contact_user'];
	$data['contact_email'] = $_POST['contact_email'];

	$insert = $job->create($data);
	if ($insert) {
		redirect('index.php','Job created with succes','succes');
	} else{
		redirect('index.php','Error Job creation ','error');
	}
}
$template = new Template('template/job-create.php');
	
$template->categories  = $job->getAllCategories();
	
echo $template;