<?php
/**
 * Created by PhpStorm.
 * User: AH
 * Date: 11/18/2016
 * Time: 9:36 PM
 */

require_once 'model.php';

if(isset($_GET['id'])) {
//check if id is on db
	$post = get_post_by_id($_GET['id']);

	require 'templates/show.php';
} else {
//not found id
?>
    <p>No post id was specified</p>
<?php } ?> 