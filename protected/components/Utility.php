<?php

class Utility{

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
}