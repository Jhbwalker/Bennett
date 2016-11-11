<?php
if( isset($_POST['_Name']) && isset($_POST['_Email']) && isset($_POST['_Message']) && isset($_POST['_Telephone'])){

  $Name = $_POST['_Name'];
  $Email = $_POST['_Email'];
  $Message = nl2br ($_POST['_Meassage']);
  $Num - $_POST['_Telephone'];
  $to = "jarrel62@gmail.com";
  $from = $_Email;
  $subject = "A message recieved from".$Name.".";
  $message = '<b>Name: </b>'.$Name.'<br><b>Email:'.$Email.' <p>'.$Message.'</p> <br><b>Telephone:</b>'.$Num;
  $headers = "From: $from\n";
  $headers .="MIME-Version: 1.0\n";
  $headers .="Content-type: text/html; charset=iso-8859-1\n";
  if(mail($to,$subject,$message,$headers)){
    echo "success!";
  }else{
    echo "The server failed to send the Message. Please reload and try again later.";
  }

}
  ?>