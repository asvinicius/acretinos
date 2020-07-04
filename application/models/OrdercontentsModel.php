<?php
class OrdercontentsModel extends CI_Model{
    
    protected $oc_id;
    protected $oc_order;
    protected $oc_product;
    protected $oc_category;
    protected $oc_team;
    protected $oc_price;
    protected $oc_status;
    
    function __construct() {
        parent::__construct();
		
		$this->setOc_id(null);
		$this->setOc_order(null);
		$this->setOc_product(null);
		$this->setOc_category(null);
		$this->setOc_team(null);
		$this->setOc_price(null);
		$this->setOc_status(null);
    }
}