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
    
    function getProductid() {
        return $this->productid;
    }

    function getProductname() {
        return $this->productname;
    }

    function getProductprice() {
        return $this->productprice;
    }

    function getProductcategory() {
        return $this->productcategory;
    }

    function getProductstatus() {
        return $this->productstatus;
    }

    function setProductid($productid) {
        $this->productid = $productid;
    }

    function setProductname($productname) {
        $this->productname = $productname;
    }

    function setProductprice($productprice) {
        $this->productprice = $productprice;
    }

    function setProductcategory($productcategory) {
        $this->productcategory = $productcategory;
    }

    function setProductstatus($productstatus) {
        $this->productstatus = $productstatus;
    }


}