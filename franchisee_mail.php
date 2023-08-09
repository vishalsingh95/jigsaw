<?php
require("class.phpmailer.php");
$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host = "jigsawabacus.com";

$mail->SMTPAuth = true;
//$mail->SMTPSecure = "ssl";
$mail->Port = 587;
$mail->Username = "info@jigsawabacus.com";
$mail->Password = "puchomat";

$mail->From = "info@jigsawabacus.com";
$mail->FromName = "Test from Info";
$mail->AddAddress("info@jigsawabacus.com");
//$mail->AddReplyTo("mail@mail.com");

$mail->IsHTML(true);

$mail->Subject = "Franchisee Enquiry";
$mail->Body = "



<div class='table-wrapper' style='margin: 10px 70px 70px;'>
<table class='fl-table' style='border-radius: 5px;    font-size: 19px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    white-space: nowrap;
    background-color: #e0fdd330;'>

<img src='https://www.jigsawabacus.com/demo/images/Jigsaw.png' style='height:71px; width:200px;'>
<h3 style=' background-color: #fabcb6;'>Franchisee Form</h3><br><br>
<tr style='background-color:#ddd;'><th>Name</th><td>$franName</td></tr><br>
<tr style='background-color:#ddd;'><th>Email</th><td>$franEmail</td></tr><br>
<tr style='background-color:#ddd;'><th>Contact</th><td>$franContact</td></tr><br>
<tr style='background-color:#ddd;'><th>Message</th><td>$franMessage</td></tr><br>
</table>
</div>



<p3>Thanks Regards</p3><br>
<hr></hr>
<p3><span style='color:blue;font-weight:bold;'>IPSupport Team</span></p3><br><br>
<p3 style='font-weight:bold;'>Sabre Edge IT Solutions</p3><br>
<p3><i>We work “Hard” so that you can work “Smart”</i></p3><br>


<p3><span style='font-weight:bold;'>Office :- </span>3208, 2 nd floor, Mahindra Park, Near Rani Bagh, Delhi-110034</p3> <br>
<p3><span style='font-weight:bold'>Desk:- </span> +91 11 4702-4666 | M: +91 93110 24666</p3><br>





<p3><span style='font-weight:bold'>Email :- </span> mail@ipsupport.in </p3><br>
<h3><span style='font-weight:bold'>Url:-</span><a href='https://www.ipsupport.in'> www.ipsupport.in</a></h3><br>

<p3><span style='font-weight:bold;'>DISCLAIMER: </span>This communication is confidential and privileged and is directed to and
for the use of the addressee only. The recipient if not the addressee should not use this
message if erroneously received, and access and use of this e-mail in any manner by
anyone other than the addressee is unauthorized. The recipient acknowledges
that <span style='font-weight:bold'>IPSupport </span> may be unable to exercise control or ensure or guarantee the integrity of
the text of the email message and the text is not warranted as to completeness and
accuracy. Before opening and accessing the attachment, if any, please check and scan
for virus.</p3>";
//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
echo "Message could not be sent. <p>";
echo "Mailer Error: " . $mail->ErrorInfo;
exit;
}

echo "Message has been sent";

?>