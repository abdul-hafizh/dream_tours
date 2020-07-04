<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthController extends Controller {

    public function register(Request $request) {
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'nama_jamaah' => 'required|max:255',
                'gender' => 'required|max:1',
                'telp_jamaah' => 'required|max:15',
                'password' => 'required|min:6'
            ]);
     
            $nama_jamaah = $request->input("nama_jamaah");
            $gender = $request->input("gender");
            $telp_jamaah = $request->input("telp_jamaah");
            $password = $request->input("password");
     
            $hashPwd = Hash::make($password);
     
            $data = [
                "nama_jamaah" => $nama_jamaah,
                "gender" => $gender,
                "telp_jamaah" => $telp_jamaah,
                "password" => $hashPwd
            ];
     
            if (User::create($data)) {
                $out = [
                    "message" => "berhasil_registrasi",
                    "code"    => 201,
                ];
            } else {
                $out = [
                    "message" => "gagal_registrasi",
                    "code"   => 404,
                ];
            }
     
            return response()->json($out, $out['code']);
        }
    }

    public function login(Request $request) {
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'nama_jamaah' => 'required',
                'password' => 'required'
            ]);
     
            $nama_jamaah = $request->input("nama_jamaah");
            $password = $request->input("password");
     
            $user = User::where("nama_jamaah", $nama_jamaah)->first();
     
            if (!$user) {
                $out = [
                    "message" => "gagal_login",
                    "code"    => 401,
                    "result"  => [
                        "token" => null,
                    ]
                ];
                return response()->json($out, $out['code']);
            }
     
            if (Hash::check($password, $user->password)) {
                $newtoken  = $this->generateRandomString();
     
                $user->update([
                    'token' => $newtoken
                ]);
     
                $out = [
                    "message" => "berhasil_login",
                    "user"    => $nama_jamaah,
                    "code"    => 200,
                    "result"  => [
                        "token" => $newtoken,
                    ]
                ];
            } else {
                $out = [
                    "message" => "gagal_login",
                    "code"    => 401,
                    "result"  => [
                        "token" => null,
                    ]
                ];
            }
     
            return response()->json($out, $out['code']);
        }
    }

    function generateRandomString($length = 80) {
        $karakkter = '012345678dssd9abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $panjang_karakter = strlen($karakkter);
        $str = '';
        for ($i = 0; $i < $length; $i++) {
            $str .= $karakkter[rand(0, $panjang_karakter - 1)];
        }
        return $str;
    }
}