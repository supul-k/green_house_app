<?php

namespace App\Http\Controllers;
use Kreait\Firebase\Contract\Database;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Symfony\Component\VarExporter\Internal\Values;
use App\Charts\GreenHouseChart;
use Chartisan\PHP\Chartisan;
use Chartisan\PHP\ServerData;

class FireBaseController extends Controller
{

    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'details';
    }

    public function index(){ 

        return view('details');
    }

    public function store(Request $request){

        $current = Carbon::now();
        $datetime = $current->format('d-M-Y H:i:s');
        // dd($datetime);
        // $time = $current->format('H:i:s');
        // $date = $current->format('Y-m-d');

        $postData = [
            'light' => $request->light,
            'temperature' => $request->temperature,
            'humadity' => $request->humadity,
            'concetaration' => $request->concetaration,
            'datetime' => $datetime,
        ];
        $postRef = $this->database->getReference($this->tablename)->push($postData);

        if($postRef)
        {
            return redirect('test')->with('status','added details successfully');
        }else
        {
            return redirect('test')->with('status','added details failed');
        }
    }

    public function view(){
        
         $details = $this->database->getReference($this->tablename)->getValue();
         $count=count($details);
         $newArray=array();
         $i = 0;

         foreach(  $details as $item){
            $newArray[$i]['id']=$i+1;
            $newArray[$i]['datetime']=$item['datetime'];
            $newArray[$i]['temperature']=$item['temperature'];
            $newArray[$i]['humadity']=$item['humadity'];
            $newArray[$i]['concetaration']=$item['concetaration'];
            $newArray[$i]['light']=$item['light'];
            
            $i++;
         }

        return view('viewdetails',['details' => $newArray]);
    }

    public function temparature(){

        $details = $this->database->getReference($this->tablename)->getValue();
         $newArray1=array();
         $newArray2=array();
         $i = 0;

         foreach(  $details as $item){
            $newArray1[$i]=$item['datetime'];
            $newArray2[$i]=$item['temperature'];
            $i++;
         }
         $serverdata = new ServerData;
         $chart = new Chartisan($serverdata);
         $chart->labels($newArray1);
         $chart->dataset('temperature',$newArray2);

         $chart = $chart->toJSON();
                 

        return view('temputure',['chart' => $chart]);

    }


    public function light(){

        $details = $this->database->getReference($this->tablename)->getValue();
        $newArray1=array();
        $newArray2=array();
        $i = 0;

        foreach(  $details as $item){
           $newArray1[$i]=$item['datetime'];
           $newArray2[$i]=$item['light'];
           $i++;
        }
        $serverdata = new ServerData;
        $chart = new Chartisan($serverdata);
        $chart->labels($newArray1);
        $chart->dataset('light',$newArray2);

        $chart = $chart->toJSON();
                

       return view('light',['chart' => $chart]);
    }
    
    public function humadity(){

        $details = $this->database->getReference($this->tablename)->getValue();
        $newArray1=array();
        $newArray2=array();
        $i = 0;

        foreach(  $details as $item){
           $newArray1[$i]=$item['datetime'];
           $newArray2[$i]=$item['humadity'];
           $i++;
        }
        $serverdata = new ServerData;
        $chart = new Chartisan($serverdata);
        $chart->labels($newArray1);
        $chart->dataset('humadity',$newArray2);

        $chart = $chart->toJSON();
                

       return view('humadity',['chart' => $chart]);

    }

    public function constrartion(){

        $details = $this->database->getReference($this->tablename)->getValue();
        $newArray1=array();
        $newArray2=array();
        $i = 0;

        foreach(  $details as $item){
           $newArray1[$i]=$item['datetime'];
           $newArray2[$i]=$item['concetaration'];
           $i++;
        }
        $serverdata = new ServerData;
        $chart = new Chartisan($serverdata);
        $chart->labels($newArray1);
        $chart->dataset('concetaration',$newArray2);

        $chart = $chart->toJSON();
                

       return view('concetaration',['chart' => $chart]);

    }


