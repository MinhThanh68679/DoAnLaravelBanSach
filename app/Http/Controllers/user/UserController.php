<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->viewprefix='user.pages.';
        $this->user='user/pages/';
    }
    public function Index(){
        return view($this->user."index");
    }

    public function Shop(){
        return view($this->user."shop");
    }
    public function Contact(){
        return view($this->user."contact");
    }
    public function Single(){
        return view($this->user."single");
    }
    public function About(){
        return view($this->user."about");
    }
    public function Cart(){
        return view($this->user."cart");
    }
    public function Payment(){
        return view($this->user."payment");
    }
    public function New(){
        return view($this->user."news");
    }
}
