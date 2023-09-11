<?php


namespace App\classes;


class Prime
{
    public  $startingNumber, $result;

    public function __construct($post = null)
    {
        if ($post){
            $this->startingNumber = $post['starting_number'];
        }


    }

    public function getPrimeResult()
    {
            for ($i = 2; $i <= $this->startingNumber - 1; $i++) {
                if ($this->startingNumber % $i == 0) {
                    $value = True;
                }
            }
            if (isset($value) && $value) {
                $this->result.=$this->startingNumber . ' is not prime';
            } else {
                $this->result.=$this->startingNumber . ' is prime';
            }
            return view('prime',[
                'result' => $this->result,
            ]);
    }

}