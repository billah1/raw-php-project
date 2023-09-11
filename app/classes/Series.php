<?php


namespace App\classes;


use mysql_xdevapi\Result;

class Series
{
    public $firstNumber,$lastNumber,$result,$staticfastNumber,$staticlastNumber;

    public function __construct($post)
    {
        if ($post){
            $this->firstNumber = $post['first_number'];
            $this->staticfastNumber = $post['first_number'];

            $this->lastNumber = $post['last_number'];
            $this->staticlastNumber = $post['last_number'];

        }

    }

    public  function getseriesresult()
    {
        if ($this->firstNumber < $this->lastNumber){
            $this->result =   $this->lowToHigh();

        }elseif ($this->firstNumber > $this->lastNumber){

                $this->result = $this->highTolow();
        }


    return view('series',[
        'result' => $this->result,
        'firstNumber' => $this->staticfastNumber,
        'lastNumber' => $this->staticlastNumber,
    ]);
    }
    public function  lowToHigh(){
        for ( $this->firstNumber;  $this->firstNumber <= $this->lastNumber; $this->firstNumber++){
            if ($this->firstNumber %2 == 0)
            {
                $this->result.= $this->firstNumber.' ';
            }

        }

        return $this->result;
    }
    public function  highTolow(){
        for ( $this->lastNumber;  $this->lastNumber <= $this->firstNumber; $this->lastNumber++){

            $this->result.= $this->lastNumber.' ';
        }
        return $this->result;

    }

}