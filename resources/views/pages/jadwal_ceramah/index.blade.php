@extends('layouts.v_template')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex  justify-content-between">
                        <h4>Data jadwal ceramah</h4>
                        <div class="table-tools d-flex justify-content-around ">
                            <input type="text" class="form-control card-form-header mr-3" placeholder="Cari Data  ..."
                                id="cari-data">
                            <button type="button" class="btn bg-main text-white float-right">
                                <a href="{{ URL::to('/admin/jadwal_ceramah/create') }}" type="button"
                                    class="btn bg-main text-white float-right"><i class="fas fa-plus"></i></a>
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped table-hover table-user table-action-hover" id="table-data">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <td>Tanggal</td>
                                    <td>nama</td>
                                    <td>No hp</td>
                                    <td>tema</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jadwal_ceramah as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->tanggal }}</td>
                                        <td>{{ $row->nama }}</td>
                                        <td>{{ $row->no_hp }}</td>
                                        <td>{{ $row->tema }}</td>
                                        <td>
                                            <a href="{{ URL::to('/admin/jadwal_ceramah/edit/' . $row->id) }}"
                                                class="btn btn-primary">Edit</a>
                                            <form action="{{ URL::to('/admin/jadwal_ceramah/delete/' . $row->id) }}"
                                                method="POST" style="display: inline">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" onclick="return confirm('Yakin?')"
                                                    class="ml-2 btn btn-danger">Hapus</button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $('#li').addClass('active');
        $('#liJadwalCeramah').addClass('active');
    </script>
@endsection
