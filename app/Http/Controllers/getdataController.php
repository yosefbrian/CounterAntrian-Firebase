<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;

class getdataController extends Controller
{
    //
    

      public function index()
    {
    	$json = file_get_contents('https://bca-queue.firebaseio.com/.json?auth=Pilap92zrcTl4sfnrNwKULbZUbYt3WMTiewhZEPl');
		$region = json_decode($json);
        return view('welcome')->with('region', $region);
    }


    protected function tambah($id)
    {

    	 $json = file_get_contents('https://bca-queue.firebaseio.com/.json?auth=Pilap92zrcTl4sfnrNwKULbZUbYt3WMTiewhZEPl');
	 $region = json_decode($json);
	 $served = (int)$region->Yogyakarta->kcp_kaliurang->cs_queue->served + 1;

		$running = $id+1;
		//$running = 0;
		$ch = curl_init();


		curl_setopt($ch, CURLOPT_URL, "https://bca-queue.firebaseio.com/Yogyakarta/kcp_kaliurang/cs_queue.json?auth=Pilap92zrcTl4sfnrNwKULbZUbYt3WMTiewhZEPl");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "{\n \"running\" :".$running.",\n \"served\" :".$served."\n}");
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH");

		$headers = array();
		$headers[] = "Cache-Control: no-cache";
		$headers[] = "Content-Type: application/x-www-form-urlencoded";
		$headers[] = "Postman-Token: aa25393b-8889-b51a-f4fa-001541266a01";
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$result = curl_exec($ch);
		if (curl_errno($ch)) {
		    echo 'Error:' . curl_error($ch);
		}
		curl_close ($ch);

      
        return redirect('/')->with('region', $region);
    	
    }
	// protected function tambah()
 //    {
        
 //    }

    public function reset(){
    	

    		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://bca-queue.firebaseio.com/Yogyakarta/kcp_kaliurang/cs_queue.json?auth=Pilap92zrcTl4sfnrNwKULbZUbYt3WMTiewhZEPl");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "{\n \"running\" : 0,\n \"counter\" : 0,\n \"served\" : 0\n}");
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH");

		$headers = array();
		$headers[] = "Cache-Control: no-cache";
		$headers[] = "Content-Type: application/x-www-form-urlencoded";
		$headers[] = "Postman-Token: aa25393b-8889-b51a-f4fa-001541266a01";
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$result = curl_exec($ch);
		if (curl_errno($ch)) {
		    echo 'Error:' . curl_error($ch);
		}
		curl_close ($ch);


      $json = file_get_contents('https://bca-queue.firebaseio.com/.json?auth=Pilap92zrcTl4sfnrNwKULbZUbYt3WMTiewhZEPl');
	 $region = json_decode($json);

      $served = 0;
        return redirect('/')->with('region', $region);
    }


}
