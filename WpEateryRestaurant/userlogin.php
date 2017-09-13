<!DOCTYPE html>
<html>
	<head>
		<title>User Login</title>
	</head>
	<body>
		<div id="wrapper">

			<?php
				include("header.php");

				$con = mysql_connect("localhost","root","ddvava123raS*#");
				mysql_select_db("wp_eatery");
				
				$query = "select * from adminusers";
				$data = mysql_query($query,$con);
				$result = mysql_fetch_assoc($data);
				if(isset($_GET['username']) || isset($_GET['password']))
				if($_GET['username'] == $result["Username"] && $_GET['password'] == $result["Password"])
				{		
					echo $result["Username"];
					echo $result["Password"];
					session_start();
					$currentDate = date("Y-m-d");
					$adminId = $result["AdminID"];
					$_SESSION['AdminID'] = $adminId;
					$_SESSION['lastlogindate'] = $currentDate;
					
					$query = "Update adminusers SET Lastlogin = CAST('".$currentDate."' AS DATE) WHERE AdminID = ".$adminId;  
					mysql_query($query,$con);
					
					header("Location:mailing_list.php");
				}
				else
				{
					echo "Login Failed!";
				}

			?>
			<nav>
                <div id="menuItems">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="menu.php">Menu</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </nav>
            <div id="content" class="clearfix">
				<div class="main">
                		
					<form name="login" id="login" method="GET" action="userlogin.php">
						<table>
							<tr></br>
								<td>Login:</td>
								<td><input type="text" name="username" id="username"></br>
							</tr>
							<tr>
								<td>Password:</td>
								<td><input type="password" name="password" id="password"></br>
							</tr>
							<tr>
								<td><input type="submit" name="submit" id="submit" value="Login"></td>
							</tr>
						</table>
						
					</form>
	
				</div>
            </div><!-- End Content -->	
			<?php include 'footer.php';?> 
        </div><!-- End Wrapper -->
    </body>
</html>
