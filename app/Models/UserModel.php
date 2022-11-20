<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'email', 'password', 'fullname'];
    protected $username = 'username';
    protected $password = 'password';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public function getUser($username, $password)
    {
        $query = $this->where($this->username, $username)->first();
        if($query)
        {
            // if(password_verify($password, $query[$this->password])) 
            // {
            //     return $query;
            // }
            if($password == $query[$this->password]) 
            {
                return $query;
            }
        }
        else
        {
            return false;
        }
    }
}