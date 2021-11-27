@extends('mahasiswa.m_dashboard')

@section('mahasiswa')
        <div class="grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="title">Detail</h4>

                    <div class="table-responsive">
                        <table class="table title">
                            <tr>
                                <th width="100px">Jenis Surat</th>
                                <th width="30px"></th>
                                <th>{{ $surats->jenis_surat }}</th>
                            </tr>
                            <tr>
                                <th width="100px">Prihal</th>
                                <th width="30px"></th>
                                <th>{{ $surats->prihal }}</th>
                            </tr>
                            <tr>
                                <th width="100px">Nama Mitra</th>
                                <th width="30px"></th>
                                <th>{{ $surats->nama_mitra }}</th>
                            </tr>
                            <tr>
                                <th width="100px">Tanggal Pelaksanaan</th>
                                <th width="30px"></th>
                                <th>{{ $surats->tgl_pelaksanaan }}</th>
                            </tr>
                            <tr>
                                <th width="100px">Keterangan</th>
                                <th width="30px"></th>
                                <th>{{ $surats->keterangan }}</th>
                            </tr>
                        </table>
                        <a href="/surat_keluar" class="btn btn-sm btn-light">Back</a>
                    </div>
                </div>
            </div>
        </div>
@endsection
