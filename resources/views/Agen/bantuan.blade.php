@extends('layout/agen.master_informasi')

@section('nama')
    <h4>Agen A, ini halaman Bantuan</h4>
@endsection

@section('nama1')
Hubungi No di bawah ini 
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bantuan</title>
</head>

<body>
    <h1>https://wa.me/6281388518191</h1>
</body>
</html>

@endsection