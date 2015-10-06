<?php

class Utility{
	/**
	 * Method For checking whether the logged in User is ADMIN or Not
	 */
    public static function isAdmin(){        
        if(isset(Yii::app()->session['userlevel'])){
        	$userlevel=Yii::app()->session['userlevel'];
        	if($userlevel==1)
        		return true;
        	else
        		return false;
        }
        
        return false;
    }
    
     /**
     * Method For sending Emails.
     */
    public static function SendMail($view,$to,$subject,$params,$from){
    	$message = new YiiMailMessage;
    	$message->view = $view;
    	$message->subject =$subject ;
    	$message->setBody($params, 'text/html');
    	$message->addTo($to);
    	$message->from = $from;
    	Yii::app()->mail->send($message);
    }
}