<?php
class Model_Structure_ChatLog extends Model_Structure_ChatLogBase
{
    public function __construct($arrData = null)
    {
        parent::__construct($arrData);
        return;
    }
    
    public function setFromFile($fileLine){
    	$lineSplit = preg_split('/\n|\r\n?/', $fileLine);
    	$indicies = array(
    			"type",
    			"color",
    			"gender",
    			"status",
    			"username",
    			"recipient",
    			"line"
    			);//$colr\r\n$gndr\r\n$stat\r\n$user\r\n$priv\r\n$data
    	foreach($indicies as $i=>$name){
    		$$name = (isset($lineSplit[$i])) ? $lineSplit[$i] : "";
    	}
    	// gender and status have not been implemented
    	// type should always be m thus ignorable
        $userProvider = new Model_Data_Phpbb_UsersProvider();
    	$user = $userProvider->getOneByName($username);
    	if(is_object($user)){
    		$this->setUserId($user->getUserId());
    	}
    	$recipientObj = $userProvider->getOneByName($recipient);
    	if(is_object($recipientObj)){
    		$this->setRecipientUserId($recipientObj->getUserId());
    	}
    	
    	$this->setColor($color);
    	$this->setHandle($username);
    	$this->setRecipientUsername($recipient);
    	$this->setText($line);
    }
}
