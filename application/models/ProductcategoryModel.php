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
    
    function getPcat_id() {
        return $this->pcat_id;
    }

    function getPcat_name() {
        return $this->pcat_name;
    }

    function getPcat_description() {
        return $this->pcat_description;
    }

    function getPcat_status() {
        return $this->pcat_status;
    }

    function setPcat_id($pcat_id) {
        $this->pcat_id = $pcat_id;
    }

    function setPcat_name($pcat_name) {
        $this->pcat_name = $pcat_name;
    }

    function setPcat_description($pcat_description) {
        $this->pcat_description = $pcat_description;
    }

    function setPcat_status($pcat_status) {
        $this->pcat_status = $pcat_status;
    }


}