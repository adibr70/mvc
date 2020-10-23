<?php 

class Pages extends Controller {

    public function __construct() {

       
        
    }

    public function index() {

        if(isLoggedIn()) {
            redirect('posts');
        }

        $data = [
            'title'=>SITENAME,
            'description'=> 'Simple social network built using custom MVC PHP framework<br />Please login to see the posts'
        ];

        $this->view('pages/index', $data);

    }

    public function about() {
        
        $data = [
            'title'=>'About Us',
            'description'=> 'App to share post with other users.'
        ];

        $this->view('pages/about', $data);

    }

}