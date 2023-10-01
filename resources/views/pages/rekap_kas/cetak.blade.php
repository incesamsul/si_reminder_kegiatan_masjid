<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print </title>
    <style>
        body {
            color: rgba(0, 0, 0, 0.8);
        }

        .full-width {
            width: 100%;
        }

        .logo {
            float: left;
            margin-bottom: 15px;
            margin-right: 15px;
        }

        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        .header {
            color: #000;
            border-bottom: 4px double #000;
            margin-bottom: 10px;
        }

        .header-text {
            text-align: center;
        }

        .header-text * {
            margin: 1px;
        }

        .header-text p {
            font-size: 12px;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .mt-10 {
            margin-top: 10px;
        }

        .mt-50 {
            margin-top: 50px;
        }

        .mb-30 {
            margin-bottom: 30px;
        }

        table {
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header clearfix">
            <div class="logo">

            </div>
            <div class="header-text">
                <h3>MASJID JAMI NURUL IMAM</h3>
                <h3>KAMPUNG BONTOLALI DESA MANAKKU KECAMATAN LABAKKANG</h3>
            </div>
        </div>
        <h4 class="text-center">BUKU KAS UMUM</h4>

        <table>
            <tr>
                <td>Bulan</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Sisa kas dari bulan</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>Sebesar rupiah</td>
                <td>:</td>
                <td></td>
            </tr>
        </table>

        <table class="full-width mt-10 mb-30" border="1" cellspacing="0" cellpadding="5">
            <thead>
                <tr>
                    <th>#</th>
                    <td>Tanggal</td>
                    <td>Kas masuk</td>
                    <td>Jenis kas</td>
                    <td>Saldo</td>
                    <td>Aksi</td>
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
                        <td>
                            <a href="{{ URL::to('/admin/kas_masuk/edit/' . $row->id) }}"
                                class="btn btn-primary">Edit</a>
                            <form action="{{ URL::to('/admin/kas_masuk/delete/' . $row->id) }}" method="POST"
                                style="display: inline">
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
</body>

</html>
