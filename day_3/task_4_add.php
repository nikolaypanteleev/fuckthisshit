<form action="" method="post">
	<input type="text" name="title" />
	<textarea name="content"></textarea>
	<input type="submit" name="Yeah" />
</form>

<?php
if (!empty($_POST['title']) && !empty($_POST['content'])) {
	$title = $_POST['title'];
	$content = $_POST['content'];
	$filename = 'posts.txt';
	//берем из файла содержимое
	$fileContents = file_get_contents($filename);
	//дописываем в содержимое в начало новый пост через разделители
	$newFileContents = $title . '-----' . $content . '=====';
	//записываем обновленное содержимое обратно в файл
	file_put_contents($filename, $newFileContents);
}