@extends('layouts.v_template')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex  justify-content-between">
                        <h4>Data </h4>
                        <div class="table-tools d-flex justify-content-around ">
                            <button type="button" class="btn bg-main text-white float-right">
                                <a href="{{ URL::to('/admin/kegiatan_masjid') }}" type="button"
                                    class="btn bg-main text-white float-right"><i class="fas fa-arrow-left"></i></a>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ URL::to('/admin/kegiatan_masjid') }}" method="POST">
                            @if ($edit)
                                @method('PUT')
                            @endif
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="id" class="form-control"
                                    value="{{ $edit ? $edit->id : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="tgl_kegiatan">tgl kegiatan</label>
                                <input type="date" name="tgl_kegiatan" class="form-control"
                                    value="{{ $edit ? $edit->tgl_kegiatan : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="jenis_kegiatan">jenis kegiatan</label>
                                <input type="text" name="jenis_kegiatan" class="form-control"
                                    value="{{ $edit ? $edit->jenis_kegiatan : ' ' }}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-danger">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $('#li').addClass('active');
        $('#liManajemen').addClass('active');
    </script>
@endsection
