<?php
namespace Model;

use Core\Model;
use Entity\Post;
class CommentModel extends Model{


    protected $table = "comments";
    function __construct(){
        parent::__construct();
    }
    public function addComment($comment){


       
       $this->setInsertData($comment)->save();
    }



}