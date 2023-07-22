@extends('layout/admin.master_tabel')

@section('nama')
    {{-- <h4>hi, Admin {{ Auth::user()->name }}</h4> --}}
    <h4>Selamat Datang, Admin A</h4>
@endsection

@section('nama1')
Tabel Database Agen
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
      <th>Nama Agen</th>
      <th>Role</th>
      <th>Kode MGM</th>
      <th>Sudah Daftar</th>
      {{-- <th>Reward</th> --}}
      {{-- <th>Jumlah Pengunjung</th> --}}
    </tr>
    </thead>

    <tbody>
    <tr>
      <td>Agen A</td>
      <td>Mahasiswa</td>
      <td>A123</td>
      <td>54</td>
      {{-- <td>50000</td>
      <td> 34234142</td> --}}
    </tr>
    <tr>
      <td>Agen B</td>
      <td>Dosen</td>
      <td>B123</td>
      <td>44</td>
      {{-- <td>50000</td>
      <td>1234143234</td> --}}
    </tr>
    <tr>
      <td>Agen C</td>
      <td>Mahasiswa</td>
      <td>C123</td>
      <td>53</td>
      {{-- <td>100000</td>
      <td>12342341</td> --}}
    </tr>
    <tr>
      <td>Agen D</td>
      <td>Mahasiswa</td>
      <td>D123</td>
      <td>41</td>
      {{-- <td>50000</td>
      <td>124413424</td> --}}
    </tr>
    <tr>
      <td>Agen E</td>
      <td>Dosen</td>
      <td>E123</td>
      <td>31</td>
      {{-- <td>150000</td>
      <td>43241234</td> --}}
    </tr>
    </tbody>

    <tfoot>
    <tr>
        <th>Nama Agen</th>
        <th>Role</th>
        <th>Kode MGM</th>
        <th>Sudah Daftar</th>
        {{-- <th>Reward</th> --}}
        {{-- <th>Jumlah Pengunjung</th> --}}
    </tr>
    </tfoot>
  </table>
@endsection
