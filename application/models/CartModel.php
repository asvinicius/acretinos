<?php
class CartModel extends CI_Model{
    
    protected $cartid;
    protected $cartuser;
    protected $cartproduct;
    protected $cartteam;
    protected $cartcreationdate;
    
    function __construct() {
        parent::__construct();
            
        $this->setCartid(null);
        $this->setCartuser(null);
        $this->setCartproduct(null);
        $this->setCartteam(null);
        $this->setCartcreationdate(null);
    }
    
    function getCartid() {
        return $this->cartid;
    }

    function getCartuser() {
        return $this->cartuser;
    }

    function getCartproduct() {
        return $this->cartproduct;
    }

    function getCartteam() {
        return $this->cartteam;
    }

    function getCartcreationdate() {
        return $this->cartcreationdate;
    }

    function setCartid($cartid) {
        $this->cartid = $cartid;
    }

    function setCartuser($cartuser) {
        $this->cartuser = $cartuser;
    }

    function setCartproduct($cartproduct) {
        $this->cartproduct = $cartproduct;
    }

    function setCartteam($cartteam) {
        $this->cartteam = $cartteam;
    }

    function setCartcreationdate($cartcreationdate) {
        $this->cartcreationdate = $cartcreationdate;
    }


}