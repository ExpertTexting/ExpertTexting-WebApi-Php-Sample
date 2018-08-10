<?php
class experttexting_sms
{
	// Base URLS for three methods
    public $base_url_SendSMS = 'https://www.experttexting.com/ExptRestApi/sms/json/Message/Send';
    public $base_url_QueryBalance = 'https://www.experttexting.com/ExptRestApi/sms/json/Account/Balance?';
    
	// Public Variables that are used as parameters in API calls
    public $username = 'ENTER YOUR USERNAME HERE';  
    public $password = 'ENTER YOUR PASSWORD HERE';
    public $apikey = 'ENTER YOUR API KEY HERE';
    public $from = 'DEFAULT';	// USE DEFAULT IN MOST CASES, CONTACT SUPPORT FOR FURTHER DETAILS>
    public $to = '';		// LET THIS REMAIN BLANK
    public $msgtext = ''; 	// LET THIS REMAIN BLANK
    
function send()
    {
        $fieldcnt    = 6;
        $fieldstring = "username=$this->username&password=$this->password&api_key=$this->apikey&FROM=$this->from&to=$this->to&text=$this->msgtext";
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->base_url_SendSMS);
        curl_setopt($ch, CURLOPT_POST, $fieldcnt);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fieldstring);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $res = curl_exec($ch);
        $err = curl_error($ch);
        curl_close($ch);
        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          echo $res;
        }
    }
    
  // SEND SMS FUNCTION FOR UNICODE TEXT
    function sendUnicode()
    {
        $fieldcnt    = 6;
        $fieldstring = "username=$this->username&password=$this->password&api_key=$this->api_key&FROM=$this->from&to=$this->to&text=$this->msgtext&type=unicode";
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->base_url_SendSMSUnicode);
        curl_setopt($ch, CURLOPT_POST, $fieldcnt);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fieldstring);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $res = curl_exec($ch);
        $err = curl_error($ch);
        curl_close($ch);
        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          echo $res;
        }
    }
    
    // FUNCTION TO QUERY YOUR ACCOUNT BALANCE
    function QueryBalance()
    {
        
        $fieldstring = "username=$this->username&password=$this->password&api_key=$this->apikey";
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL =>  $this->base_url_QueryBalance . $fieldstring ,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_SSL_VERIFYPEER => false,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET"
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          echo $response;
        }
    }
}
?> 
