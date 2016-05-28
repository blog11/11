<?php

namespace Home\Controller;
use Think\Controller;

class AboutController extends Controller{
    public function index(){
        if(empty($_SESSION)){
            $this->redirect('Login/index');
        }
        $this->display();
    }
}