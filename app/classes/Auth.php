<?php


namespace App\classes;


class Auth
{
    public $userEmail, $email, $userPassword, $password;

    public function __construct($post = null)
    {
        $this->email = 'admin@admin.com';
        $this->password = '12345678';
        if ($post)
        {
            $this->userEmail = $post['email'];
            $this->userPassword = $post['password'];
        }
    }

    public function login()
    {

        if ($this->userEmail == $this->email && $this->userPassword == $this->password)
        {
            session_start();
            $_SESSION['id'] = session_id();
            header('Location: route.php?page=home');
        } else {
            return view('login', [
                'message' => 'Developer is sleeping !!!.... try again'
            ]);
        }
    }
    public function logout(){
        session_start();
        unset($_SESSION['id']);
        header('Location:route.php?page=login');
    }
}