<?php require 'conf/init.php'; ?>
<?php 
$job = new Job();

$template = new Template('template/front_page.php');


$categorie = isset($_POST['category']) ? $_POST['category']:null;
if ($categorie) {
	$template->jobs = $job->getJobByCategorie($categorie);
	$template->title = 'Latest Jobs in '.$job->getCategorie($categorie)->name;
} else {
	$template->title = 'Latest Jobs';
	$template->jobs = $job->getAllJob();
}


$template->categories = $job->getAllCategories();
echo $template;