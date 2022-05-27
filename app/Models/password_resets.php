<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class password_resets extends Model
{
    use HasFactory;
    protected $table= 'password_resets';

    protected $fillable = [
        'email',
        'token',
    ];
    protected $hidden = ['token','created_at','updated_at'];

    public $timestemps= true;


}
