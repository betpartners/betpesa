
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
				 username VARCHAR(16),
				 hashed_password VARCHAR(32)');

				createTable('team',
				'id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				 name VARCHAR(250)');

				createTable('week',
				'id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				 week_no INT UNSIGNED');

				createTable('game',
				'id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				 week INT UNSIGNED,
				 team_one INT UNSIGNED,
				 team_two INT UNSIGNED,
				 team_one_odds FLOAT,
				 team_two_odds FLOAT,
				 goal_goal_odds FLOAT,
				 draw_odds FLOAT,
				 FOREIGN KEY(week) REFERENCES week(id) ON DELETE CASCADE,
				 FOREIGN KEY(team_one) REFERENCES team(id) ON DELETE CASCADE,
				 FOREIGN KEY(team_two) REFERENCES team(id) ON DELETE CASCADE');

				createTable('bet',
				'id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				 bet_id INT UNSIGNED UNIQUE,
				 game INT UNSIGNED,
				 customer_name VARCHAR(250),
				 no_bet BOOLEAN DEFAULT TRUE,
				 amount FLOAT,
				 odds FLOAT,
				 FOREIGN KEY(game) REFERENCES game(id) ON DELETE CASCADE
				 ');
				createTable('video',
				'id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				 path VARCHAR(1000),
				 standings VARCHAR(10000),
				 game INT UNSIGNED,
				 FOREIGN KEY(game) REFERENCES game(id) ON DELETE CASCADE
				 ');

				$myfile = fopen("status.txt", "w") or die("Unable to open file!");
				fwrite($myfile, "1") or die("Could not write to file");
				fclose($myfile);
$text = <<<_END
<a href="/betpesa/">
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