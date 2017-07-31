<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Input;
use DB;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\hamboo;


class BookingControoler extends Controller {
	public function book(Request $request)
    {
    	$data['jamAwal']	   	= $request->input('first_jam');
        $data['jamAkhir']  		= $request->input('last_jam');
        $data['durasi']   		= $request->input('Total_main');
        $data['hargaPerJam']	= $request->input('Harga_per_jam');
    	$data['tanggal']  		= $request->input('tanggal');
    	$data['idLapangan']  	= $request->input('idLapangan');    
    	$data['idFutsal']  		= $request->input('idFutsal');
    	$data['idPrice']  		= $request->input('idPrice');
    	$data['Tot_bayar']  	= $request->input('Tot_bayar');
        $data['fromDate']       = $request->input('fromDate');
        $data1                  = $data['fromDate'].' '.$data['jamAwal'];
    	//dd($data);
        //return (compact('data1'));
        
         $saved=hamboo::create([
            //'booking_date'      => $data['tanggal']
            'from_date'     	=> $data['fromDate'].' '.$data['jamAwal'],
            'to_date'   		=> $data['fromDate'].' '.$data['jamAkhir'],
            'duration_play'   	=> $data['durasi'] ,
            'id_user'		    =>'1',
            'id_futsal' 	    =>$data['idFutsal'] ,
            'id_field'          =>$data['idLapangan'] ,
            'id_price'          =>$data['idPrice'] ,
            'status'            =>'BOOKED'             
        ]);
         //dd($saved);
         return redirect()->back();
		//return redirect()->route('payment', compact('data','toal'));
		//return redirect('payment');
       // return (compact('message'));
    }
}