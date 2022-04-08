<?php
class Pages extends Controller {
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function index() {
        $user = $this->userModel->getUsers();

        $data = [
            'title' => 'Home page',
            'users' => $user
        ];

        $this->view('pages/index', $data);
    }
    public function about() {
        $data = [
            'title' => 'about',
            'name' => 'Dary'
        ];
        $this->view('pages/about', $data);
    }
 

        
    
}