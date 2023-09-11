<?php


namespace App\classes;


class FullName
{
    public $firstName,$lastName,$fullName,$totalWords,$totalCharacter;
    public function __construct($post = null )
    {
        if ($post){
            $this->firstName = $post['first_name'];
            $this->lastName = $post['last_name'];
        }


    }

    public function getFullNAME(){
        $this->fullName = $this->firstName.' '.$this->lastName;
        $this->totalWords = str_word_count($this->fullName);
        $this->totalCharacter = strlen($this->fullName);
        return view('full-name',[
            "fullName" => $this->fullName,
            "firstName" => $this->firstName,
            "lastName" => $this->lastName,
            "totalWords" =>$this->totalWords,
            "totalCharacter" => $this->totalCharacter
        ]);
    }

}