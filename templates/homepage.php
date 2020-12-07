<?php include_once 'inc/header.php'; 

foreach($posts as $post){
    echo "
    <p>$post->tittle</p>
    <p>$post->body</p>
    <p>$post->date</p>
    <p>$post->cname</p>
    ";
}

include_once 'inc/footer.php'; ?>