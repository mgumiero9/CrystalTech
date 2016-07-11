

<?
$body = "";

$name=$_POST['name'];
$Email=$_POST['email'];
$message=$_POST['message'];

    $body .= "Name: " . $name . "\n"; 
    $body .= "Email: " . $Email . "\n"; 
    $body .= "Message: " . $message . "\n";

    //replace with your email
    mail("mgumiero9@gmail.com","CrystalTech New email",$body); 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>alert("Sua mensagem foi enviada com sucesso. Rapidamente entraremos em contato com você.");</script>
<meta HTTP-EQUIV="REFRESH" content="0; url=index.html"> 

</head>