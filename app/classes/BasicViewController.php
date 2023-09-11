<?php


namespace App\classes;


class BasicViewController
{
    public function index(){
//        session_start();
//        $_SESSION['name'] = "Bitm";
//        $_SESSION['address'] = "Dhaka";

        header('Location: route.php?page=login');
    }
    public function home(){
        return view('home');
    }
    public function fullNamePage(){
        return view('full-name');
    }
    public  function calculatorForm(){
//        session_start();
//        unset($_SESSION['name']);
//        unset($_SESSION['address']);
        return view('calculator');
    }
    public function seriesform(){
        return view('series');
    }
    public function studentinfoform(){
        return view('student');
    }
    public function oddevenfrom(){
        return view('odd-even');
    }
    public function primeform(){
        return view('prime');
    }
//    public function temperature(){
//        return view('temperature');
//    }
    public function login(){
        return view('login');
    }

}