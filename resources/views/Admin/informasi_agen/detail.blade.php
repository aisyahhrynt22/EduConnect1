@extends('layout/admin.master_tabel')

@section('nama')
    {{-- <h4>hi, Admin {{ Auth::user()->name }}</h4> --}}
    <h4>Hai, Admin A</h4>
@endsection

@section('nama1')
Biodata Agen A
@endsection

@section('konten1')
<div class="card-body">
    <div class="tab-content">
      <div class="active tab-pane" id="settings">
        <form class="form-horizontal">


          <div class="form-group row">
            <label for="inputName" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
              <p class="text-muted">
                Azzam12
              </p>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputName" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <p class="text-muted">
                123123123
              </p>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputName" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
              <p class="text-muted">
                Jakarta Timur, Indonesia
              </p>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputName" class="col-sm-2 col-form-label">Nama Depan</label>
            <div class="col-sm-10">
              <p class="text-muted">
                  Muhammad Mubarok
              </p>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputEmail" class="col-sm-2 col-form-label">Nama Belakang</label>
            <div class="col-sm-10">
              <p class="text-muted">
                  Azzam
              </p>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputName2" class="col-sm-2 col-form-label">NIK</label>
            <div class="col-sm-10">
              <p class="text-muted">
                  3192939102313
              </p>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputName2" class="col-sm-2 col-form-label">No.Rek</label>
            <div class="col-sm-10">
              <p class="text-muted">
                  7171-7171-7171
              </p>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputExperience" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <p class="text-muted">
                  mmazzam34@gmail.com
              </p>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputSkills" class="col-sm-2 col-form-label">Phone Number</label>
            <div class="col-sm-10">
              <p class="text-muted">
                  089627929495
              </p>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputSkills" class="col-sm-2 col-form-label">Sebagai</label>
            <div class="col-sm-10">
              <p class="text-muted">
                  Mahasiswa
              </p>
            </div>
          </div>

            <div class="form-group row">
              <label for="inputExperience" class="col-sm-2 col-form-label">Gambar NIK</label>
              <div class="col-sm-10">
                  <div class="col-sm-6">
                      <img class="img-fluid" src="{{asset('admin/dist/img/ktp_cowo.jpg')}}" alt="Photo">
                  </div>
              </div>
            </div>
@endsection
