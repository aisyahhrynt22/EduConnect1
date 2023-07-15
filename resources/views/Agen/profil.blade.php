@extends('layout/agen.master_profile')

@section('nama')
    <h4>Profile Agen A</h4>
@endsection

@section('konten')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">

      <!-- Profile Image -->
      <div class="card card-primary card-outline">
        <div class="card-body box-profile">
          <div class="text-center">
            <img class="profile-user-img img-fluid img-circle"
                 src="{{asset('admin/dist/img/user2-160x160.jpg')}}"
                 alt="User profile picture">
          </div>

          <h3 class="profile-username text-center">Muhammad M. Azzam</h3>

          <p class="text-muted text-center">Mahasiswa</p>

        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

      <!-- About Me Box -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Tentang saya</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <strong><i class="fas fa-book mr-1"></i> User</strong>

          <p class="text-muted">
            Username : Azzam12</br>Password : 123123123
          </p>

          <hr>

          <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

          <p class="text-muted">Jakarta Timur, Indonesia</p>

    
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>


    <!-- /.col -->
    <div class="col-md-9">
      <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Biodata saya</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="tab-content">
            <div class="active tab-pane" id="settings">
              <form class="form-horizontal">

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

              </form>
            </div>
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->
        </div><!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</div><!-- /.container-fluid -->
@endsection
