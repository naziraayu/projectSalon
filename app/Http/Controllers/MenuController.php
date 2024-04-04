<?php

namespace App\Http\Controllers;
use App\Models\Menu;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function index(){
        return view('menu.index',['data' => Menu::all()]);
    }
    public function create(){
        $menu = null;
        return view('menu.create',compact('menu'));
    }
    public function store(Request $request){
        // Validasi input sebelum menyimpan ke database
        $request->validate([
            'nama_treatment' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
        ]);
    
        // Simpan data jika validasi berhail
        DB::table('menu')->insert([
            'nama_treatment' => $request->nama_treatment,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
        ]);
    
        return redirect()->route('data_menu')->with('success','Menu Treatment berhasil ditambahkan.');
    }
    public function destroy($id){
        DB::table('menu')->where('id', $id)->delete();
        return redirect()->route('data_menu')->with('success' ,"Menu Treatment berhasil di hapus");
    }
    public function edit($id){ 
        // $data = DB::table('pengalaman_kerja')->where('id',$id)->first();
        return view('menu.edit', ['data'=> Menu::where('id', $id)->get()]);
    }
    public function update($id, Request $request){
    // Validasi input sebelum menyimpan ke database
    $request->validate([
        'nama_treatment' => 'required',
        'harga' => 'required',
        'deskripsi' => 'required',
    ]);$request->validate([ 
        'nama_treatment' => 'required',
        'harga' => 'required',
        'deskripsi' => 'required',
    ]);

    // Simpan data jika validasi berhail
    DB::table('menu')->where('id', $id)->update([
        'nama_treatment' => $request->nama_treatment,
        'harga' => $request->harga,
        'deskripsi' => $request->deskripsi,
    ]); 

    return redirect()->route('data_menu')->with('success','Menu Treatment telah berhasil di update.');
    }
}
