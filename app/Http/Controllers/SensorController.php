<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sensor;
use DB;
class SensorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data = Sensor::all();
        return view ('charts',compact('data'));
    }
    public function table()
    {
        return view ('table');
    }
    public function chart()
    {
       
        $result = DB::select(
            DB::raw('SELECT
                sensor.*
                FROM(
                    SELECT sensor.*, TIME(created_at) as waktu FROM sensor ORDER BY id DESC LIMIT 15
                )sensor
                ORDER BY id ASC
            ')
            // DB::raw('SELECT
            //             a.*,
            //             HOUR(`created_at`) AS jam, 
            //             MINUTE(`created_at`) AS menit,
            //             DAY(`created_at`) AS tanggal, 
            //             CONCAT(HOUR(`created_at`),":",MINUTE(`created_at`)) AS waktu  
            //         FROM 
            //             sensor a  
            //         INNER JOIN 
            //             (SELECT MAX(id) id FROM sensor GROUP BY HOUR(`created_at`), DAY(`created_at`) ORDER BY id DESC LIMIT 21) b
            //             ON a.id=b.id
            //         ORDER BY 
            //             id ASC')
        );

        return $result;
    }
    public function weather()
    {
        // return view('index');
        // ke make variabel 
        $weather = Sensor::orderBy('id','desc')
                                ->take(1)
                                ->get()
                                ->sortByDesc('created_at');
        return view ('index',compact('weather'));
    }

    /**
     * Show the form for creating a new resource.   
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function parsing(Request $request)  
    {  
        // $return = $_POST  
        // $date = new DateTime();
        // $date->setTimeZone(new DateTimeZone('Asia/Hong_Kong'));
        $sensor=new Sensor;  
        $sensor->wind= $request->wind;  
        $sensor->humidities=$request->humidities;  
        $sensor->rainfalls=$request->rainfalls;  
        $sensor->temperatures=$request->temperatures; 
        $sensor->intensity=$request->intensity;
        if($request->rain_status == 1.00){
            $sensor->rain_status = True;
        }elseif($request->rain_status == 0.00){
            $sensor->rain_status = FALSE;
        }
        date_default_timezone_set("Asia/Makassar");
        $time = date("h:i:sa");
        // $sensor->created_at=$time;
        // $sensor->updated_at=$time;
        $sensor->save();  

        return ['status'=>'sukses'];  
    }
    
    public function loginAdmin()
    {
        $weather = Sensor::orderBy('id','desc')
                                ->take(1)
                                ->get()
                                ->sortByDesc('created_at');
        return view ('loginAdmin',compact('weather'));
    }

    public function searchDate(Request $request)
    {
        $Sawal = strtotime($request->sawal);
        $Dawal = date('Y-m-d',$Sawal);
        $Hawal = date('h:m',$Sawal);

        $Sakhir = strtotime($request->sakhir);
        $Dakhir = date('Y-m-d',$Sakhir);
        $Hakhir = date('h:m',$Sakhir);

        $Makhir = date('Y-m-d H:i:s',$Sakhir);
        $Mawal = date('Y-m-d H:i:s',$Sawal);

        
        // echo $Dawal;
        // echo $Dakhir;        
        // $send = DB::select(
        // DB::raw('Select * FROM sensor WHERE DAY('created_at')=$Hawal'));
        // $send = Sensor::whereDay('created_at','>=', $Dawal)->where(Hour(created_at),'>=', $Hawal)
        // ->whereDay('created_at','<=',$Dakhir)
        // ->where(Hour(created_at),'<=',$Hakhir)
        // ->get();

    //    $send= DB::table('sensor')
    //    ->where([
    //        ['DAY(created_at)','>=',$Dawal],
    //        ['DAY(created_at)','<=',$Dakhir]
    //    ])
    //    ->whereRaw('DAY(created_at)>=$Dawal')
    //    ->whereRaw('DAY(created_at)','>=','$Dawal')
    //    ->whereRaw('DAY(created_at) >= ?', [$Dawal])
    //    ->whereRaw('DAY(created_at) >= ?', [$Dakhir])
    //    ->get();        

            // $data = Sensor::whereDay('created_at','>=', $Dawal)
            // ->whereDay('created_at','<=',$Dakhir)
            // ->get();

            // $sensor=DB::table('sensor')
            // ->whereRaw('DAY(created_at) >= ?', [$Dawal])
            // ->whereRaw('DAY(created_at) >= ?', [$Hawal])
            // ->whereRaw('DAY(created_at) <=?', [$Dakhir])
            // ->whereRaw('DAY(created_at) <= ?', [$Hakhir])
            // ->get();

            $data = DB::table('sensor')
                    //   ->whereDate('created_at','>=',$Dawal)
                    //   ->whereTime('created_at','>=',$Hawal)
                    //   ->whereDate('created_at','<=',$Dakhir)
                    //   ->whereTime('created_at','<=',$Hakhir)
                      ->whereBetween('created_at',[$Mawal, $Makhir])
                      ->get();            
            // return $sensor;

        // $send = DB::select('
        // DB::raw('SELECT * 
        // FROM sensor 
        // WHERE DAY(created_at)>= :hawal', ["hawal" => '$hawal'])
        // ');        
        // return $send;

        // var_dump($send);
        // $send =DB::select(
        // DB::raw('SELECT * FROM sensor WHERE DAY('created_at','>=',$Hawal) AND DAY(created_at)<=$Hakhir')
        // // );
        // return redirect();
        return view ('charts',compact('data'));
        // echo $send;
            // echo $send;
            // echo $Hakhir;

            // $send = Sensor::where('DAY(created_at)','>=', $Hawal)
            // ->where('DAY(created_at)','<=',$Hawal)
            // ->get();   
    }

    
}
