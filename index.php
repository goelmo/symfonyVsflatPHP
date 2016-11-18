<?php
// index.php
// load and initialize any global libraries
require_once 'model.php';
require_once 'controllers.php';

// route the request internally
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

//if ('/index.php' === $uri) {
if ('/symfonyVsflatPHP/index.php' === $uri) {
    // Merhawi revison : add the folder name so that it could start loading form then
	list_action();
    // '/pattern/'
} elseif (preg_match('/\/symfonyVsflatPHP\/index.php\/show\/(\d+)/', $uri, $matches)) {
    $id = $matches[1];
	show_action($id);
} else {
	header('HTTP/1.1 404 Not Found');
	echo '<html><body><h1>Page Not Found</h1></body></html>';
}
?>