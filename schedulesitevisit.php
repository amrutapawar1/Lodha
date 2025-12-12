<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['name'] ?? '';
    $phone = $_POST['modal_my_mobile2'] ?? '';
   $date_time = $_POST['date_time'];

    $to = "botmediadigitalmarketing@gmail.com";
    $subject = "New Lead Notification - Website";

    $message = "
    <html>
    <head>
    
    <title>New Lead</title></head>
    <body>
    <h3>Lead Details</h3>
    <table border='1' cellspacing='0' cellpadding='6'>
        <tr><td><strong>Name</strong></td><td>$fullname</td></tr>
        <tr><td><strong>Phone</strong></td><td>$phone</td></tr>
        <tr><td><strong>Date</strong></td><td>$date_time</td></tr>
    </table>
    </body>
    </html>
    ";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <no_reply@GodrejPtoperties.com>' . "\r\n";
$headers .= 'Cc: botmediadigitalmarketing@gmail.com' . "\r\n";

if(mail($to,$subject,$message,$headers)) //Send an Email. Return true on success or false on error


{
echo 

"<script>window.location.href='https://api.whatsapp.com/send?phone=+917767093332&text=Hi, I saw the project details and scheduled my visit to Godrej Elaris, kindly call me back, I am interested in buying a new property.';</script>";
}
else
{
echo "<script>
alert('Plz Try Agian');
window.location.href='index.html'

;
</script>";
}
}
?>