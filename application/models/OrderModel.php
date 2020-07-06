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
    
    function getOrderid() {
        return $this->orderid;
    }

    function getOrderuser() {
        return $this->orderuser;
    }

    function getOrderprice() {
        return $this->orderprice;
    }

    function getOrderattachment() {
        return $this->orderattachment;
    }

    function getOrderdate() {
        return $this->orderdate;
    }

    function getOrderstatus() {
        return $this->orderstatus;
    }

    function setOrderid($orderid) {
        $this->orderid = $orderid;
    }

    function setOrderuser($orderuser) {
        $this->orderuser = $orderuser;
    }

    function setOrderprice($orderprice) {
        $this->orderprice = $orderprice;
    }

    function setOrderattachment($orderattachment) {
        $this->orderattachment = $orderattachment;
    }

    function setOrderdate($orderdate) {
        $this->orderdate = $orderdate;
    }

    function setOrderstatus($orderstatus) {
        $this->orderstatus = $orderstatus;
    }


}