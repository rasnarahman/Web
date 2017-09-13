<!DOCTYPE html>
<html>
    <body>
        <div id="wrapper">
		<?php include 'header.php';?>
            <nav>
                <div id="menuItems">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="menu.php">Menu</a></li>
                        <li><a href="contact.php">Contact</a></li>
						<li><a href="mailing_list.php">List</a></li>
                    </ul>
                </div>
            </nav>
            <div id="content" class="clearfix">

				<aside>
									<h2>Mailing Address</h2>
									<h3>1385 Woodroffe Ave<br>
										Ottawa, ON K4C1A4</h3>
									<h2>Phone Number</h2>
									<h3>(613)727-4723</h3>
									<h2>Fax Number</h2>
									<h3>(613)555-1212</h3>
									<h2>Email Address</h2>
									<h3>info@wpeatery.com</h3>
				</aside>
			   
				<div class="main">
                		<?php 	
							include_once 'validation.php';
							$servername = "localhost";
							$username = "root";
							$password = "ddvava123raS*#";
							$databaseName = "wp_eatery";

							// Create connection
							$conn = mysqli_connect($servername, $username, $password, $databaseName);

							// Check connection
							if (!$conn) die("Connection failed: " . mysqli_connect_error());
							
							if (isset($_POST['btnSubmit'])&& (empty($error))) { // if there is no error, then process user inputs			
								
								$customerName 		= trim($_POST['customerName']);
								$phoneNumber 		= trim($_POST['phoneNumber']);
								$emailAddress 	    = password_hash($_POST['emailAddress'],PASSWORD_DEFAULT);
								$referral           = $_POST['referral'];
								
								$sql = "INSERT INTO mailingList (customerName, phoneNumber, emailAddress, referrer)
								VALUES ('$customerName','$phoneNumber','$emailAddress', '$referral')";

								if ($conn->query($sql) === TRUE) {
									
									echo '<p class="success">Thank you for Signing up.</p>'; 
								
								} else {
									
									echo '<p class="error">Error:'. $sql . "<br>" . $conn->error.'</p>'; 

								}
								
								$target_path = "files/";

								$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 

								if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
									$fileUploaded = "The file ".  basename( $_FILES['uploadedfile']['name']). 
									" has been uploaded";
									echo $fileUploaded;
								} else{
									echo "No file was selected for uploading!";
								}

								$conn->close();
									
							}
							
					?>
				</div>
            </div><!-- End Content -->	
			<?php include 'footer.php';?> 
        </div><!-- End Wrapper -->
    </body>
</html>
