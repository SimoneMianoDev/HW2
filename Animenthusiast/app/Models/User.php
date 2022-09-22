<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Auth;


class User extends Model
{
    protected $table="users";
    protected $primaryKey = "id";
    protected $autoIncrement = false;


    protected $nascondi = [
        'email', 'password'
    ];


    protected $insert = [
        'id', 'username', 'password', 'nome', 'cognome', 'email'
    ];

    public function likes(){
        return $this->hasMany('App\Models\Like');
    }
}

?>