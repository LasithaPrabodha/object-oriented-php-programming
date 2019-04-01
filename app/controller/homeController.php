<?php

class homeController extends Controller
{
    public function index($id = '', $name = '')
    {
        $this->view('header', ['location' => 'home']);
        $this->view('home\index', [
            'name' => $name,
            'id' => $id,
            'location' => 'home'
        ]);
        $this->view('footer');
    }
    public function about()
    {
        $this->view('header', ['location' => 'about']);
        $this->view('home\about');
        $this->view('footer');
    }
}
