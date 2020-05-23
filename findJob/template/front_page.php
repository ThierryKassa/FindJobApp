<?php include 'inc/header.php';?>
 <!-- Jumbotrun-->
        <div class="row">
          <div class="col-lg-12">
            <div class="bs-component">
              <div class="jumbotron">
                <h1 class="display-3">Find A job</h1>

				 <!-- form-->
				<form action="index.php" method="POST">
	        <p class="lead">
					<div class="form-group">
				    <select name="category" class="categorie" >
				      <option selected="" value="0">Choose categorie</option>
				        <?php foreach( $categories as $categorie ): ?>
				      	  <option value="<?php echo $categorie->categorie_id; ?>">
				      		  <?php echo $categorie->name; ?>
				          </option>
				  		  <?php endforeach; ?>
				    </select>
					</div>
	            
                <hr class="my-4">
                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
				</form>
				 <!-- end form-->

              </div>
            </div>
          </div>
        </div>
  <!-- end Jumbotrun-->

   <div class="row">
    <div class="col-lg-12">
      <div class="page-header">
        <h1 id="typography"><?php echo $title; ?></h1>
      </div>
    </div>
  </div>

 <!-- list all jobs-->
 <?php foreach($jobs as $job): ?>
  <div class="row marketing">
    <div class="col-md-10">
      <h4><?php echo $job->job_title; ?></h4>
      <p><?php echo $job->description; ?></p>
    </div>
    <div class="col-md-2">
        <a class="btn btn-default" href="job.php?id=<?php echo $job->id; ?>">View</a>
    </div>
  </div> 
  <?php endforeach; ?>
	<!-- end list all jobs-->
<?php include 'inc/footer.php';?>