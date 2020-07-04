<?php
class ProductcategoryModel extends CI_Model{
    
    protected $pcat_id;
    protected $pcat_name;
    protected $pcat_description;
    protected $pcat_status;
    
    function __construct() {
        parent::__construct();
		
		$this->setPcat_id(null);
		$this->setPcat_name(null);
		$this->setPcat_description(null);
		$this->setPcat_status(null);
    }
}