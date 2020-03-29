<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class anggotaController extends Controller
{
    
    public function index(Request $request)
    {
        $dataAnggota = [
            ['nama' => 'Munawaroh', 'alamat' => 'Slawi', 'jk' => 'Perempuan', 'email' => 'munaroh@gmail.com', 'nohp' => '6281712143123'],
            ['nama' => 'Bambang Sumarsono', 'alamat' => 'Brebes', 'jk' => 'Laki-laki', 'email' => 'bambang@mai.com', 'nohp' => '6281234561382'],
            ['nama' => 'Risma Sari', 'alamat' => 'Tegal', 'jk' => 'Perempuan', 'email' => 'rismaa@mail.com', 'nohp' => '6287761457268'],
            ['nama' => 'Adi Darsono', 'alamat' => 'Pemalang', 'jk' => 'Laki-laki', 'email' => 'adidar@gmail.co.id', 'nohp' => '6283487613246'],
            ['nama' => 'Citra Lestari', 'alamat' => 'Tegal', 'jk' => 'Laki-laki', 'email' => 'lcitra@gmail.com', 'nohp' => '6285789251322'],
            
        ];

        if($request->query('alamat')){
            $dataAnggota = array_filter($dataAnggota, function($alamat){
                return $alamat['alamat'] == request()->alamat;
            });
        }

        return view('anggota.data-anggota', compact('dataAnggota'));
    }
 /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anggota.create-anggota');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect()->route('anggota.index')->with('msg', 'Data anda telah diinputkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nama)
    {
        $dataAnggota = [
            ['nama' => 'Munawaroh', 'alamat' => 'Slawi', 'jk' => 'Perempuan', 'email' => 'munaroh@gmail.com', 'nohp' => '6281712143123'],
            ['nama' => 'Bambang Sumarsono', 'alamat' => 'Brebes', 'jk' => 'Laki-laki', 'email' => 'bambang@mai.com', 'nohp' => '6281234561382'],
            ['nama' => 'Risma Sari', 'alamat' => 'Tegal', 'jk' => 'Perempuan', 'email' => 'rismaa@mail.com', 'nohp' => '6287761457268'],
            ['nama' => 'Adi Darsono', 'alamat' => 'Pemalang', 'jk' => 'Laki-laki', 'email' => 'adidar@gmail.co.id', 'nohp' => '6283487613246'],
            ['nama' => 'Citra Lestari', 'alamat' => 'Tegal', 'jk' => 'Laki-laki', 'email' => 'lcitra@gmail.com', 'nohp' => '6285789251322'],
            
        ];

        if($nama){
            $dataAnggota = array_filter($dataAnggota, function($nama){
                return $nama['nama'] == request()->segment(count(request()->segments()));
            });
        }

        return view('anggota.detail-anggota', compact('dataAnggota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nama)
    {
       $dataAnggota = [
            ['nama' => 'Munawaroh', 'alamat' => 'Slawi', 'jk' => 'Perempuan', 'email' => 'munaroh@gmail.com', 'nohp' => '6281712143123'],
            ['nama' => 'Bambang Sumarsono', 'alamat' => 'Brebes', 'jk' => 'Laki-laki', 'email' => 'bambang@mai.com', 'nohp' => '6281234561382'],
            ['nama' => 'Risma Sari', 'alamat' => 'Tegal', 'jk' => 'Perempuan', 'email' => 'rismaa@mail.com', 'nohp' => '6287761457268'],
            ['nama' => 'Adi Darsono', 'alamat' => 'Pemalang', 'jk' => 'Laki-laki', 'email' => 'adidar@gmail.co.id', 'nohp' => '6283487613246'],
            ['nama' => 'Citra Lestari', 'alamat' => 'Tegal', 'jk' => 'Laki-laki', 'email' => 'lcitra@gmail.com', 'nohp' => '6285789251322'],
            
            
        ];

        $dataAnggota = array_filter($dataAnggota, function($nama){
            return $nama['nama'] == request()->segment(count(request()->segments())-1);
        });

        return view('anggota.edit-anggota',compact('dataAnggota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nama)
    {
        return redirect()->route('anggota.index')->with('msg', 'Data anda telah diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return redirect()->route('anggota.index')->with('msg', 'Data anda telah dihapus!');
    }
}