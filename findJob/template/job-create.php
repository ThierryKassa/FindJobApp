 <?php include 'inc/header.php';?>
<div class="bs-docs-section">
	<form method="POST" action="create.php">
	  <fieldset>
	    <legend>Create Job</legend>
		<div class="form-group">
		  <label class="col-form-label" for="inputDefault">Company</label>
		  <input type="text" name="company" class="form-control" placeholder="company name" id="company" value="" >
		</div>
		<div class="form-group">
	      <label for="categorie_id">Categorie</label>
	      <select class="form-control" name="categorie_id" id="categorie_id" >
	        <option selected="" value="0">Choose categorie</option>
	        <?php foreach($categories as $categorie):?>
	        <?php echo "<option value='".$categorie->categorie_id."'>".$categorie->name ."</option>";?>
	     	<?php endforeach;?>
	      </select>
	    </div>
	    <div class="form-group">
		  <label class="col-form-label" for="inputDefault">Job title</label>
		  <input type="text" name="job_title" class="form-control" placeholder="Job title" id="job_title"  value="">
		</div>
		<div class="form-group">
	      <label for="exampleTextarea">Description</label>
	      <textarea class="form-control" id="description" rows="2" name="description"></textarea>
	    </div>
	    <div class="form-group">
		  <label class="col-form-label" for="inputDefault">Location</label>
		  <input type="text" name="location" class="form-control" placeholder="Location" id="location"  value="">
		</div>
	    <div class="form-group">
		  <label class="col-form-label" for="inputDefault">Salary</label>
		  <input type="text" name="salary" class="form-control" placeholder="Salary" id="salary" value="">
		</div>
	    <div class="form-group">
		  <label class="col-form-label" for="inputDefault">Contact user</label>
		  <input type="text" name="contact_user" class="form-control" placeholder="Contact user" id="contact_user" value="">
		</div>
		 <div class="form-group">
		  <label class="col-form-label" for="inputDefault">Contact email</label>
		  <input type="text" name="contact_email" class="form-control" placeholder="Contact email" id="contact_email" value="">
		</div>
	    <input type="submit" name="submit" value="submit" class="btn btn-primary">
	  </fieldset>
	</form>
</div>
<?php include 'inc/footer.php';?>