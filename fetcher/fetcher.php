<?php

abstract class fetcher extends browser{
	protected $fetched=false;
	protected $part;
	protected $original;
	protected $has_replacement;
	protected $replacement;
	protected $error=0;
	
	public function __construct($part){
		$this->part = $part;
	}

	abstract public function fetch();

	public function is_error(){
		if (!$this->fetched) trigger_error("is_error() should not be called before fetch()", E_USER_ERROR);
		return $this->error!==0;
	}
	
	public function is_ok(){
		if (!$this->fetched) trigger_error("is_ok() should not be called before fetch()", E_USER_ERROR);
		return $this->error===0;
	}
	
	public function get_error(){
		return $this->error;		
	}
	
	public function get_original(){
		if (!$this->fetched) trigger_error("get_original() should not be called before fetch()", E_USER_ERROR);
		return $this->original;
	}
	
	public function has_replacement(){
		if (!$this->fetched) trigger_error("has_replacement() should not be called before fetch()", E_USER_ERROR);
		return $this->has_replacement;
	}
	
	public function get_replacement(){
		if (!$this->fetched) trigger_error("get_replacement() should not be called before fetch()", E_USER_ERROR);
		return $this->replacement;
	}

}