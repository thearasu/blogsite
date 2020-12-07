<?php
class Post{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllPosts(){
        $this->db->query("SELECT posts.*, categories.name AS cname 
        FROM posts INNER JOIN categories
        ON posts.categoryId = categories.id
        ORDER BY date DESC");  
        
        $results = $this->db->allResult();
        
        return $results;
    }
}