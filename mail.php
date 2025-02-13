<?php
//get data from form
$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['mobile_number'];
$subject= $_POST['subject'];
$message= $_POST['message'];
$to = "estockstudies.com@gmail.com";
if($to!=NULL) {
	if(($name != '') && ($phone != '')) {
		$txt ="Name = ". $name . "\r\nEmail = " . $email . "\r\nPhone = " . $phone ."\r\nSubject = " . $subject ."\r\nMessage = " . $message;
		$headers = "From: noreply@estockstudies.com" . "\r\n" .
		"CC: noreply@estockstudies.com";
	    //mail($to,$subject,$txt,$headers);
		//Edited by ksy bypass mail and save details in enquiry.txt file
		$handle = fopen("enquiry.php", "r");
		$lineNum = 1;
		$oldData = "";
		if($handle) {
		    while(($line = fgets($handle)) !== false) {
		    	if($lineNum == 1) {
		    		//continue;
		    	}
		    	if($lineNum > 1000) {
		    		break;
		    	}
		        $oldData = $oldData . $line;
		        $oldData = str_replace("<?php if(IS_INCLUDED != 2) { return; } ?>", "", $oldData);
		    }
		    fclose($handle);
		}
		file_put_contents("enquiry.php", "");
		$a = fopen("enquiry.php", "a");
		fwrite($a,"<?php if(IS_INCLUDED != 2) { return; } ?>\n");
		fwrite($a,"$txt\r\nStamp: ".date("d-m-Y H:i:s")."\n*******************\n");
		fwrite($a,$oldData);
		fclose($a);

		//redirect
		header("Location:contact.php?res=yes");
	} else {
		//redirect
		header("Location:contact.php?res=no");
	}
}
?>