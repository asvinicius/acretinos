<?php
class UserModel extends CI_Model{
    
    protected $userid;
    protected $username;
    protected $usernick;
    protected $useremail;
    protected $userpassword;
    protected $userstatus;
    
    function __construct() {
        parent::__construct();
        $this->setUserid(null);
        $this->setUsername(null);
        $this->setUsernick(null);
        $this->setUseremail(null);
        $this->setUserpassword(null);
        $this->setUserstatus(null);
    }
    
    function getUserid() {
        return $this->userid;
    }

    function getUsername() {
        return $this->username;
    }

    function getUsernick() {
        return $this->usernick;
    }

    function getUseremail() {
        return $this->useremail;
    }

    function getUserpassword() {
        return $this->userpassword;
    }

    function getUserstatus() {
        return $this->userstatus;
    }

    function setUserid($userid) {
        $this->userid = $userid;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setUsernick($usernick) {
        $this->usernick = $usernick;
    }

    function setUseremail($useremail) {
        $this->useremail = $useremail;
    }

    function setUserpassword($userpassword) {
        $this->userpassword = $userpassword;
    }

    function setUserstatus($userstatus) {
        $this->userstatus = $userstatus;
    }


}