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
                                <a href="{{ URL::to('/admin/kas_masuk') }}" type="button"
                                    class="btn bg-main text-white float-right"><i class="fas fa-arrow-left"></i></a>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ URL::to('/admin/kas_masuk') }}" method="POST">
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
                                <label for="kas_masuk">Kas masuk</label>
                                <input type="text" name="kas_masuk" class="form-control"
                                    value="{{ $edit ? $edit->kas_masuk : ' ' }}">
                            </div>
                            <div class="form-group">
                                <label for="jenis_kas">jenis kas</label>
                                <input type="text" name="jenis_kas" class="form-control"
                                    value="{{ $edit ? $edit->jenis_kas : ' ' }}">
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
