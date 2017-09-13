<!DOCTYPE html>
<html>
    <body>
        <div id="wrapper">
		<?php 
			session_start();
			if(!isset($_SESSION['AdminID']))  {
				header("Location:userlogin.php"); 
			}
			include("header.php");
			?>
			
		<?php 
			error_reporting(E_ALL);
			ini_set('display_errors', 'On');
			ini_set('html_errors', 'On');
			require_once 'db_config.php';

			echo "Session AdminID = " . $_SESSION['AdminID'] . "<br>"; 
			echo "Session id = ".session_id() . "<br>";
			echo "Last Login Date = " . $_SESSION['lastlogindate'];
			?>

            <nav>
                <div id="menuItems">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="menu.php">Menu</a></li>
                        <li><a href="contact.php">Contact</a></li>
						<li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </nav>
            <div id="content" class="clearfix">
				<div class="main">
                		<?php
						require_once('/mailinglistDAO.php');
						require_once('/mailing.php');
						$mailinglistDAO = new mailinglistDAO();
						$mailinglists = $mailinglistDAO -> getMailingLists();

						try{
							if ($mailinglists){
								echo '<table border=\'1\'>';
								echo '<tr> <th>Customer Name</th> <th>Phone Number</th><th>Email Address</th> <th>Referrer</th></tr>';
								foreach ($mailinglists as $ml){
									echo '<tr>';
									echo '<td>'.$ml ->getcustomerName().'</td>';
									echo '<td>'.$ml ->getphoneNumber().'</td>';
									echo '<td>'.$ml ->getemailAddress().'</td>';
									echo '<td>'.$ml ->getreferrer().'</td>';
									echo '</tr>';
								}
								echo "</table>";
							}
								
							}catch (Exception $e){
							echo '<h2>Error on page.<h2>';
							echo '<p>' . $e->getmessage().'</p>';
						}

						?>
				</div>
            </div><!-- End Content -->	
			<?php include 'footer.php';?> 
        </div><!-- End Wrapper -->
    </body>
</html>
