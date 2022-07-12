<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ObatController extends Controller
{
    public function index()
    {
        $obat = Obat::all();

        return response()->json([
            'success' => true,
            'message' =>'List Semua Obat',
            'data'    => $obat
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'   => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Semua Kolom Wajib Diisi!',
                'data'   => $validator->errors()
            ],401);

        } else {

            $obat = Obat::create([
                'name'     => $request->input('name'),
                'price'   => $request->input('price'),
                'stock'   => $request->input('stock'),
            ]);

            if ($obat) {
                return response()->json([
                    'success' => true,
                    'message' => 'Obat Berhasil Disimpan!',
                    'data' => $obat
                ], 201);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Obat Gagal Disimpan!',
                ], 400);
            }

        }
    }

    public function show($id)
    {
        $obat = Obat::find($id);

        if ($obat) {
            return response()->json([
                'success'   => true,
                'message'   => 'Detail Obat!',
                'data'      => $obat
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'obat Tidak Ditemukan!',
            ], 404);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title'   => 'required',
            'content' => 'required',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Semua Kolom Wajib Diisi!',
                'data'   => $validator->errors()
            ],401);

        } else {

            $obat = Obat::whereId($id)->update([
                'title'     => $request->input('title'),
                'content'   => $request->input('content'),
            ]);

            if ($obat) {
                return response()->json([
                    'success' => true,
                    'message' => 'Obat Berhasil Diupdate!',
                    'data' => $obat
                ], 201);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Obat Gagal Diupdate!',
                ], 400);
            }
        }
    }
}
