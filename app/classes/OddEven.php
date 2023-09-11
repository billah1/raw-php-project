<?php


namespace App\classes;


class OddEven
{
    public $i, $startingNumber, $endingNumber, $result, $choice;

    public function __construct($post)
    {
        $this->startingNumber = $post['starting_number'];
        $this->endingNumber   = $post['ending_number'];
        $this->choice   = $post['choice'];
    }

    public function index()
    {
        switch ($this->choice)
        {
            case 'odd';
                $this->result = $this->odd();
                break;
            case 'even';
                $this->result = $this->even();
                break;
            default ;
                $this->result = $this->all();


        }
        return view('odd-even',[
            'result' => $this->result,
        ]);
//        header('Location: route.php?page=odd-even&&result='.$this->result);
    }


    public function odd()
    {
        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
            if ($this->i % 2 !== 0)
            {
                $this->result = $this->result.$this->i.' ';
            }
        }
        return $this->result;
    }
    public function even()
    {
        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
            if ($this->i % 2 == 0)
            {
                $this->result = $this->result.$this->i.' ';
            }
        }
        return $this->result;

    }
    public function all()
    {
        if ($this->startingNumber < $this->endingNumber)
        {
            for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
            {
                $this->result = $this->result.$this->i.' ';
            }
        }
        else
        {
            for ($this->i = $this->startingNumber; $this->i >= $this->endingNumber; $this->i++)
            {
                $this->result = $this->result.$this->i.' ';
            }
        }
        return $this->result;

    }


}