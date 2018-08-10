# 


Updated to use REST API with JSON Return

# Sample PHP Project For ExpertTexting API
This is a documentation file for the sample PHP project for ExpertTexting API. In this project, you get to know how to use ExpertTexting API in PHP.

By using this sample project, users will be able to make calls programmatically in PHP language through ET's API

## Description
This project consists of two files 

1. Index.php 
2. Expt.php
  
Index.php is included just to show the implementation of the "expt.php" class. "Expt.php" has the following methods in its class : 

1. Send()            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// This method is used to send text sms.
2. SendUnicode()     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// This method is used to send unicode sms.
3. QueryBalance()    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// This method is used to query user account balance.
  
## Usage
Before using this sample project, you need to edit these files with your personal configuration. These configuration includes like adding your account details so that you can call these APIs.

In "Expt.php" class, you need to change the following lines with your own username, password and api key.

```
public $username = 'ENTER YOUR USERNAME HERE';  
public $password = 'ENTER YOUR PASSWORD HERE';
public $apikey = 'ENTER YOUR API KEY HERE';
```
Now in "Index.php", you need to change the following lines with your pre-registered number, desired destination number and the message text that you want to send. 

```
// Sender of the SMS – PreRegistered through the Customer Area.
$expertTexting->from    = 'DEFAULT';  // USE DEFAULT IN MOST CASES.

// The full international mobile number without + or 00
$expertTexting->to      = 'Sample Number Here';

// The SMS content.
$expertTexting->msgtext = urlencode('Message Text Here'); 	
```

Now there are three calls in the "Index.php" file, please uncomment the call as per your liking: 

```
// Use the below method to sent simple text message.
// Uncomment the line below to run this call.
//echo $expertTexting->send();

// Use the below method to sent Send multilangual SMS method that have unicode characters in them.
// Uncomment the line below to run this call.
//echo $expertTexting->sendUnicode();

// Use the below method to query your account balance
// The below call is uncommented thus it will run on page execution.
echo $expertTexting->QueryBalance();
```

Now that is all. You see, that is how simple it is to use ExpertTexting API in PHP language.
