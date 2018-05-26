<?php

namespace Controller;
use \Core\Controller;
use \Model\PostModel;
use \Model\CommentModel;
class BlogController extends Controller{


    private $post = null;
    private $comment = null;

    public function __construct(){
        $this->post = new PostModel();
        $this->comment = new CommentModel();
    }
    public function index(){
        echo "Blog index";
    }

    public function post($id){

       
        if(!empty($_POST)){
            $data = $_POST;
            $data['created_at'] = date('Y-m-d H:i:s');
            $data['updated_at'] = date('Y-m-d H:i:s');
            
            $this->comment->addComment($data);
        }
        
        $this->postContent = $this->post->getPost($id);
        
        $this->render('pages/blog_post');
    }

}


