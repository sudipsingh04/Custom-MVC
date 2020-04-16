<?php
class Pages extends Controller{
    public function __construct()
    {
        $this->postModel = $this->model('Post');
    }

    public function index()
    {
        $this->view('pages/index', ['title' => 'Welcome']);
    }

    public function about()
    {
        $this->view('pages/about', ['title' => 'About Us']);
    }
}