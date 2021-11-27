@extends('mahasiswa.m_dashboard')

@section('mahasiswa')
        <div class="grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="title">Masuk</h4>

                    <div class="table-responsive">
                        <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tgl Surat Masuk</th>
                                <th>Jenis Surat</th>
                                <th>Prihal</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>12/01/2021</td>
                                <td>Surat Tugas</td>
                                <td>Kunjungan Penelitian</td>
                                <td>Kunjungan penelitian yang dilaksanakan oleh bapak </td>
                                <td>
                                    <label class="badge badge-danger">Lihat</label>
                                    <label class="badge badge-danger">Edit</label>
                                    <label class="badge badge-danger">Hapus</label>
                                </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
