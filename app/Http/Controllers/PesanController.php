<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use App\Models\Pesanan;
use App\Models\DetailPesanan;
use App\Models\User;
use Auth;
use Alert;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PesanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
    	$menu = Menu::where('id', $id)->first();

    	return view('pesan.index', compact('menu'));
    }

    
}
