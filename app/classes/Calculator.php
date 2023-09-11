<?php


namespace App\classes;


class Calculator
{
  public $firstNumber,$lastNumber,$operators,$result;

  public function __construct($post = null)
  {
      if ($post){
          $this->firstNumber = $post['first_number'];
          $this->lastNumber = $post['last_number'];
          $this->operators = $post['operators'];
      }



  }
  public function getCalculatorResult(){
     switch ($this->operators){
         case '+': $this->result = $this->firstNumber + $this->lastNumber;
         break;
         case '-': $this->result = $this->firstNumber - $this->lastNumber;
         break;
         case '*': $this->result = $this->firstNumber * $this->lastNumber;
         break;
         case '/': $this->result = $this->firstNumber / $this->lastNumber;
         break;
         case '%': $this->result = $this->firstNumber % $this->lastNumber;
         break;
         default : $this->result = 0;
     }
     return view('calculator',[
         'result' => $this->result
     ]);
  }
}