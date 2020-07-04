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
}