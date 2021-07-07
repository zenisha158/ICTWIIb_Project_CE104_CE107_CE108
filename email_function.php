<?php
$to=$email;
$subject="E-commerce Website";
$message = "
<html>
<head>
<title>$username</title>
</head>
<body>
<p></p>
<table>
<tr>
<th>$password</th>
<th></th>
</tr>
<tr>
<td>Devansh</td>
<td>Shah</td>
</tr>
</table>
</body>
</html>
";
//$headers= " ";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";

if(mail($to,$subject,$message,$headers)){
echo '<div style="background-color:green;font-size:20px;font-weight:600">Your account is created successfully.You can buy the items now.</div>';
}
else{
echo '<div style="background-color:rgba(255,0,0,0.6)">Server is not responding please try again later..</div>';
}
?>
