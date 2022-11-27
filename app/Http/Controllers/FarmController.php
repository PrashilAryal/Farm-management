<?php

namespace App\Http\Controllers;

use App\Models\Farm;
use Illuminate\Http\Request;

class FarmController extends Controller
{
    //
    public function addRecord(Request $req){

        // Farm::create([
        //     'type'=>$req->type,
        //     'quantity'=>$req->quantity,
        //     'price'=>$req->price,
        // ]);

        $farmObj = new Farm();
        $farmObj->type = $req->type;
        $farmObj->quantity = $req->quantity;
        $farmObj->price= $req->price;

        $farmObj->save();
        // return redirect('/');
        return redirect()->route('view');

    }
    public function destroy($id){
        $data=Farm::find($id);
        $data->delete();
        // echo "Record deleted successfully.";
        // return redirect('/');
        return redirect()->route('view');

    }

    public function edit($id){
        $data = Farm::find($id);
        return view('edit', ['data'=>$data]);
    }

    public function updateRecord(Request $req){
        $farmObj = Farm::find($req->id);
        $farmObj->type = $req->type;
        $farmObj->quantity = $req->quantity;
        $farmObj->price = $req->price;
        $farmObj->save();

        // return redirect('/');
        return redirect()->route('view');

    }
}