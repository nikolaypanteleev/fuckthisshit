<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP Test</title>
	</head>
	<body>
		<?php
			$age=25;
			if($age < 20){
				echo 'Ты ещё сосунок, Jack';
			} elseif ($age > 30) {
				echo 'Ты старый пердун, Jack';
			} else {
				echo 'Ты всё-равно неудачник, Jack';
			}
		?>
	</body>
</html>