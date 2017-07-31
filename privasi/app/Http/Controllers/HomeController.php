<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Input;
use DB;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\hamboo;
use Session;

class HomeController extends Controller {


    public function index()
    {

        return View('template.landingPage');
    }
    public function listLapangan(Request $request)
    {
        //dd($request);
         $search= Input::get('dimana');
         $tgl = $request->input('Check_in_date_global_search');
         Session::put('date',$tgl);
         //dd(Session::all());
         $data2= DB::table('db_futsal')->where('kota', 'LIKE', '%' . $search . '%')->paginate(10);
         $data = DB::select(DB::raw("select min(price) as harga,fut.id_futsal,fut.futsal_name,fut.kota,fut.file_img_futsal 
            from db_price dp, db_field df, db_futsal fut 
            where dp.id_field=df.id_field 
            and df.id_field=fut.id_futsal 
            and kota like '%".$search."%'
            group by fut.id_futsal
            "));
         return view('template.listingPage',compact('search','data','data2','tgl'));
    }

    public function event()
    {
        return view('template.event');
    }
    public function about()
    {
        return view('template.about');
    }
    public function blog()
    {
        return view('template.blog');
    }
    public function contact()
    {

        return view('template.contact');
    }
        public function detail_Page()
    {

        return view('template.detailPage');
    }
        public function checkout()
    {

        return view('template.checkout');
    }

}