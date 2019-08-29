<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <style>
        body {
            background-image: url("image/back_login.jpg");
           
            }
        #buttonCPE {
                margin-left : 200px;
        }

        #buttonlogin {
                margin-left : 300px;
                margin-top :  50px;
        }

    </style>
   
</head>
<body>
            
            <input type="image" src="image/CPE_login.png" width="450" id="buttonCPE">
            <p>
                <a href="<?php echo $loginURL;?>">
                     <img src="https://abeon-hosting.com/images/icon-google-png-1.png" width="250" id="buttonlogin">
                </a>
            </p>
</body>
</html>