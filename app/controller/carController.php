<?php

class carController extends Controller
{
    public function index()
    {

        $this->model('car');
        $this->view('header', ['location' => 'cars']);
        $this->view('car\index', [
            'cars' => $this->model->getCars()
        ]);
        $this->view('footer');
    }
}
