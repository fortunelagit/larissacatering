<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function detail_pesanan() 
	{
	     return $this->hasMany('App\DetailPesanan','menu_id', 'id');
	}
}
