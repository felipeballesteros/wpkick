<?php

function checkValidIP( $clientIP){
    
    $validIPs = array(
        '127.0.0.1'
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



