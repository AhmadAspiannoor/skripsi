@extends('guru.template.main')
@section('content')
    <div class="row">
        <div class="col-lg-4 col-xl-3">
            <div class="card shadow">
                <div class="card-body">
                    <div class="media align-items-center mb-4">
                        <img class="mr-3"
                            src="
                                            @if (!$data_siswa->photo_profile) {{ asset('profile_image/default.png') }}
                        @else
                            {{ asset($data_siswa->photo_profile) }} @endif"
                            style="border-radius: 50%" width="80" height="80" alt="">
                        <div class="media-body">
                            <h3 class="mb-0">{{ $data_siswa->name }}</h3>
                            {{-- <p class="text-muted mb-0">Canada</p> --}}
                            <p class="text-muted mb-0">{{ $data_siswa->email }}</p>
                        </div>

                    </div>
                    <div class="row mb-5">
                        <div class="col">
                            <div class="card card-profile text-center">
                                <span class="mb-1 text-primary"><i class="fa fa-id-badge"></i></span>
                                <h3 class="mb-0">Kode Kelas</h3>
                                <p class="text-muted px-4">{{ $data_siswa->kode_kelas->kode_kelas }}</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-profile text-center">
                                <span class="mb-1 text-warning"><i class="fa fa-book"></i></span>
                                <h3 class="mb-0">Guru</h3>
                                <p class="text-muted">{{ $data_guru->name }}</p>
                            </div>
                        </div>
                    </div>
                    {{-- <table class="table">
                        <tr>
                            <td><strong class="text-dark mr-4">Kode Kelas</strong></td>
                            <td><span>{{ $data_siswa->kode_kelas->kode_kelas }}</span></td>
                        </tr>
                        <tr>
                            <td><strong class="text-dark mr-4">Guru</strong></td>
                            <td><span>{{ $data_guru->name }}</span></td>
                        </tr>
                    </table> --}}
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow">
                <div class="card-header">
                    <h6 class="text-primary">Nilai Kuis 1</h6>
                </div>
                <div class="card-body">
                    <div class="card shadow">
                        <div class="card-header">
                            <h6>Nilai kuis terbaru</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Nilai</th>
                                            <th>Melakukan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>{{ $data_siswa->nilaikuis1->user->name ?? 'Data Kosong' }}</td>
                                            <td>{{ $data_siswa->nilaikuis1->nilai ?? 'Data Kosong' }}</td>
                                            {{-- @if ($data_siswa->nilaikuis1->created_at == null)
                                                <td>Data Kosong</td>
                                            @else
                                                <td>{{$data_siswa->nilaikuis1->created_at->diffForhumans()}}</td>
                                            @endif --}}
                                            <td>{{ $data_siswa->nilaikuis1 ? $data_siswa->nilaikuis1->created_at->diffForhumans() : 'Data Kosong' }} ({{$data_siswa->nilaikuis1 ? $data_siswa->nilaikuis1->created_at->format('H:i') : ''}})
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow">
                        <div class="card-header">
                            <h6>Nilai kuis terdahulu</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Nilai</th>
                                            <th>Melakukan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_siswa->nilaikuis1_trash as $key => $kuis1_trash)
                                            <tr>
                                                <th scope="row">{{ $key++ + 1 }}</th>
                                                <td>{{ $kuis1_trash->user->name ?? 'Data Kosong' }}</td>
                                                <td>{{ $kuis1_trash->nilai ?? 'Data Kosong' }}</td>
                                                <td>{{ $kuis1_trash ? $kuis1_trash->created_at->diffForhumans() : 'Data Kosong' }} ({{$kuis1_trash ? $kuis1_trash->created_at->format('H:i') : ''}})</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow">
                        <div class="card-header">
                            <h6>Grafik Kuis 1</h6>
                        </div>
                        <div class="card-body">
                            {!!$chart_kuis_1->render()!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
