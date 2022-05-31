
<?php
if (isset($_POST)) {
    $name= $_POST['fname'];
    $mail= $_POST['femail'];
    $phone= $_POST['fnumber'];
    $message= $_POST['fmessage'];

    $regexp = "/\b([a-z0-9._-]+@(?!bsuir)[a-z0-9.]+)\b/ui";
    $correctmessage = preg_replace($regexp,'#Cтоп e-mail#',$mail);
    
   
    $file = fopen("forms.txt","a+");
    fwrite($file,"\n Name: $name
    E-mail: $correctmessage
    Phone: $phone
    Message: $message \n");
    fclose($file);
    echo "\n Name: $name <br/>
    E-mail: $correctmessage <br/>
    Phone: $phone <br/>
    Message: $message \n";
    } else {
    echo "Error";
    
    }

    