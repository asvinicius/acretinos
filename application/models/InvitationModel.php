<?php
class InvitationModel extends CI_Model{
    
    protected $invitationid;
    protected $invitationteam;
    protected $invitationuser;
    protected $invitationdate;
    protected $invitationcategory;
    protected $invitationstatus;
    
    function __construct() {
        parent::__construct();
		
            $this->setInvitationid(null);
            $this->setInvitationteam(null);
            $this->setInvitationuser(null);
            $this->setInvitationdate(null);
            $this->setInvitationcategory(null);
            $this->setInvitationstatus(null);
    }
    
    function getInvitationid() {
        return $this->invitationid;
    }

    function getInvitationteam() {
        return $this->invitationteam;
    }

    function getInvitationuser() {
        return $this->invitationuser;
    }

    function getInvitationdate() {
        return $this->invitationdate;
    }

    function getInvitationcategory() {
        return $this->invitationcategory;
    }

    function getInvitationstatus() {
        return $this->invitationstatus;
    }

    function setInvitationid($invitationid) {
        $this->invitationid = $invitationid;
    }

    function setInvitationteam($invitationteam) {
        $this->invitationteam = $invitationteam;
    }

    function setInvitationuser($invitationuser) {
        $this->invitationuser = $invitationuser;
    }

    function setInvitationdate($invitationdate) {
        $this->invitationdate = $invitationdate;
    }

    function setInvitationcategory($invitationcategory) {
        $this->invitationcategory = $invitationcategory;
    }

    function setInvitationstatus($invitationstatus) {
        $this->invitationstatus = $invitationstatus;
    }

}