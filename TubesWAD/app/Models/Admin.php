<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    public $timestamps = false;
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'admins';
	protected $fillable = ['id','email','password','nama_admin'];
	
}
