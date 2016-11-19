<!-- templates/list.php -->

<!DOCTYPE html>
<html>
<head>
	<title>List of posts</title>
</head>
<body>
	<h1>List of posts</h1>
	<ul>
		<?php foreach ($posts as $post): ?>
		<li>
<!--		<a href="/symfonyVsflatPHP/show.php?id=--><?//= $post['id'] ?><!--">
            // specify the home directory name to the start of all the page after that show the ID
-->
			<a href="/symfonyVsflatPHP/show.php?id=<?= $post['id'] ?>">
				<?= $post['title'] ?>
			</a>
		</li>
		<?php endforeach ?>
	</ul>
</body>
</html>