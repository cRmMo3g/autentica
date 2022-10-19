<?php

namespace App\Http\Controllers;
use App\Models\velosipedi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class VelosipediController extends Controller
{

    public function index()
    {
        $velosipedis = velosipedi::paginate('1');

        return view('velosipedi', compact('velosipedis'));
    }
    public function create(Request $request) {
        $data = new velosipedi;
        $data->nosaukums = $request->nosaukums;
        $data->apraksts = $request->apraksts;
        $data->save();
        return redirect()->back();

    }
    public function delete(velosipedi $id)
    {
        $id->delete();
        return redirect()->back();
    }

}

