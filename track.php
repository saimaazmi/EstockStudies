<?php
	if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['code']) && isset($_POST['copy'])) {
		if(($_POST['name'] != '') && ($_POST['phone'] != '') && ($_POST['code'] != '') &($_POST['copy'] != '')) {
			if((strlen(trim($_POST['code'])) == 5) && (strlen(trim($_POST['copy'])) == 5)) {
				if(trim($_POST['code']) == trim($_POST['copy'])) {
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
					fwrite($a,"Name: $_POST[name], Phone: $_POST[phone], Stamp: ".date("d-m-Y H:i:s")."\n*******************\n");
					fwrite($a,$oldData);
					fclose($a);
					header("Location: https://estockstudies.com/thankyou.html");
					exit();
				}
			}
		}
	}
	header("Location: https://estockstudies.com/error.html");
?>