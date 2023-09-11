<?php

require_once 'vendor/autoload.php';
use App\classes\BasicViewController;
use App\classes\FullName;
use App\classes\Calculator;
use App\classes\Series;
use App\classes\Student;
use App\classes\OddEven;
use App\classes\Prime;
use App\classes\Temperature;
use App\classes\Auth;


$basicViewController = new BasicViewController();

if (isset($_GET['page'])){
    if ($_GET['page'] == 'home'){
        $basicViewController->home();
    }elseif($_GET['page'] == 'full-name-page'){
        $basicViewController->fullNamePage();
    }elseif($_GET['page'] == 'get-full-name'){
        $fullname = new FullName($_POST);
        $fullname->getFullNAME();
    }elseif ($_GET['page'] == 'calculator-form'){
        $basicViewController->calculatorForm();
    }elseif ($_GET['page'] == 'get-calculator-result'){
        $calculator = new Calculator($_POST);
        $calculator-> getCalculatorResult();
    }elseif ($_GET['page'] == 'series-form'){
       $basicViewController->seriesform();
    }elseif ($_GET['page'] == 'get-series-result') {
        $series = new Series($_POST);
        $series->getseriesresult();
    }elseif ($_GET['page'] == 'student-info-form'){
        $basicViewController->studentinfoform();
    }elseif ($_GET['page'] == 'get-student-info'){
//        echo '<pre>';
//        print_r($_POST);
//        print_r($_FILES);
        $students = new Student($_POST,$_FILES);
        $students->getStudentInfo();
    }
    elseif ($_GET['page'] == 'OddEvenSeries-info-form'){
        $basicViewController->oddevenfrom();
    }elseif ($_GET['page'] == 'get-oddeven-result'){
        $oddeven = new OddEven($_POST);
        $oddeven -> index();
    }elseif ($_GET['page'] =='prime-info-form'){
        $basicViewController->primeform();
    }elseif ($_GET['page'] == 'get-prime-result'){
        $prime = new Prime($_POST);
        $prime->getPrimeResult();
    }elseif ($_GET['page'] == 'temperature-info-form'){
//        $basicViewController->temperature();
        $temperature = new Temperature($_POST);
        $tempcel = $_POST['temperature_number'];
        $fer ="";
        if(isset($_POST['temp_btn'])){
            $fer = (($tempcel*9)/5)+32;
        }
        include $temperature->tempPage;

//    }elseif ($_GET['page'] ='get-temperature-result'){
//        $temperature = new Temperature($_POST);
//
////        $temperature->gettemperatureresult();


    }elseif ($_GET['page'] == 'login')
    {
        $basicViewController->login();
    }
    elseif ($_GET['page'] == 'login-user')
    {
        $auth = new Auth($_POST);
        $auth->login();
    }elseif ($_GET['page'] == 'logout'){

        $auth = new Auth();
        $auth->logout();
    }

}