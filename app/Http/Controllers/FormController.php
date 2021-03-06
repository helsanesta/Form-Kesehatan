<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use Alert;

class FormController extends Controller
{
    public function input()
    {
        return view('form');
    }
 
    public function proses(Request $request)
    {
        Alert::success('Submit Berhasil!', 'Terima kasih sudah mengisi form kesehatan!');
        $this->validate($request,[
            'nama' => ['required', 'min:6', 'max:20'],
            'nrp' => ['required','min:10','numeric'],
            'usia' => ['required', 'numeric'],
            'jeniskelamin' => ['required', 'alpha', 'max:1'],
            'tinggibadan' => ['required', 'numeric'],
            'beratbadan' => ['required', 'numeric', 'min:2.50', 'max:99.99'],
            'ktm' => ['required', 'image', 'max:2048', 'mimes:jpg,jpeg,png']
       ]);
        $foto_link = $this->saveFoto( $request, 1 );
        $request->ktm = $foto_link;
        return view('valid',['data' => $request]);
    }

    public function saveFoto(Request $request, $id)
    {
        $foto = $request->ktm; 
        $foto_name = ''; 
        if ($foto !== NULL) {
            $foto_name = 'foto'. $id . "." . $foto->extension();
            $foto_name = str_replace(' ', '-', strtolower($foto_name)); 
            $foto->storeAs(null, $foto_name, ['disk' => 'public']); 
        }
        return asset('storage') . '/' . $foto_name; 
    }
}
