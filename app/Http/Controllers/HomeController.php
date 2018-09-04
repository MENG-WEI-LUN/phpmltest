<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Faker\Generator as Faker;
class HomeController extends Controller
{
    public function index(){
//	    $user = factory(User::class)->make();
//    	Artisan::call('test:command',['msg'=>'YOLO','--name'=>'MYMYMYMY']);
    	return view('welcome');
    }
    
    public function getUrl(Request $request){
	    $ch = curl_init();
        dd($request->all());
    }
	
	private function get_html($url){
		
		$ch = curl_init();
		
		$timeout = 10;
		
		curl_setopt($ch, CURLOPT_URL, $url);
		
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		
		curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
		
		curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) chrome/34.0.1847.131 Safari/537.36');
		
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		
		$html = curl_exec($ch);
		
		return $html;
		
	}
}
