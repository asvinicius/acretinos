<?php
class OrderModel extends CI_Model{
    
    protected $orderid;
    protected $orderuser;
    protected $orderprice;
    protected $orderattachment;
    protected $orderdate;
    protected $orderstatus;
    
    function __construct() {
        parent::__construct();
		
		$this->setOrderid(null);
		$this->setOrderuser(null);
		$this->setOrderprice(null);
		$this->setOrderattachment(null);
		$this->setOrderdate(null);
		$this->setOrderstatus(null);
    }
}