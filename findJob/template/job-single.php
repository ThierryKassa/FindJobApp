<?php include 'inc/header.php';?>
<!-- zone E-->
  <div class="row">
          <div class="col-lg-12">
            <p class="text-primary"><?php echo "Posted by {$job->contact_user} on {$job->post_date}"; ?></p>
           
          </div>
  </div>

  <div class="row">
    <div class="col-lg-12">
      <div class="bs-component">
        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center">	<p><strong>Company: </strong> <span><?php echo " {$job->company}"; ?></span></p>
            
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <p><strong>Salary: </strong> <span><?php echo " {$job->salary}"; ?></span></p>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <p><strong>Contact Email: </strong> <span><?php echo " {$job->contact_email}"; ?> </span></p>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- end zone E-->

<div class="bs-docs-section">
          <div class="row">
            <div class="col-lg-12">
              <a href="index.php" class="btn btn-link">Go back</a>
            </div>
          </div>
        
		  <div class="row">
          	<div class="col-lg-12"> 
          	<p class="bs-component" >   	
          		<a type="button" href="edit.php?id=<?php echo $job->id; ?>" class="btn btn-link">Edit</a>
	            	
	            	<form method="POST" action="job.php" >
	              	<input type="submit" class="btn btn-danger" value="Delete">
	              	<input type="hidden" name="del_id" value="<?php echo $job->id; ?>">
	              </form>
	         </p>
            </div>
          </div>

</div>
<?php include 'inc/footer.php';?>