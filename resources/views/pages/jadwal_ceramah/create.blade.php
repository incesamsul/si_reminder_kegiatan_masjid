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
                                <a href="{{ URL::to('/admin/jadwal_ceramah') }}" type="button"
                                    class="btn bg-main text-white float-right"><i class="fas fa-arrow-left"></i></a>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ URL::to('/admin/jadwal_ceramah') }}" method="POST">
                            @if ($edit)
                                @method('PUT')
                            @endif
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="id" class="form-control"
                                    value="{{ $edit ? $edit->id : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control"
                                    value="{{ $edit ? $edit->tanggal : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="nama">nama</label>
                                <input type="text" name="nama" class="form-control"
                                    value="{{ $edit ? $edit->nama : ' ' }}">
                            </div>
                            <div class="form-group">
                                <label for="no_hp">no hp</label>
                                <input type="text" name="no_hp" class="form-control"
                                    value="{{ $edit ? $edit->no_hp : ' ' }}">
                            </div>
                            <div class="form-group">
                                <label for="tema">tema</label>
                                <input type="text" name="tema" class="form-control"
                                    value="{{ $edit ? $edit->tema : ' ' }}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn bg-main text-white">Simpan</button>
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
