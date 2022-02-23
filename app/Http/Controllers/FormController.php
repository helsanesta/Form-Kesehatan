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
            'beratbadan' => ['required', 'numeric'],
            # \request ()->validate(['ktm' => 'mimes:jpg,jpeg,png']),
            'ktm' => ['required']
       ]);
    //    $validator = Validator::make($request->all(), [
    //     'ktm' => 'max:2000', //2MB 
    //     ]);
        $foto_link = $this->saveFoto( $request, 1 );
        $request->ktm = $foto_link;
        return view('valid',['data' => $request]);
    }

    public function create()
    {
        return view('form');
    }
    
    public function saveFoto(Request $request, $id)
    {
        $foto = $request->ktm; // typedata : file
        $foto_name = ''; // typedata : string
        if ($foto !== NULL) {
            $foto_name = 'foto' . '-' . $id . "." . $foto->extension();; // typedata : string
            $foto_name = str_replace(' ', '-', strtolower($foto_name)); // typedata : string
            $foto->storeAs(null, $foto_name, ['disk' => 'public']); // memanggil function untuk menaruh file di storage
        }
        return asset('storage') . '/' . $foto_name; // me return path/to/file.ext
    }
}
