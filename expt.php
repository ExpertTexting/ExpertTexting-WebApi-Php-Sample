<?php
class experttexting_sms
{
	// Base URLS for three methods
    public $base_url_SendSMS = 'https://www.experttexting.com/exptapi/exptsms.asmx/SendSMS';
    public $base_url_SendSMSUnicode = 'https://www.experttexting.com/exptapi/exptsms.asmx/SendSMSUnicode';
    public $base_url_QueryBalance = 'https://www.experttexting.com/exptapi/exptsms.asmx/QueryBalance';
    
	// Public Variables that are used as parameters in API calls
    public $username = 'ENTER YOUR USERNAME HERE';  
    public $password = 'ENTER YOUR PASSWORD HERE';
    public $apikey = 'ENTER YOUR API KEY HERE';
    public $msgtext = ''; 	// LET THIS REMAIN BLANK
    public $from = '';		// LET THIS REMAIN BLANK
    public $to = '';		// LET THIS REMAIN BLANK
    
	// SEND SMS FUNCTION FOR SIMPLE TEXT
    function send()
    {
        $fieldcnt    = 6;
        $fieldstring = "Userid=$this->username&pwd=$this->password&APIKEY=$this->apikey&MSG=$this->msgtext&FROM=$this->from&To=$this->to";
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->base_url_SendSMS);
        curl_setopt($ch, CURLOPT_POST, $fieldcnt);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fieldstring);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $res = curl_exec($ch);
        curl_close($ch);
        return $res;
    }
    
	// SEND SMS FUNCTION FOR UNICODE TEXT
    function sendUnicode()
    {
        $fieldcnt    = 6;
        $fieldstring = "Userid=$this->username&pwd=$this->password&APIKEY=$this->apikey&MSG=$this->msgtext&FROM=$this->from&To=$this->to";
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->base_url_SendSMSUnicode);
        curl_setopt($ch, CURLOPT_POST, $fieldcnt);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fieldstring);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $res = curl_exec($ch);
        curl_close($ch);
        return $res;
    }
    
    // FUNCTION TO QUERY YOUR ACCOUNT BALANCE
    function QueryBalance()
    {
        $fieldcnt    = 3;
        $fieldstring = "Userid=$this->username&pwd=$this->password&APIKEY=$this->apikey";
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->base_url_QueryBalance);
        curl_setopt($ch, CURLOPT_POST, $fieldcnt);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fieldstring);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $res = curl_exec($ch);
        curl_close($ch);
        return $res;
    }
}
?> 