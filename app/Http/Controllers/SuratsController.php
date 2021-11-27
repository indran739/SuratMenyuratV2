<?php

namespace App\Http\Controllers;

use App\Surats;
use Illuminate\Http\Request;

class SuratsController extends Controller
{

    public function __construct(){
        $this->Surats = new Surats();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function mahasiswa()
    {
        $data = [
            'surats' => $this->Surats->alldata(),
        ];
        return view('mahasiswa.m_surat_keluar', $data);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Surats  $surats
     * @return \Illuminate\Http\Response
     */
    public function show(Surats $surats)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Surats  $surats
     * @return \Illuminate\Http\Response
     */
    public function edit(Surats $surats)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Surats  $surats
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Surats $surats)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Surats  $surats
     * @return \Illuminate\Http\Response
     */
    public function destroy(Surats $surats)
    {
        //
    }
}
