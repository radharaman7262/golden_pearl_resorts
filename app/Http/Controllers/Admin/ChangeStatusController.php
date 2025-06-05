<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChangeStatusController extends Controller
{
    public function changeStatus(Request $request){
        echo DB::table($request->table)->where('id',$request->row_id)->update([$request->column=>$request->status]);
    }


    public function deleteRowId(Request $request){
        $data = DB::table($request->table)->where('id',$request->row_id)->first();
        if($request->table=='accessories'){
            foreach(json_decode($data->multi_image) as $val){
                @unlink('storage/app/'.$val);
            }
        }
        if($request->table=='live_kitchens'){
            @unlink('storage/app/'.$data->image1);
            @unlink('storage/app/'.$data->image2);
        }
        echo DB::table($request->table)->where('id',$request->row_id)->delete();
    }

    
}
