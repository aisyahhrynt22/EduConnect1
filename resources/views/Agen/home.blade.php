@extends('layout/agen.master_home')

@section('nama')
    <h4>hi, Agen A</h4>
@endsection

@section('nama1')
Gunakan link di bawah ini untuk promosi lebih banyak
@endsection

@section('jumlah_pengguna_kode')
<div class="info-box-content">
    <span class="info-box-text">Jumlah Pengguna Kode</span>
    <span class="info-box-number">(Coming Soon)</span>
</div>
@endsection

@section('sudah_daftar')
<div class="info-box-content">
    <span class="info-box-text">Sudah daftar</span>
    <span class="info-box-number">410</span>
  </div>
@endsection

@section('reward')
<div class="info-box-content">
    <span class="info-box-text">Reward</span>
    <span class="info-box-number">(Coming Soon)</span>
  </div>
@endsection

@section('jumlah_pengunjung')
<div class="info-box-content">
    <span class="info-box-text">Jumlah Pengunjung</span>
    <span class="info-box-number">(Coming Soon)</span>
  </div>
@endsection

@section('konten1')
{{-- <h4> Link           = https://penerimaan.uai.ac.id/{{ Auth::user()->name }}{{ Auth::user()->id }} </h4> </br> --}}
<h4> Link           = https://penerimaan.uai.ac.id/ </h4> </br>

{{-- <h4> Kode Referral  = {{ Auth::user()->name }}{{ Auth::user()->id }} </h4> --}}
<h4> Kode Referral  = AgenA001 </h4>
@endsection


