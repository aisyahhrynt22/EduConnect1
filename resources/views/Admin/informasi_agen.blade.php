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
      <th>Nama Agen</th>
      <th>Role</th>
      <th>NIK</th>
      <th>Gambar NIK</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
    </thead>

    <tbody>

    <tr>
      <td>AgenA</td>
      <td>Mahasiswa</td>
      <td>123123123123</td>
      <td><img src="{{asset('admin/dist/img/ktp_cewe.png')}}" width="150"></td>
      <td>
        {{-- <span class="btn btn-block btn-success btn-xs">Sudah Disetujui</span> --}}
        <a href="/adminedu/informasi_agen/status" class="btn btn-block btn-success btn-xs">Disetujui</a>
      </td>
      <td>
        <a href="/adminedu/informasi_agen/detail" class="btn btn-info btn-sm">Detail</a>
        <a href="/adminedu/informasi_agen" class="btn btn-danger btn-sm">Delete</a>
      </td>
    </tr>

    <tr>
      <td>AgenB</td>
      <td>Dosen</td>
      <td>123123123123</td>
      <td><img src="{{asset('admin/dist/img/ktp_cewe.png')}}" width="150"></td>
      <td>
        {{-- <span class="btn btn-block btn-warning btn-xs">Menunggu Persetujuan</span> --}}
        <a href="/adminedu/informasi_agen/status" class="btn btn-block btn-warning btn-xs">Menunggu Persetujuan</a>
      </td>
      <td>
        <a href="/adminedu/informasi_agen/detail" class="btn btn-info btn-sm">Detail</a>
        <a href="/adminedu/informasi_agen" class="btn btn-danger btn-sm">Delete</a>
      </td>
    </tr>

    <tr>
      <td>AgenC</td>
      <td>Mahasiswa</td>
      <td>123123123123</td>
      <td><img src="{{asset('admin/dist/img/ktp_cowo.jpg')}}" width="150"></td>
      <td>
        {{-- <span class="btn btn-block btn-danger btn-xs">Tidak Disetujui</span> --}}
        <a href="/adminedu/informasi_agen/status" class="btn btn-block btn-danger btn-xs">Tidak Disetujui</a>
      </td>
      <td>
        <a href="/adminedu/informasi_agen/detail" class="btn btn-info btn-sm">Detail</a>
        <a href="/adminedu/informasi_agen" class="btn btn-danger btn-sm">Delete</a>
      </td>
    </tr>

    <tr>
      <td>AgenD</td>
      <td>Mahasiswa</td>
      <td>123123123123</td>
      <td><img src="{{asset('admin/dist/img/ktp_cowo.jpg')}}" width="150"></td>
      <td>
        {{-- <span class="btn btn-block btn-danger btn-xs">Tidak Disetujui</span> --}}
        <a href="/adminedu/informasi_agen/status" class="btn btn-block btn-danger btn-xs">Tidak Disetujui</a>
      </td>
      <td>
        <a href="/adminedu/informasi_agen/detail" class="btn btn-info btn-sm">Detail</a>
        <a href="/adminedu/informasi_agen" class="btn btn-danger btn-sm">Delete</a>
      </td>
    </tr>

    <tr>
      <td>AgenE</td>
      <td>Dosen</td>
      <td>123123123123</td>
      <td><img src="{{asset('admin/dist/img/ktp_cowo.jpg')}}" width="150"></td>
      <td>
        {{-- <span class="btn btn-block btn-danger btn-xs">Tidak Disetujui</span> --}}
        <a href="/adminedu/informasi_agen/status" class="btn btn-block btn-danger btn-xs">Tidak Disetujui</a>
      </td>
      <td>
        <a href="/adminedu/informasi_agen/detail" class="btn btn-info btn-sm">Detail</a>
        <a href="/adminedu/informasi_agen" class="btn btn-danger btn-sm">Delete</a>
      </td>
    </tr>

    </tbody>

    <tfoot>
    <tr>
        <th>Nama Agen</th>
        <th>Role</th>
        <th>NIK</th>
        <th>Gambar NIK</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    </tfoot>
  </table>
@endsection
