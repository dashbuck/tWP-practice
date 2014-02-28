
			<h1> Contact Us</h1>
			<p>
			If you have a question for the unfathomably beautiful and gracious overlords that 
			exist within the Blue Nova, please fill out the form below:
			</p>
			<br />
            <div id=cform> <!-- Following PHP adapted from http://www.w3schools.com/php/showphp.asp?filename=demo_form_validation_complete -->
				<?php
				// define variables and set to empty values
				$nameErr = $emailErr = $genderErr = $subjectErr = "";
				$fname = $lname = $email = $gender = $comment = $subject = $sent = "";

				if ($_SERVER["REQUEST_METHOD"] == "POST") //If the submit button gets hit:
				{
				   if (empty($_POST["fname"])) //If first name is empty when POST happens, put text in $nameErr to be shown
					 {
					 $nameErr = "Full name is required";
					 }
				   else
					 {
					 $fname = test_input($_POST["fname"]);
					 // check if name only contains letters and whitespace
					 if (!preg_match("/^[a-zA-Z ]*$/",$fname)) //if it doesn't, put text in $nameErr to be shown
					   {
					   $nameErr = "Only letters and spaces are allowed"; 
					   }
					 }
					 
				   if (empty($_POST["lname"])) //If last name is empty when POST happens, put text in $nameErr to be shown
					 {$nameErr = "Full name is required";}
				   else
					 {
					 $lname = test_input($_POST["lname"]);
					 // check if name only contains letters and whitespace
					 if (!preg_match("/^[a-zA-Z ]*$/",$lname)) //if it doesn't, put text in $nameErr to be shown
					   {
					   $nameErr = "Only letters and spaces are allowed"; 
					   }
					 }
				   
				   
				   
				   if (empty($_POST["email"]))
					 {$emailErr = "Please input your email";}
				   else
					 {
					 $email = test_input($_POST["email"]);
					 // check if e-mail address syntax is valid
					 if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
					   {
					   $emailErr = "Invalid email format"; 
					   }
					 }
					 
				   if (empty($_POST["subject"])) 
				   //It's fine to leave this blank, so no error, just leave it blank and don't bother to run the preg_match
					 {$subject = "";}
				   else
					 {
					 $subject = test_input($_POST["subject"]);
					 if (!preg_match("/^[a-zA-Z ]*$/",$subject))
					   {
					   $subjectErr = "Only letters and spaces are allowed"; 
					   }
					 }

				   if (empty($_POST["comment"]))
					 {$comment = "";}
				   else
					 {$comment = test_input($_POST["comment"]);}

				   if ($nameErr == "" && $emailErr == "" && $subjectErr == "")
					{	
						$subject = wordwrap($subject, 70);
						$comment = wordwrap($comment, 70);
						$body = $subject."\n"."====================="."\n".$comment;
						mail("em.dash.buck@gmail.com","Blue Nova Message",$body,$email);
						{$sent = "Message sent.";}
						}
						
				   else
					 {$sent = "Message not sent due to errors.";
					  $savecomment = "<strong>Your message:</strong><br>".$comment;
					 }

				}

				function test_input($data)
				{
					 $data = trim($data);
					 $data = stripslashes($data);
					 $data = htmlspecialchars($data);
					 return $data;
				}
				
				?>

			<p><span class="error">* required field.</span></p>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
			   <label for="fname">First Name: </label><input type="text" name="fname" value="<?php echo $fname;?>">
			   
			   <span class="error">*</span><br>
			   <label for="lname">Last Name: </label><input type="text" name="lname" value="<?php echo $lname;?>">
			   <span class="error">* <br><?php echo $nameErr;?></span>
			   <br>
			   <label for="email">E-mail: </label><input type="text" name="email" value="<?php echo $email;?>"> 
			   <span class="error">* <br><?php echo $emailErr;?></span>
			   <br>
			   <label for="subject">Subject: </label><input type="text" name="subject" value="<?php echo $subject;?>">
			   <span class="error"><br><?php echo $subjectErr;?></span>
			   <textarea name="comment" value="<?php echo $comment;?>" rows=5 style="width:100%;height:500%;"></textarea>
			   <br><br>
			   <input type="submit" name="submit" value="Submit"> 
			</form>
			
			<div>
			<?php
			echo "<h2>".$sent."</h2>";
			echo "<br>";
			echo $savecomment;
			?>
			</div>
			
            </div> <!-- cform div -->