// ...................concetaration and light...................

    public function concetarationlight(){

        $details = $this->database->getReference($this->tablename)->getValue();
        $newArray1=array();
        $newArray2=array();
        $i = 0;

        foreach(  $details as $item){
           $newArray1[$i]=$item['datetime'];
           $newArray2[$i]=$item['concetaration'];
           $newArray3[$i]=$item['light'];
           $i++;
        }
        $serverdata = new ServerData;
        $chart = new Chartisan($serverdata);
        $chart->labels($newArray1);
        $chart->dataset('concetaration',$newArray2);
        $chart->dataset('light',$newArray3);

        $chart = $chart->toJSON();
                

       return view('concetarationlight',['chart' => $chart]);

    }

// ...................concetaration and temperature...................

    public function concetarationtemperature(){

        $details = $this->database->getReference($this->tablename)->getValue();
        $newArray1=array();
        $newArray2=array();
        $i = 0;

        foreach(  $details as $item){
           $newArray1[$i]=$item['datetime'];
           $newArray2[$i]=$item['concetaration'];
           $newArray3[$i]=$item['temperature'];
           $i++;
        }
        $serverdata = new ServerData;
        $chart = new Chartisan($serverdata);
        $chart->labels($newArray1);
        $chart->dataset('concetaration',$newArray2);
        $chart->dataset('temperature',$newArray3);

        $chart = $chart->toJSON();
                

       return view('concetarationtemperature',['chart' => $chart]);

    }

// ...................concetaration and humadity...................

    public function concetarationhumadity(){

        $details = $this->database->getReference($this->tablename)->getValue();
        $newArray1=array();
        $newArray2=array();
        $i = 0;

        foreach(  $details as $item){
           $newArray1[$i]=$item['datetime'];
           $newArray2[$i]=$item['concetaration'];
           $newArray3[$i]=$item['humadity'];
           $i++;
        }
        $serverdata = new ServerData;
        $chart = new Chartisan($serverdata);
        $chart->labels($newArray1);
        $chart->dataset('concetaration',$newArray2);
        $chart->dataset('humadity',$newArray3);

        $chart = $chart->toJSON();
                

       return view('concetarationhumadity',['chart' => $chart]);

    }

// ...................light and humadity...................

    public function humaditylight(){

        $details = $this->database->getReference($this->tablename)->getValue();
        $newArray1=array();
        $newArray2=array();
        $i = 0;

        foreach(  $details as $item){
           $newArray1[$i]=$item['datetime'];
           $newArray2[$i]=$item['light'];
           $newArray3[$i]=$item['humadity'];
           $i++;
        }
        $serverdata = new ServerData;
        $chart = new Chartisan($serverdata);
        $chart->labels($newArray1);
        $chart->dataset('light',$newArray2);
        $chart->dataset('humadity',$newArray3);

        $chart = $chart->toJSON();
                

       return view('humaditylight',['chart' => $chart]);

    }

// ...................light and temperature...................

    public function temperaturelight(){

        $details = $this->database->getReference($this->tablename)->getValue();
        $newArray1=array();
        $newArray2=array();
        $i = 0;

        foreach(  $details as $item){
           $newArray1[$i]=$item['datetime'];
           $newArray2[$i]=$item['light'];
           $newArray3[$i]=$item['temperature'];
           $i++;
        }
        $serverdata = new ServerData;
        $chart = new Chartisan($serverdata);
        $chart->labels($newArray1);
        $chart->dataset('light',$newArray2);
        $chart->dataset('temperature',$newArray3);

        $chart = $chart->toJSON();
                

       return view('temperaturelight',['chart' => $chart]);

    }

    
// ...................humadity and temperature...................

    public function temperaturehumadity(){

        $details = $this->database->getReference($this->tablename)->getValue();
        $newArray1=array();
        $newArray2=array();
        $i = 0;

        foreach(  $details as $item){
           $newArray1[$i]=$item['datetime'];
           $newArray2[$i]=$item['light'];
           $newArray3[$i]=$item['temperature'];
           $i++;
        }
        $serverdata = new ServerData;
        $chart = new Chartisan($serverdata);
        $chart->labels($newArray1);
        $chart->dataset('humadity',$newArray2);
        $chart->dataset('temperature',$newArray3);

        $chart = $chart->toJSON();
                

       return view('temperaturehumadity',['chart' => $chart]);

    }


}
