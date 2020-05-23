 <?php include 'inc/header.php';?>
<div class="bs-docs-section">
	<form method="POST" action="edit.php">
	  <fieldset>
	    <legend>Edit Job</legend>
		<div class="form-group">
		  <label class="col-form-label" for="inputDefault">Company</label>
		  <input type="text" name="company" class="form-control" placeholder="company name" id="company" value="<?php echo $job->company; ?>">
		</div>
		<div class="form-group">
	      <label for="categorie_id">Categorie</label>
	      <select class="form-control" id="categorie_id" name="categorie_id">
	        <option selected="" value="<?php echo $job->categorie_id; ?>"><?php echo $job->name; ?></option>
	        <?php foreach($categories as $categorie):?>
	        <?php echo "<option value='".$categorie->categorie_id."'>".$categorie->name ."</option>";?>
	     	<?php endforeach;?>
	      </select>
	    </div>
	    <div class="form-group">
		  <label class="col-form-label" for="inputDefault">Job title</label>
		  <input type="text" name="job_title" class="form-control" placeholder="Job title" id="job_title" value="<?php echo $job->job_title; ?>">
		</div>
		<div class="form-group">
	      <label for="exampleTextarea">Description</label>
	      <textarea class="form-control" name="description" id="description" rows="2"><?php echo $job->description;?></textarea>
	    </div>
	    <div class="form-group">
		  <label class="col-form-label" for="inputDefault">Location</label>
		  <input type="text" name="location" class="form-control" placeholder="Location" id="location" value="<?php echo $job->location; ?>">
		</div>
	    <div class="form-group">
		  <label class="col-form-label" for="inputDefault">Salary</label>
		  <input type="text" name="salary" class="form-control" placeholder="Salary" id="salary" value="<?php echo $job->salary; ?>">
		</div>
	    <div class="form-group">
		  <label class="col-form-label" for="inputDefault">Contact user</label>
		  <input type="text" name="contact_user" class="form-control" placeholder="Contact user" id="contact_user" value="<?php echo $job->contact_user; ?>">
		</div>
		 <div class="form-group">
		  <label class="col-form-label" for="inputDefault">Contact email</label>
		  <input type="text" name="contact_email" class="form-control" placeholder="Contact email" id="contact_email" value="<?php echo $job->contact_email; ?>">
		</div>

	    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" class="btn btn-primary">
	    <input type="submit" name="submit" value="submit" class="btn btn-primary">
	  </fieldset>
	</form>
</div>
<?php include 'inc/footer.php';?>