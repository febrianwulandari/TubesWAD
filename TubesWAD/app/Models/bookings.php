<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookings extends Model
{
	use HasFactory;
	protected $table = 'booking';
	protected $primaryKey =  'id';
	protected $fillable = ['id','id_layanan','tanggal_booking','berat_laundry','id_user','created_at','updated_at','status','harga','alamat','total_bayar','image','tanggal_pembayaran'];
	
	public function layanans(){
		return $this->belongsTo(layanan::class, 'id_layanan');
	}
	
	public function users(){
		return $this->belongsTo(User::class);
	}
}
