<?php
class XpressLeadProApi {
    public $auth_key;
    public $exhibitor_id;
    public $event_code;
    
    public function __construct($auth_key=null,$exhibitor_id=null,$event_code=null) {
        $this->auth_key = $auth_key;
        $this->exhibitor_id = $exhibitor_id;
        $this->event_code = $event_code;
        echo "Xpress Lead Pro Api Initialized..\n";
    }

    //USER DATA//
    function GetBadgeLayout() {
    	$ch = curl_init();
		$headers = array();
		$headers[] = "Accept: application/json";
		$hook_url = "https://www.xpressleadpro.com/Leads/LeadsAPI/LeadsAPI.php?AuthKey=$this->auth_key&exid=$this->exhibitor_id&eventcode=$this->event_code&function=GETBADGElayout";
		curl_setopt( $ch, CURLOPT_URL, $hook_url );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers );
		$raw_data = curl_exec( $ch );
		return $raw_data;
    }

    function GetBadgeInfo($badge_number,$last_name) {
    	$ch = curl_init();
		$headers = array();
		$headers[] = "Accept: application/json";
		$hook_url = "https://www.xpressleadpro.com/Leads/LeadsAPI/LeadsAPI.php?AuthKey=$this->auth_key&exid=$this->exhibitor_id&eventcode=$this->event_code&function=GETBADGEinfo&badge=$badge_number&lastname=$last_name";
		curl_setopt( $ch, CURLOPT_URL, $hook_url );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers );
		$raw_data = curl_exec( $ch );
		return $raw_data;
    }
}