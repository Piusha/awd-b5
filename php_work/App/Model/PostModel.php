<?php
namespace Model;

use Core\Model;
use Entity\Post;
class PostModel extends Model{


    protected $table = "posts";
    function __construct(){
        parent::__construct();
    }
    public function getPost($id){
        $post = $this->select('*')
                     ->setEntity('Entity\Post')
                     ->where("posts.id={$id}")
                     ->find();
        
        return ($post)?$post[0]:[];
    }
}