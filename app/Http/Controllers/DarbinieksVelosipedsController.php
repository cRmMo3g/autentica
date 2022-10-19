<?php

namespace App\Http\Controllers;
use App\Models\darbiniek;
use App\Models\velosipedi;
use Illuminate\Support\Facades\DB;
use App\Models\VelosipedisDarbinieks;
use Illuminate\Http\Request;

class DarbinieksVelosipedsController extends Controller
{
    public function index()
    {
        $rezervets = VelosipedisDarbinieks::paginate('5');
        $darbinieku_saraksts = darbiniek::all();
        $velosipedu_saraksts = velosipedi::all();
        return view('sakumlapa', compact('rezervets','darbinieku_saraksts', 'velosipedu_saraksts'));
    }

    public function create(Request $request) {

        VelosipedisDarbinieks::create([
            'darbinieki_id' => request('darbinieki_id'),
            'velosipedi_id' => request('velosipedi_id'),
            'laiks_no' => request('laiks_no'),
            'laiks_lidz' => request('laiks_lidz'),
        ]);
        return redirect()->back();

    }
    public function delete(VelosipedisDarbinieks $id)
    {
        $id->delete();
        return redirect()->back();
    }



}
