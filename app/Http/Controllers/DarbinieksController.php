<?php

namespace App\Http\Controllers;
use App\Models\velosipedi;
use Illuminate\Support\Facades\DB;
use App\Models\darbiniek;
use Illuminate\Http\Request;

class DarbinieksController extends Controller
{
    public function index()
    {
        $darbinieks = darbiniek::paginate('1');
        return view('darbinieks', compact('darbinieks'));
    }
    public function create(Request $request) {

        $find = darbiniek::where('epasts', $request->epasts)->first();
        if ($find) {
            return redirect()->back()->with('danger', 'Šāds e-pasts jau eksistē!');
        }else{
            $data = new darbiniek;
            $data->vards = $request->vards;
            $data->uzvards = $request->uzvards;
            $data->epasts = $request->epasts;
            $data->save();
            return redirect()->back()->with('success', 'Darbinieks pievienots veiksmīgi!');
        }
    }
    public function delete(darbiniek $id)
    {
        $id->delete();
        return redirect()->back();
    }

}
