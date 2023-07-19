@extends('layouts.v_template')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex  justify-content-between">
                        <h4>Data Rekap kas</h4>
                        <div class="table-tools d-flex justify-content-around ">
                            {{-- <input type="text" class="form-control card-form-header mr-3" placeholder="Cari Data  ..."
                                id="cari-data"> --}}
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card shadow-sm">
                                    <div class="card-body">

                                        <table class="table table-striped table-hover table-user table-action-hover"
                                            id="table-data">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <td>Tanggal</td>
                                                    <td>Kas keluar</td>
                                                    <td>Jenis kas</td>
                                                    <td>Saldo</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($kas_keluar as $row)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $row->tanggal }}</td>
                                                        <td>Rp. {{ number_format($row->kas_keluar) }}</td>
                                                        <td>{{ $row->jenis_kas }}</td>
                                                        <td>Rp. {{ number_format($row->kas_keluar) }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card shadow-sm">
                                    <div class="card-body">

                                        <table class="table table-striped table-hover table-user table-action-hover"
                                            id="table-data">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <td>Tanggal</td>
                                                    <td>Kas masuk</td>
                                                    <td>Jenis kas</td>
                                                    <td>Saldo</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($kas_masuk as $row)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $row->tanggal }}</td>
                                                        <td>Rp. {{ number_format($row->kas_masuk) }}</td>
                                                        <td>{{ $row->jenis_kas }}</td>
                                                        <td>Rp. {{ number_format($row->kas_masuk) }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $('#li').addClass('active');
        $('#liRekapKas').addClass('active');
    </script>
@endsection