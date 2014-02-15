<?php
// Check if the IP is in a provided range
function in_ip_range($ip_one, $ip_two=false){ 
    if($ip_two===false){ 
        if($ip_one==$_SERVER['REMOTE_ADDR']){ 
            $ip=true; 
        }else{ 
            $ip=false; 
        } 
    }else{ 
        if(ip2long($ip_one)<=ip2long($_SERVER['REMOTE_ADDR']) && ip2long($ip_two)>=ip2long($_SERVER['REMOTE_ADDR'])){ 
            $ip=true; 
        }else{ 
            $ip=false; 
        } 
    } 
    if ($ip)
        return $_SERVER['REMOTE_ADDR'];
    else
        return '0.0.0.0';
} 

function checkValidIP( $clientIP){
    
    $validIPs = array(
        '127.0.0.1',
	    in_ip_range('24.212.207.0','24.212.207.255'),
	    in_ip_range('207.210.32.0','207.210.32.255'),
    );

    foreach ($validIPs as $iP){
        if ($clientIP === $iP){

            return true;
            exit();
        }
        
    }
}

return;

?>



