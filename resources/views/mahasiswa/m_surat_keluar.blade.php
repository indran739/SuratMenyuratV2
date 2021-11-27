@extends('mahasiswa.m_dashboard')

@section('mahasiswa')
        <div class="grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="title">Surat Keluar</h4>

                    <div class="table-responsive">
                        <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Jenis Surat</th>
                                <th>Prihal</th>
                                <th>Tgl Pelaksanaan</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; ?>
                            @foreach ($surats as $data )
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->jenis_surat }}</td>
                                    <td>{{ $data->prihal }}</td>
                                    <td>{{ $data->tgl_pelaksanaan }}</td>
                                    <td>{{ $data->keterangan }}</td>
                                    <td>
                                        <a href="/detail_{{ $data->id_surat }}" class="btn btn-sm btn-success btn-rounded">Detail</a>
                                        <a href="/edit_{{ $data->id_surat }}" class="btn btn-sm btn-warning btn-rounded">Edit</a>
                                        <a href="" class="btn btn-sm btn-danger btn-rounded mt-2">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
