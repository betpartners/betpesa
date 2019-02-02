
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Betpesa Setup</title>
 	<?php 
require_once 'header.php';
?>

 </head>
 <body>
 	<div class="row" style="width: 100%;height: 100%;" >
 		<div class="col">
 			
 		</div>
 		<div class="col" style="text-align: center;" >
 			<div class="row" style="background-color: #cccccc;">
 				<?php 
 				//create users table 
				createTable('user',
				'id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				 user_number VARCHAR(16),
				 hashed_password VARCHAR(32),
				 INDEX(user_number(6))');

				$myfile = fopen("status.txt", "w") or die("Unable to open file!");
				fwrite($myfile, "1") or die("Could not write to file");
				fclose($myfile);
$text = <<<_END
<a href="index.php">
<button class="btn btn-primary" style="background-color:#003840;margin-top: 250px;border: 0">continue</button>
</a>
_END;
				echo $text;
 				 ?>
 			</div>
 		</div>
 		<div class="col">
 			
 		</div>
 	</div>
 	
 </body>
 </html>