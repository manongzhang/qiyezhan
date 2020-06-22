<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class moive extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'movie';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'get movie data';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $city=[
            'jl=530',
        ];
        $money=[
            'sf=8001&st=10000',
            'sf=10001&st=15000',
            'sf=15001&st=25000'
        ];
        $we = [
            'we=0103',
            'we=0305',
        ];
        $data = [
            'el=5',
            'el=4'
        ];

        $data_url=[];
        $url = "";
        foreach($city as $k1 => $v1){
            foreach($money as $k2 => $v2){
                foreach($we as $k3 => $v3){
                    foreach($data as $k4 => $v4){
                        $tmp=[];
                        array_push($tmp,$v1);
                        array_push($tmp,$v2);
                        array_push($tmp,$v3);
                        array_push($tmp,$v4);
                        $url = implode("&",$tmp);
                        array_push($data_url,$url);
                    }
                   
                }
            }
        }

        $url = "https://sou.zhaopin.com/";
        foreach($data_url as $key=> &$value){
            $value=$url."?".$value;
        }

        $total_url = [];
        for($i=1;$i<10;$i++){
            $p= "p=$i";
            foreach($data_url as $k => $v){
                $new_url = $v."&$p";
                array_push($total_url,$new_url);
            }
        }

        foreach($total_url as $o){
            echo $o;
            echo PHP_EOL;
        }
    }
  
}
