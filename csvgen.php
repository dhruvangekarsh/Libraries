<?php			
				$fp = fopen('include/contacts.csv', 'a');
				$val = array("$propertynumber","$arrivaldate","$departuredate","$prename","$firstname","$lastname","$email","$phone","$adults","$children","$smoking","$pets","$comments","$now");
				fputcsv($fp, $val);
				
				
				$single_fp = fopen('include/contact.csv', 'w');
				$single_val = array("$propertynumber","$arrivaldate","$departuredate","$prename","$firstname","$lastname","$email","$phone","$adults","$children","$smoking","$pets","$comments","$now");
				fputcsv($single_fp, $single_val);
				
				fclose($fp);
				
?>