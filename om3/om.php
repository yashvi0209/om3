<?php
//get data from form  
$Student's Name = $_POST['Student's Name'];
$Father's name= $_POST['Father's name'];
$Mother's name= $_POST['Mother's name'];
$Mobile no = $_POST['Mobile no'];
$Addhar no = $_POST['Addhar no'];
$Age = $_POST['Age'];
$Date of Birth = $_POST['Date of Birth'];
$Select Gender = $_POST['Select Gender'];
$Stdandard = $_POST['Stdandard'];
$to = "vnraj1982@gmail.com";
$subject = "Anand International School";
$txt ="Student's Name = ". $name . "\r\n  Father's name = " . $name . "\r\n Mother's name =" . $name "Mobile no = ". $name .  "Addhar no = ". $name .  "Age = ". $name .  "Date of Birth = ". $name .  "Select Gender = ". $name .  "Stdandard = ". $name . ;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("om3.html");
?>