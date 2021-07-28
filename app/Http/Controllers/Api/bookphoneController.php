<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bookphoneController extends Controller
{
    public function index()
    {
        $data = DB::table('bookphone')->get();

        return response()->json(['data' => $data]);
    }

    public function insert(Request $request)
    {
        $data = DB::table('bookphone')->get();

        DB::table('bookphone')->insert([
            'name' => $request->name,
            'no_phone' => $request->no_phone,
        ]);

        return response()->json([
            'status' => 'ok',
            'msg' => 'ok',
        ], 200);
    }

    public function update(Request $request)
    {
        $data = DB::table('bookphone')->where('id', $request->id)->first();

        DB::table('bookphone')->update([
            'name' => $request->name,
            'no_phone' => $request->no_phone,
        ]);

        return response()->json([
            'status' => 'ok',
            'msg' => 'ok',
        ], 200);
    }

    public function show(Request $request)
    {
        $data = DB::table('bookphone')->where('id', $request->id)->first();

        return response()->json(['data' => $data]);
    }

    public function delete($id)
    {
        $data = DB::table('bookphone')->where('id', $id)->delete();

        return response()->json([
            'status' => 'ok',
            'msg' => 'ok',
        ], 200);
    }
}
