<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPesanan extends Model
{
    public function pesanan()
	{
	      return $this->belongsTo('App\Pesanan','pesanan_id', 'id');
	}

    public function menu()
	{
	      return $this->belongsTo('App\Menu','menu_id', 'id');
	}
}
