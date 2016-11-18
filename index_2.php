<?php
// index.php
$link = new PDO("mysql:host=localhost;dbname=blog_db", 'myuser', '');
$result = $link->query('SELECT id, title FROM post');
$posts = array();
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
	$posts[] = $row;
}
$link = null;
// include the HTML presentation code
require 'templates/list.php';

?>