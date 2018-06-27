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
        return view ('charts');
    }

    public function chart()
    {
        
        $result = DB::select( 
            DB::raw('SELECT 
                        a.*, 
                        HOUR(`created_at`) AS jam,  
                        MINUTE(`created_at`) AS menit, 
                        DAY(`created_at`) AS tanggal,  
                        CONCAT(HOUR(`created_at`),":",MINUTE(`created_at`)) AS waktu   
                    FROM  
                        sensor a   
                    INNER JOIN  
                        (SELECT MAX(id) id FROM Sensor GROUP BY HOUR(`created_at`), DAY(`created_at`) ORDER BY id DESC LIMIT 21) b 
                        ON a.id=b.id 
                    ORDER BY  
                        id ASC') 
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

    public function gallery()
    {
        return view ('gallery');
    }

    public function parsing(Request $request)  
    {  
        // $return = $_POST  
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
        $sensor->save();  

        return ['status'=>'sukses'];  
    }
    
}
