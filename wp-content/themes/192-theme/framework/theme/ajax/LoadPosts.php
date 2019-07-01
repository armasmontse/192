<?php

class LoadPosts extends Cltvo_Ajax_Master
{
	static function privMethod()
	{
        global $query_args;
        $query_args = $_POST['query_args'];
        include get_stylesheet_directory() . '/views/' . $_POST['section'] . '/posts.php';
        die;
    }
}
