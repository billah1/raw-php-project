<?php


namespace App\classes;


class Student
{
    public $name,$email,$mobile,$imageName,$directory,$tempName;

    public function __construct($post = null,$files= null)
    {
        if ($post){
            $this->name = $post['name'];
            $this->email = $post['email'];
            $this->mobile = $post['mobile'];


            $this->imageName = $files['image']['name'];
            $this->tempName = $files['image']['tmp_name'];
            $this->directory = 'assets/images/students/';

        }

    }

    public  function getStudentInfo(){

        move_uploaded_file($this->tempName,$this->directory.$this->imageName);
        echo 'sucess';
    }

}