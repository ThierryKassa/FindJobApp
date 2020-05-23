<?php
class Job {
	private $db;

	public function __construct(){
		$this->db = new Database0;
	}

	public function getAllJob(){
		$this->db->query("SELECT jobs.*, categories.name 
						FROM jobs
						INNER JOIN categories
						ON  jobs.categorie_id =  categories.categorie_id
						ORDER BY post_date desc");
		$results =  $this->db->resultSet();
		return $results;
	}

	public function getJobByCategorie($catID){
		$this->db->query("	SELECT jobs.* , categories.name 
							FROM jobs
							INNER JOIN categories
							ON  jobs.categorie_id =  categories.categorie_id
							WHERE categories.categorie_id = $catID
							ORDER BY post_date desc"
						);
		$results = $this->db->resultSet();
		return $results;
	}


	public function getAllCategories(){
		$this->db->query( "SELECT * FROM categories");
		$results = $this->db->resultSet();
		return $results;
	}

	public function getJob($jobId){
		$this->db->query("	SELECT jobs.*, categories.* 
							FROM jobs
							INNER JOIN  categories
							ON categories.categorie_id
							WHERE id = $jobId"
						);
		$result = $this->db->single();
		return $result;
	}

	public function getCategorie($catID){
		$this->db->query("SELECT * from categories where categorie_id = $catID");
		$result = $this->db->single();
		return $result;
	}

	public function deleteJob($delId){
		$this->db->query("DELETE FROM jobs WHERE id= $delId");

		if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}
	}

	public function updateJob($id, $data){
		
		$this->db->query("	UPDATE jobs
							SET categorie_id = :categorie_id,
								company = :company,
								job_title = :job_title,
								description = :description,
								salary = :salary,
								location = :location,
								contact_user = :contact_user,
								contact_email = :contact_email
							WHERE id = $id");

		$this->db->bind(':categorie_id', $data['categorie_id']);
		$this->db->bind(':company', $data['company']);
		$this->db->bind(':job_title', $data['job_title']);
		$this->db->bind(':description', $data['description']);
		$this->db->bind(':salary', $data['salary']);
		$this->db->bind(':location', $data['location']);
		$this->db->bind(':contact_user', $data['contact_user']);
		$this->db->bind(':contact_email', $data['contact_email']);

		if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}
		
	}

	public function create($data){
		$this->db->query("	INSERT INTO  jobs(categorie_id, company, job_title, description, salary, location, contact_user, contact_email)
							VALUES ( :categorie_id, :company, :job_title, :description,:salary, :location, :contact_user, :contact_email)");

		$this->db->bind(':categorie_id', $data['categorie_id']);
		$this->db->bind(':company', $data['company']);
		$this->db->bind(':job_title', $data['job_title']);
		$this->db->bind(':description', $data['description']);
		$this->db->bind(':salary', $data['salary']);
		$this->db->bind(':location', $data['location']);
		$this->db->bind(':contact_user', $data['contact_user']);
		$this->db->bind(':contact_email', $data['contact_email']);

		if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}
	}
}