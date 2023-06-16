<?php

namespace App\Http\Controllers;

use App\Models\RuangAdmin;
use Illuminate\Http\Request;

class RuangadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            $data ['ruang_admins'] = RuangAdmin::all();

            return view('admin.ruangadmin.index', $data);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data ['ruang_admins'] = RuangAdmin::all();

        return view('admin.ruangadmin.index', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'pemasukan' => 'required',
            'pengeluaran' => 'required',
            'tanggal_dibuat' => 'required|date',
        ]);

        RuangAdmin::create([
            'pemasukan'=>$validated['pemasukan'],
            'pengeluaran'=>$validated['pengeluaran'],
            'tanggal_dibuat'=>$validated['tanggal_dibuat']
        ]);


        return redirect('ruangadmin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['ruang_admins'] = RuangAdmin::all();
        $data['ruang_admins'] = RuangAdmin::find($id);
        return view('admin.ruangadmin.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validated = $request->validate([
            'pemasukan' => 'required',
            'pengeluaran' => 'required',
            'tanggal_dibuat' => 'required|date',
            'tanggal_diubah' => 'required|date'
            ]);

        RuangAdmin::where('id', $id)->update([
            'pemasukan'=>$validated['pemasukan'],
            'pengeluaran'=>$validated['pengeluaran'],
            'tanggal_dibuat'=>$validated['tanggal_dibuat'],
            'tanggal_diubah'=>$validated['tanggal_diubah']
        ]);
        return redict()->route('ruangadmin')->with(['sukses' => 'Data telah berhasil diedit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RuangAdmin::destroy($id);
        return redirect('ruangadmin');
    }
}