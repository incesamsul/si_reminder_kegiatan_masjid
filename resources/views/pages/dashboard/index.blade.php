@extends('layouts.v_template')

<style>
    .bg-customs {
        background: url('img/masjid.jpg');
        background-size: cover;
        height: 700px;
    }
</style>
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-customs">
                    </div>
                    <div class="card-body">
                        <h5>Hi, Selamat datang Sistem informasi Masjid Nurul Imam Pangkep</h5>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

@section('script')
    <script>
        $('#liDashboard').addClass('active');
    </script>
@endsection
