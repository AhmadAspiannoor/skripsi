@extends('admin.template.main')
@section('script_atas')
    <script src="{{ asset('js/admin.js') }}"></script>
@endsection
@section('title')
    Tambah Akun
@endsection
@section('content')
    <div class="card shadow">
        <div class="card-body">
            <h2 class="text-primary text-center">Tambah Akun</h2>
            <div class="card shadow">
                <div class="card-header">
                    <h4 class="text-primary">Data User</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('tambah_user_post') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" placeholder="Nama" id="nama" name="nama">
                            @error('nama')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nip_nis">NIP / NIP</label>
                            <input type="text" class="form-control" placeholder="NIP / NIS" id="nip_nis"
                                name="nip_nis">
                            @error('nip_nis')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" placeholder="Email" id="email" name="email">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Kode Kelas</label>
                            <select name="kode_kelas" class="form-control" id="kode_kelas" onchange="kode_kelas_option()">
                                <option value="kosong">Kosong</option>
                                <option value="kode_baru">Buat Kode Baru</option>
                                @foreach ($kode_kelas as $kode_kelases)
                                    <option value="{{ $kode_kelases->kode_kelas }}">{{ $kode_kelases->kode_kelas }}</option>
                                @endforeach
                            </select>
                            @error('kode_kelas')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="role">Kedudukan</label>
                            <select name="role" class="form-control" id="role">
                                <option value="admin" id="admin">Admin</option>
                                <option value="guru" id="guru">Guru</option>
                                <option value="siswa" id="siswa">Siswa</option>
                            </select>
                            @error('role')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
            <div class="alert alert-warning mt-4" role="alert">
                <b class="font-italic">Password</b> yang dibuat akan disamakan dengan email secara default, user dapat
                mengubah password mereka sendiri lewat <b class="font-italic">profile</b> <br>
                contoh : <br>
                email : <b>user@mail.com</b><br>
                password : <b class="font-italic text-danger">user@mail.com</b>
            </div>
        </div>
    </div>
@endsection
