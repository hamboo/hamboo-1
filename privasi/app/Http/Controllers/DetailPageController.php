<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Input;
use DB;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\hamboo;
use Response;
use Session;


class DetailPageController extends Controller {
	public function __construct()
    {
        $this->middleware('auth');
    }

	public function detail_Page(Request $request,$id)
	{

		$tgl = $request->input('tanggal');
		//Session::put('date',$tgl);
		//dd(Session::all());
		$get_day = DB::select(DB::raw("select DAYNAME(STR_TO_DATE('".$tgl."', '%d/%m/%Y')) as day from dual "));	
		$data = DB::table('db_field')
		->join('db_futsal', 'db_field.id_futsal', '=', 'db_futsal.id_futsal')
		->join('db_price','db_field.id_field','=','db_price.id_field')
		->where([
				['db_price.day','=',$get_day[0]->day],//
				['db_field.id_futsal','=',$id],				
		])->get();

		$firstlpn = DB::table('db_field')
		->join('db_futsal', 'db_field.id_futsal', '=', 'db_futsal.id_futsal')
		->join('db_price','db_field.id_field','=','db_price.id_field')
		->where([
				['db_price.day','=',$get_day[0]->day],//
				['db_field.id_futsal','=',$id],				
		])->first();
		
		$data3 = DB::select(DB::raw("
			SELECT df.file_img,df.id_futsal,dp.id_price,dp.price,df.court,jam,db.status,df.id_field,COALESCE(db.status,-99) a FROM db_jam dj LEFT JOIN db_booking db ON DATE_FORMAT(db.from_date,'%k')=dj.jam and DATE_FORMAT(db.from_date,'%d/%m/%Y')='".$tgl."' left join db_field df on df.id_field = db.id_field left join db_price dp on df.id_field = dp.id_field where db.status ='BOOKED' and df.id_futsal =1 and dp.day='".$get_day[0]->day."' union SELECT df.file_img,df.id_futsal,dp.id_price,dp.price,df.court,jam,db.status,df.id_field,COALESCE(db.status,-99) a FROM db_jam dj LEFT JOIN db_booking db ON DATE_FORMAT(db.from_date,'%k')=dj.jam and DATE_FORMAT(db.from_date,'%d/%m/%Y')='".$tgl."' inner join db_field df on df.id_field = df.id_field left join db_price dp on df.id_field = dp.id_field where COALESCE(db.status,-99) ='-99' and df.id_futsal =1 and dp.day='".$get_day[0]->day."' ORDER BY id_field,jam asc"));

		$data2 = DB::table('db_field')
		->join('db_futsal', 'db_field.id_futsal', '=', 'db_futsal.id_futsal')
		->where ('db_field.id_futsal','=',$id)->first();
		
		$get_book_order = DB::select(DB::raw("SELECT auto_increment FROM INFORMATION_SCHEMA.TABLES WHERE table_name = 'db_booking' limit 1"));
		$time_available = DB::select(DB::raw("SELECT jam,status FROM db_jam dj LEFT JOIN db_booking db ON DATE_FORMAT(db.from_date,'%k')=dj.jam and  DATE_FORMAT(db.from_date,'%d/%m/%Y')='".$tgl."' order by jam asc"));
		
		$list = [];
		foreach ($data3 as $key => $value) {
			if($value->id_field==1){
				$list['lapangan_1'][] = [
					'price' => $value->price,
					'jam'	=> $value->jam,
					'court'	=> $value->court,
					'status'=> ($value->status != '') ? $value->status : 'empty'
				];
			}
			if($value->id_field==2){
				$list['lapangan_2'][] = [
					'price' => $value->price,
					'jam'	=> $value->jam,
					'court'	=> $value->court,
					'status'=> ($value->status != '') ? $value->status : 'empty'
				];
			}
			if($value->id_field==3){
				$list['lapangan_3'][] = [
					'price' => $value->price,
					'jam'	=> $value->jam,
					'court'	=> $value->court,
					'status'=> ($value->status != '') ? $value->status : 'empty'
				];
			}
			if($value->id_field==4){
				$list['lapangan_4'][] = [
					'price' => $value->price,
					'jam'	=> $value->jam,
					'court'	=> $value->court,
					'status'=> ($value->status != '') ? $value->status : 'empty'
				];
			}
		}
		//dd($value);die()

		// dd($list); die();
		// print_r($data3); die();	
			//return compact('data');
		return view('template.detailPage',compact('data','data2','time_available','tgl','get_book_order','data3','list','firstlpn'));
		//return (compact('waktu','get_day'));
		//return response()->json($data2,200);
		

	}
	public function listLapangan(Request $request,$idFutsal,$idLapangan){
		$tgl = Session::get('date');
		$listLapang = DB::select(DB::raw("SELECT * FROM db_jam dj 
						LEFT JOIN db_booking db ON DATE_FORMAT(db.from_date,'%k')=dj.jam 
						and DATE_FORMAT(db.from_date,'%d/%m/%Y')='".$tgl."'
						and db.id_futsal = ".$idFutsal."
						and db.id_field = ".$idLapangan." order by jam asc")
						);
		//return $idFutsal;
		return Response::json($listLapang);
	}
	
	public function getPrice ($idLapangan){
		$tgl = Session::get('date');
		$get_day = DB::select(DB::raw("select DAYNAME(STR_TO_DATE('".$tgl."', '%d/%m/%Y')) as day from dual "));
		$price = DB::table('db_price')->where([
				['id_field', '=', $idLapangan],
				['day', '=', $get_day[0]->day],
		])->get();
		return Response::json($price);
	}

	public function check_out (Request $request,$id_field){
		 $tgl = $request->input('tgl');
		 $waktu = $request->input('waktu');
		 $get_day = DB::select(DB::raw("select DAYNAME(STR_TO_DATE('25/02/2017', '%d/%m/%Y')) from dual"));
		 $get_price = DB::table('db_price')
                ->whereColumn([
                    ['id_field', '=', $id_field],
                    ['day', 'like', $get_day]
                ])->get();			
		 $get_futsal = DB::table('db_field')
				->join('db_futsal', 'db_field.id_futsal', '=', 'db_futsal.id_futsal')
				->where ('db_field.id_futsal','=',$id)->first();
		return (compact('data'));
	}

}