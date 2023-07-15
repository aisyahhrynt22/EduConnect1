@extends('layout/admin.master_tabel')

@section('nama')
    {{-- <h4>hi, Admin {{ Auth::user()->name }}</h4> --}}
    <h4>Halo, Admin A</h4>
@endsection

@section('nama1')
Informasi NIK dari Agen A
@endsection

@section('konten1')

<img src="{{asset('admin/dist/img/ktp_cowo.jpg')}}" width="500">

<h4> NIK yang tertulis                      = 01231230123012 </h4> </br>
<h4> NIK yang tercatat di Database          = 0 </h4> </br>

<p>Status?</p>
<input type="radio" name="gender" value="0"> Disetujui <br>
<input type="radio" name="gender" value="1"> Menunggu Persetujuan <br>
<input type="radio" name="gender" value="2"> Tidak Disetujui <br>
</br>
<a href="/adminedu/informasi_agen" class="btn btn-success btn-sm">Simpan</a>

@endsection
