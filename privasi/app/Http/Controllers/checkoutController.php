<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Auth;

class checkoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
	
	public function index()
	{
		return view('template.checkout');
	}
	
	public function showData(Request $request)
	{
		$user = Auth::id();
		$tgl = $request->input('tanggal');
		$idFutsal = $request->input('idFutsal');
		$idLapangan = $request->input('idLapangan');
		$jamAwal = $request->input('first_jam');
		$jamTotal = $request->input('Total_main');
		$jamAkhir = $request->input('last_jam');
		$jmlBayar = $request->input('Tot_bayar');
		
		$getInfoCus = DB::table('db_users')->where([
				['id', '=', $user],
				])->first();
		//dd($getInfoCus);
		
		$get_book_order = DB::select(DB::raw("SELECT auto_increment FROM INFORMATION_SCHEMA.TABLES WHERE table_name = 'db_booking' limit 1"));
		
		$getInfoFutsal = DB::table('db_futsal')
			->join('db_field', 'db_field.id_futsal', '=', 'db_futsal.id_futsal')
			->where([
				['db_field.id_futsal','=',$idFutsal],
				['db_field.id_field','=',$idLapangan]
			])->first();
			
		$getInfoLapangan = DB::table('db_field')
			->join('db_futsal', 'db_field.id_futsal', '=', 'db_futsal.id_futsal')
			->where([
				['db_field.id_futsal','=',$idFutsal],
				['db_field.id_field','=',$idLapangan]
			])->first();
		//dd($getInfoLapangan);
		return view('template.checkout',compact('getInfoFutsal','getInfoLapangan','get_book_order','jamAwal','tgl','jamTotal','jamAkhir','jmlBayar','getInfoCus'));
	}
}
