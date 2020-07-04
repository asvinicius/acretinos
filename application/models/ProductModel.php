<?php
class ProductModel extends CI_Model{
    
    protected $productid;
    protected $productname;
    protected $productprice;
    protected $productcategory;
    protected $productstatus;
    
    function __construct() {
        parent::__construct();
		
		$this->setProductid(null);
		$this->setProductname(null);
		$this->setProductprice(null);
		$this->setProductcategory(null);
		$this->setProductstatus(null);
    }
}