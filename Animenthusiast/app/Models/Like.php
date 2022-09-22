<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Auth;

class Like extends Model
{
    protected $table="likes";
    protected $primaryKey ='post_id';


    protected $nascondi = [
        'user_id'
    ];
    
    protected $insert = [
        'user_id', 'titolo', 'image', 'post_id'
    ];

    public function users(){
        return $this->belongsTo('App\Models\User');
    }
}

?>