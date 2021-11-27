<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function __construct(){
        $this->Mahasiswa = new Mahasiswa();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('mahasiswa.m_dashboard');
    }

    public function suratMasuk()
    {
        return view('mahasiswa.m_surat_masuk');
    }

    public function suratKeluar()
    {
        $data = [
            'surats' => $this->Mahasiswa->alldata(),
        ];
        return view('mahasiswa.m_surat_keluar', $data);
    }

    public function detailSuratKeluar($idSurat){
        $data = [
            'surats' => $this->Mahasiswa->detileData($idSurat),
        ];
        return view('mahasiswa.m_detail_suratkeluar', $data);
    }

    public function suratKP()
    {
        return view('mahasiswa.m_surat_tugas');
    }

    public function suratTugas()
    {
        return view('mahasiswa.m_surat_tugas');
    }

    public function tambahSuratTugas()
    {
        Request()->validate([
            'id_user'   => 'required',
            'prihal'    => 'required',
            'jenis_surat'       => 'required',
            'tgl_pelaksanaan'   => 'required',
            'nama_mitra'    => 'required',
            'lokasi'        => 'required',
            'keterangan'    => 'required',
        ]);

        $data = [
            'id_user' => Request()->id_user,
            'prihal' => Request()->prihal,
            'jenis_surat' => Request()->jenis_surat,
            'tgl_pelaksanaan' => Request()->tgl_pelaksanaan,
            'nama_mitra' => Request()->nama_mitra,
            'lokasi' => Request()->lokasi,
            'keterangan' => Request()->keterangan,
        ];

        $this->Mahasiswa->addData($data);
        return redirect()->route('surat_keluar')->with('pesan', 'Data Berhasil di Tambahkan!!!');
    }

    public function editSurat($idSurat)
    {
        $data = [
            'surats' => $this->Mahasiswa->detileData($idSurat),
        ];
        return view('mahasiswa.m_edit_surat_tugas', $data);
    }

    public function beritaAcara()
    {
        return view('mahasiswa.m_surat_tugas');
    }

    public function suratKeterangan()
    {
        return view('mahasiswa.m_surat_tugas');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
