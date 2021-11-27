@extends('mahasiswa.m_dashboard')

@section('mahasiswa')
    <h4 class="content ml-1">Surat Tugas</h4>
    <div class="col-12 grid-margin stretch-card surat_tugas rounded">
            <div class="card">
                <div class="card-body">
                    <h3 class="title">Edit Surat Tugas</h3>
                    <form action="/update_surat_tugas/{{ $surats->id_surat }}" method="POST" class="forms-sample">
                        {{ csrf_field()}}

                        <input type="hidden" class="form-control hidden" name="id_user" value="{{ Auth::user()->id }}">
                        <input type="hidden" class="form-control hidden" name="jenis_surat" value="Surat Tugas">
                        <div class="form-group">
                            <label for="prihal">Prihal</label>
                            <input type="text" class="form-control @error('prihal')
                            is-invalid
                            @enderror>" name="prihal" placeholder="Prihal" value="{{ $surats->prihal }}">
                            <div class="text-danger">
                                @error('prihal')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_mitra">Nama Mitra</label>
                            <input type="text" class="form-control @error('nama_mitra')
                            is-invalid
                            @enderror" name="nama_mitra" placeholder="Nama Mitra" value="{{ $surats->nama_mitra }}">
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="lokasi">Lokasi</label>
                                    <input type="text" class="form-control @error('lokasi')
                                    is-invalid
                                    @enderror" name="lokasi" placeholder="Lokasi" value="{{ $surats->lokasi }}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label >Tanggal Pelaksanaan</label>
                                    <input type="date" class="form-control @error('tgl_pelaksanaan')
                                    is-invalid
                                    @enderror" name="tgl_pelaksanaan" value="{{ $surats->tgl_pelaksanaan }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea class="form-control @error('keterangan')
                            is-invalid
                            @enderror" name="keterangan" rows="4" value="{{ $surats->keterangan }}"></textarea>
                        </div>
                        <button type="submit" class="btn btn-info mr-2">Edit</button>
                        <a href="/surat_keluar" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
@endsection
