<?php 
require_once('functions.php');
if ( ! checklogin())
{
	Header('Location: /');
}

get_header();
?>
<?php require_once('./includes/h/personal_home.php'); ?>
<?php get_footer();?>