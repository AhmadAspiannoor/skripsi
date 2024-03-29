@extends('siswa.template.main')
@section('title')
    Kuis mengenal SPLTV
@endsection
@section('script_atas')
    <script src="{{ asset('js/kuis1_timer.js') }}"></script>
@endsection
@section('content')
    <div class="card shadow">
        <div class="card-header">
            <h6 class="m-0 text-weight-bold text-primary">
                Kuis mengenal SPLTV (Sistem Persamaan Linear Tiga Variabel)
            </h6>
        </div>
        <div class="card-body">
            <div class="mt-5 row">
                <div class="col">
                    <div class="float-right d-flex">
                        Waktu : <div id="timer">-:-</div>
                    </div>
                </div>


            </div>
            <div id="smartwizard">
                <ul class="nav">
                    @foreach ($soal_kuis_mengenal as $key => $nav_soal)
                        <li class="nav-item">
                            <a class="nav-link" href="#{{ $key }}">
                                {{ $key + 1 }}
                            </a>
                        </li>
                    @endforeach
                </ul>

                <form action="{{ route('kuis_mengenal_post') }}" method="post" onsubmit="return validateForm()"
                    name="myForm" id="form">
                    @csrf
                    <div class="tab-content">
                        @foreach ($soal_kuis_mengenal as $key => $content_kuis)
                            <div id="{{ $key }}" class="tab-pane" role="tabpanel"
                                aria-labelledby="{{ $key }}">
                                <div class="card shadow">
                                    <div class="card-header">
                                        <h6>Soal Nomor {{ $key + 1 }}</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <p>
                                                <ul>
                                                    <li>{{ $content_kuis->soal_1 }}</li>
                                                    {{-- @if ($content_kuis->soal_2)
                                                        <li>{{ $content_kuis->soal_2 }}</li>
                                                    @endif
                                                    @if ($content_kuis->soal_3)
                                                        <li>{{ $content_kuis->soal_3 }}</li>
                                                    @endif --}}
                                                </ul>
                                                </p>
                                            </div>
                                        </div>
                                        @if ($content_kuis->pertanyaan)
                                            <div class="row">
                                                <div class="col">
                                                    <p>{{ $content_kuis->pertanyaan }}</p>
                                                </div>
                                            </div>
                                        @endif

                                        <div class="row">

                                            <div class="col">
                                                <div class="form-group">
                                                    <div class="radio mb-3">

                                                        <input type="radio" name="{{ $content_kuis->id }}[jawaban]"
                                                            value="a" id="{{ $content_kuis->id }}[jawaban_a]"><label
                                                            for="{{ $content_kuis->id }}[jawaban_a]" class="ml-3">A.
                                                            {{ $content_kuis->pilihan_a }}
                                                        </label>

                                                    </div>
                                                    <div class="radio mb-3">

                                                        <input type="radio" name="{{ $content_kuis->id }}[jawaban]"
                                                            value="b" id="{{ $content_kuis->id }}[jawaban_b]"><label
                                                            for="{{ $content_kuis->id }}[jawaban_b]" class="ml-3">B.
                                                            {{ $content_kuis->pilihan_b }}</label>

                                                    </div>
                                                    <div class="radio mb-3">

                                                        <input type="radio" name="{{ $content_kuis->id }}[jawaban]"
                                                            value="c" id="{{ $content_kuis->id }}[jawaban_c]"><label
                                                            for="{{ $content_kuis->id }}[jawaban_c]" class="ml-3">C.
                                                            {{ $content_kuis->pilihan_c }}</label>

                                                    </div>
                                                    <div class="radio mb-3">

                                                        <input type="radio" name="{{ $content_kuis->id }}[jawaban]"
                                                            value="d" id="{{ $content_kuis->id }}[jawaban_d]"><label
                                                            for="{{ $content_kuis->id }}[jawaban_d]" class="ml-3">D.
                                                            {{ $content_kuis->pilihan_d }}</label>

                                                    </div>
                                                    <div class="radio mb-3">

                                                        <input type="radio" name="{{ $content_kuis->id }}[jawaban]"
                                                            value="e" id="{{ $content_kuis->id }}[jawaban_e]"> <label
                                                            for="{{ $content_kuis->id }}[jawaban_e]" class="ml-3">E.
                                                            {{ $content_kuis->pilihan_e }}</label>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="card shadow">
                        <div class="card-body">
                            <button type="submit" class="btn btn-success float-right m-4 text-white">Cek Jawaban</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="bootstrap-modal">
        <!-- Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title font-weight-bold text-primary">Perhatian</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5>setiap halaman di muat, maka soal juga akan di acak kembali</h5>
                        <hr>
                        <h5>Pastikan kalian mengisi semua jawaban yang ada</h5>
                        <hr>

                        <p>klik tombol <button class="btn btn-success text-white">Cek Jawaban</button> apabila kalian sudah
                            mengisi semua jawaban</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script_bawah')
    <script>
        window.onload = function() {
            $("#myModal").modal('show');
        }
    </script>
    <script>
        function validateForm() {
            let x = document.forms["myForm"]["{{ $content_kuis->id }}[jawaban]"].value;
            if (x == "") {
                // alert("Name must be filled out");
                Swal.fire(
                    'Waduh !',
                    'Kalian belum mengisi semua jawaban',
                    'warning'
                );
                return false;
            } else {
                Swal.fire({
                    title: 'Apa anda yakin ?',
                    text: "Pastikan jawaban sudah terisi semua",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yakin',
                    cancelButtonText: 'Batal'
                }).then((isOkay) => {
                    if (isOkay.isConfirmed) {
                        let form = document.getElementById("form");
                        form.submit();
                    }
                });
                return false;
            };

        }
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#smartwizard').smartWizard({
                selected: 0,
                theme: 'dots',
                transition: {
                    animation: 'fade',
                    speed: '400',
                },
                lang: { // Language variables for button
                    next: 'Selanjutnya',
                    previous: 'Kembali'
                },
                anchor: {
                    enableAllAnchors: true,
                    enableDoneStateNavigation: true,
                },

            });
        });
    </script>
@endsection
