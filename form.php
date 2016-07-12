 <?php

      
      $to = 'habib41juwel@gmail.com';
      $subject  = "=?UTF-8?B?".base64_encode('CPS')."?=";
      @$name=$_POST['name'];    
      @$phone=$_POST['phone'];    
      @$email=$_POST['email'];   
      @$option=$_POST['option'];   
      @$details=$_POST['details'];   
      
      $headers = "MIME-Version: 1.0\r\n";
      $headers .= "Content-type: text/html; charset=utf-8\r\n"; 
      @$message = '<!DOCTYPE html><html><body>Name: '.strip_tags($name).
          
      
      '<br />Phone: '.strip_tags($phone).
      '<br />Email: '.strip_tags($email).  
      '<br />Selected Option: '.strip_tags($option).  
      '<br />Message: '.strip_tags($details).  

      '</body></html>'; 
      
      
  
       
      $result = mail($to,$subject,$message,$headers);
       if($result)
       {
        header('Location:thankyou.html');
                          echo '<script>history.go(-1);</script>';
       } else {
        echo '<script language="javascript">alert("Failed, please submit form again or call us directly.")</script>';
        echo '<script language="javascript">history.go(-1);</script>';
                         }
?>
     