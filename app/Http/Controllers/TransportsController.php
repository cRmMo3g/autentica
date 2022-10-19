<?php

namespace App\Http\Controllers;
use App\Models\Transports;
use App\Models\velosipedi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TransportsController extends Controller
{


    public function index(){
        $transports = transports::paginate('3');

        return view('transports', compact('transports'));
    }

    public function getDate(Request $request){
        $posts = transports::where([
                ['lieto_no', '>=', [$request->lieto_no]],
                ['lieto_lidz', '<=', [$request->lieto_lidz]],
            ])->get();
        $lieto_no= $request->lieto_no;
        $lieto_lidz= $request->lieto_lidz;

        return view('result', compact('posts','lieto_no', 'lieto_lidz'));
    }
    public function delete(transports $id)
    {
        $id->delete();
        return redirect()->route('transports')->with('success', 'Jūsu rezervācija ir dzēsta!');
    }

}

