<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class layanan extends Model
{
	use HasFactory;
    public $timestamps = false;
	protected $table = 'layanans';
	protected $primaryKey =  'id';
	protected $fillable = ['id','nama_layanan','harga','desc','image'];
	
	public function booking(){
		return $this->hasMany(bookings::class);
	}

}
