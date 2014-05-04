	<?php
		if($_POST){    

			$emailBody.= "Name: ".$_POST['name']."\n";
  			$emailBody.= "Contact Number: ".$_POST['phone']."\n";
  			$emailBody.= "E-mail Address: ".$_POST['email']."\n\n";
  			$emailBody.= "Category: ".$_POST['category']."\n";
  			$emailBody.= "Preferred Group: ".$_POST['group']."\n";

		
			$emailSubject = "Enquiry from the BNI West Yorkshire Website";
  			$emailTo = "rb@pvapps.co.uk";
  			$emailFrom = "From: ".$_POST['email']."";
  
		//Send email
 			mail($emailTo, $emailSubject, $emailBody, $emailFrom);
			} 
		}
	?>