<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPelanggan extends Model
{
    public $timestamps = false;
	protected $table = 'pelanggans';
	protected $primaryKey =  'id';
	protected $fillable = ['id','email','password','nama_pelanggan','alamat'];
	
}
