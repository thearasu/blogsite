<?php 
require_once 'config/init.php';

$post = new Post;

$template = new Template('templates/homepage.php');

$template->posts = $post->getAllPosts();

echo $template;