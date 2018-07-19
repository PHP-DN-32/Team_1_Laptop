<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ADMIN</title>
	<?php require 'templates/admin/head.php'?>
</head>
<body>
	<div class="left_content">
            <?php require 'templates/admin/left_content.php';?>
    </div>
	<div id="rightSide">
		<div class="topNav">
			<?php require 'templates/admin/topnav.php';?>
		</div>
		<div class="line"></div>
		<?php
            require TEMPLATE;
         ?>
		<div class="clear mt30"></div> 
	</div>
</body>
</html>