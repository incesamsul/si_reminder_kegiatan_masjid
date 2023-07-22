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
                            @if (auth()->user()->role == 'Administrator' || auth()->user()->role == 'bendahara')
                                <button type="button" class="btn bg-main text-white float-right">
                                    <a href="{{ URL::to('/admin/jadwal_ceramah/create') }}" type="button"
                                        class="btn bg-main text-white float-right"><i class="fas fa-plus"></i></a>
                                </button>
                            @endif
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
                                    @if (auth()->user()->role == 'Administrator' || auth()->user()->role == 'bendahara')
                                        <td>Aksi</td>
                                    @endif
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
                                        @if (auth()->user()->role == 'Administrator' || auth()->user()->role == 'bendahara')
                                            <td>
                                                <a href="{{ URL::to('/admin/jadwal_ceramah/edit/' . $row->id) }}"
                                                    class="btn btn-primary">
                                                    <i class="fas fa-pen"></i>
                                                    Edit</a>
                                                <form action="{{ URL::to('/admin/jadwal_ceramah/delete/' . $row->id) }}"
                                                    method="POST" style="display: inline">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" onclick="return confirm('Yakin?')"
                                                        class="ml-2 btn btn-danger">
                                                        <i class="fas fa-trash"></i>
                                                        Hapus</button>
                                                </form>

                                                <?php
                                                
                                                $pesan = "Halo $row->nama \n\n";
                                                $pesan .= 'Ini adalah pengingat untuk ceramah yang akan datang:\n';
                                                $pesan .= "Tanggal: $row->tanggal  \n";
                                                $pesan .= "Tema ceramah: $row->tema  \n";
                                                $pesan .= 'Jangan lupa untuk hadir dan mempersiapkan diri untuk acara ini. Semoga acara ceramah berjalan dengan lancar dan bermanfaat. \n\n';
                                                $pesan .= 'Terima kasih!';
                                                ?>

                                                <a href="https://wa.me/{{ $row->no_hp }}/?text=<?php echo urlencode($pesan); ?>"
                                                    class="btn btn-success ml-2">
                                                    <i class="fab fa-whatsapp"></i>
                                                    Kirim
                                                </a>

                                            </td>
                                        @endif
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
