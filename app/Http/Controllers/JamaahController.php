<?php
 
namespace App\Http\Controllers;
 
use DB;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
 
class JamaahController extends Controller
{    
    public function __construct() {        
        $this->middleware("login");
    }

    public function data(Request $request) {       
        if ($request->isMethod('get')) { 
            $getData = DB::table('jamaah')
                         ->select(DB::raw('id, nama_jamaah, gender, telp_jamaah'))
                         ->get();
     
            $out = [
                "message" => "list_jamaah",
                "results" => $getData
            ];
     
            return response()->json($out, 200);
        }
    }    
    
    public function detail(Request $request, $id) {    
        if ($request->isMethod('get')) {    
            $getData = DB::table('jamaah')
                         ->select(DB::raw('id, nama_jamaah, gender, telp_jamaah'))
                         ->where('id', $id)
                         ->get();
     
            $out = [
                "message" => "detail_jamaah",
                "results" => $getData
            ];
     
            return response()->json($out, 200);
        }
    }

    public function edit(Request $request) { 
        if ($request->isMethod('patch')) {
 
            $this->validate($request, [
                'id' => 'required', 
                'nama_jamaah' => 'required',
                'gender' => 'required',
                'telp_jamaah' => 'required'
            ]);
 
            $id = $request->input('id');
            $nama_jamaah = $request->input('nama_jamaah');
            $gender = $request->input('gender');
            $telp_jamaah = $request->input('telp_jamaah');

            $patch = DB::table('jamaah')->where('id', $id);
 
            $data = [
                'nama_jamaah' => $nama_jamaah,
                'gender' => $gender,
                'telp_jamaah' => $telp_jamaah,
            ];
 
            $update = $patch->update($data);
 
            if ($update) {
                $out  = [
                    "message" => "berhasil_update_data",
                    "results" => $data,
                    "code"    => 200
                ];
            } else {
                $out  = [
                    "message" => "gagal_update_data",
                    "results" => $data,
                    "code"    => 404,
                ];
            }
 
            return response()->json($out, $out['code']);
        }
    }

    public function hapus(Request $request, $id) {
            if ($request->isMethod('delete')) {
            $hapus = DB::table('jamaah')->where('id', $id);
     
            if (!$hapus) {
                $data = [
                    "message" => "id_tidak_ditemukan",
                ];
            } else {
                $hapus->delete();
                $data = [
                    "message" => "berhasil_hapus_data"
                ];
            }
     
            return response()->json($data, 200);
        }
    }

}