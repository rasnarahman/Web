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
                    </ul>
                </div>
            </nav>
            <div id="content" class="clearfix">
			
                <aside>
                        
						<?php
							/* Create the special menu header by replacing Today with the day of the week */
							date_default_timezone_set('EST');
							$dayOfTheWeek = date("l");
							
							$str = "Today's Specials";
							$specialTitle = str_replace("Today", $dayOfTheWeek, $str);
							
							echo "<hr>";
							echo "<h2>".$specialTitle."</h2>";
							
							/* Create the special menu items with php */
							include 'class_menu.php';
							$dailySpecialItem1 = new menuItem("The WP Burger", "Freshly made all-beef patty served up with homefries", 25);
							$dailySpecialItem2 = new menuItem("WP Kebobs", "Tender cuts of beef and chicken, served with your choice of side", 12);
							
							echo "<img src='images/burger_small.jpg' alt='Burger' title='Burger'>";
							echo "<h3>".$dailySpecialItem1->getItemName()."</h3>";
							echo "<p>".$dailySpecialItem1->getDescription()." - $".$dailySpecialItem1->getPrice()."</p>";
							echo "<hr>";
							
							echo "<img src='images/kebobs.jpg' alt='Kebobs' title='WP Kebobs'>";
							echo "<h3>".$dailySpecialItem2->getItemName()."</h3>";
							echo "<p>".$dailySpecialItem2->getDescription()." - $".$dailySpecialItem2->getPrice()."</p>";
							echo "<hr>";
						?>
                </aside>
                <div class="main">
                    <h1>Welcome</h1>
					<? echo "okkkkkkk"; ?>
                    <img src="images/dining_room.jpg" alt="Dining Room" title="The WP Eatery Dining Room" class="content_pic">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    <h2>Book your Christmas Party!</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div><!-- End Main -->
            </div><!-- End Content -->
			<?php include 'footer.php';?> 
        </div><!-- End Wrapper -->
    </body>
</html>
