<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<ul>
		<li><a href="?action=list">Главная</a></li>
		<li><a href="?action=task_4_add">Добавить пост</a></li>
	</ul>
	<?php
	$actions = ['task_4_list', 'task_4_add', 'task_4_post', 'edit', 'delete'];
	$action = isset($_GET['action']) ? $_GET['action'] : 'list';
	if (in_array($action, $actions)) {
		require_once $action . '.php';
	} else {
		echo 'not found';
	}
	?>
</body>
</html>