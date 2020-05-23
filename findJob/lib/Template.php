<?php
class Template{
	
	protected $template; //path to the template
	protected $extraVar = array(); //all extra variable want to use in the template

	public function __construct($template){
		$this->template = $template;
	}

	public function __get($key){
		return $this->extraVar[$key];
	}

	public function __set($key, $value){
		$this->extraVar[$key] = $value;
	}

	public function __toString(){
		extract($this->extraVar);
		chdir(dirname($this->template));

		ob_start();

		include basename($this->template); 
		
		return ob_get_clean();
	}
}