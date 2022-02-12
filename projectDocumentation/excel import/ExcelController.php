<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use App\User;
use Illuminate\Http\Request;
use Excel;

class ExcelController extends Controller
{

public function export(){

	$export =User::select('id','name','email','created_at','updated_at')->get();
	Excel::create('Sheet1',function($excel) use($export){
		$excel->sheet('Sheet1',function($sheet)use ($export){
          $sheet->fromArray($export);
		});
	})->export('xlsx');
}

}
