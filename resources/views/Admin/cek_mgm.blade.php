@extends('layout/admin.master_tabel')

@section('nama')
    {{-- <h4>hi, Admin {{ Auth::user()->name }}</h4> --}}
    <h4>Hai, Admin A</h4>
@endsection

@section('nama1')
Cek Penggunaan Kode Agen
@endsection

@push('script')
<script src="{{asset('admin/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endpush

@push('style')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bst4/dt-1.11.3/datatables.min.css"/>
@endpush

@section('konten1')
<table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th>Nama Calon Mahasiswa</th>
      <th>Pilihan Prodi</th>
      <th>Jalur Masuk</th>
      <th>Kode MGM</th>
      <th>Nama Agen</th>
      <th>Tanggal Menggunakan Kode</th>
    </tr>
    </thead>

    <tbody>
    <tr>
      <td>Nuti</td>
      <td>Informatika</td>
      <td>Reguler</td>
      <td>A123</td>
      <td>Agen A</td>
      <td> 7/11/2023</td>
    </tr>
    <tr>
      <td>Aisyah</td>
      <td>Informatika</td>
      <td>Reguler</td>
      <td>A123</td>
      <td>Agen A</td>
      <td>2/1/2023</td>
    </tr>
    <tr>
      <td>Haikal</td>
      <td>Informatika</td>
      <td>Reguler</td>
      <td>A123</td>
      <td>Agen A</td>
      <td>2/2/2023</td>
    </tr>
    <tr>
      <td>Idam</td>
      <td>Informatika</td>
      <td>Karyawan</td>
      <td>A123</td>
      <td>Agen A</td>
      <td>4/6/2023</td>
    </tr>
    <tr>
      <td>Azzam</td>
      <td>Informatika</td>
      <td>Karyawan</td>
      <td>A123</td>
      <td>Agen A</td>
      <td>9/8/2023</td>
    </tr>
    </tbody>

    <tfoot>
    <tr>
        <th>Nama Calon Mahasiswa</th>
        <th>Pilihan Prodi</th>
        <th>Jalur Masuk</th>
        <th>Kode MGM</th>
        <th>Nama Agen</th>
        <th>Tanggal Menggunakan Kode</th>
    </tr>
    </tfoot>
  </table>
@endsection
