<?php

namespace App\Http\Controllers;

use App\BukuMysql;
use App\BukuPgsql;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function insert_view(){
        return view('insert');
    }

    public function insert_post(Request $request){
        DB::beginTransaction();
        $buku_mysql = BukuMysql::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tahun' => $request->tahun
        ]);

        $buku_pgsql = BukuPgsql::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tahun' => $request->tahun,
            'penerbit' => $request->penerbit
        ]);
        DB::commit();
        return redirect()->route('show.data');
    }

    public function update_view($id){
        $buku_mysql = BukuMysql::where('id', $id)->first();
        $buku_pgsql = BukuPgsql::where('id', $id)->first();

        return view('update')
            ->with('buku_mysql', $buku_mysql)
            ->with('buku_pgsql', $buku_pgsql);
    }

    public function update_post(Request $request, $id){
        DB::beginTransaction();
        $buku_mysql = BukuMysql::where('id', $id)->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tahun' => $request->tahun,
        ]);

        $buku_pgsql = BukuPgsql::where('id', $id)->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tahun' => $request->tahun,
            'penerbit' => $request->penerbit
        ]);
        DB::commit();

        return redirect()->route('show.data');
    }

    public function showData(){
        $buku_mysql = BukuMysql::all();

        $buku_pgsql = BukuPgsql::all();
        return view('table')
            ->with('buku_mysql', $buku_mysql)
            ->with('buku_pgsql', $buku_pgsql);
    }


}
