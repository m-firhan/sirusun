<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-6 col-12">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                  <div class="col-lg-12 mx-auto">
                      <div class="p-5">
                          <div class="text-center">
                              <h1 class="h4 text-gray-900 mb-4">Membuat Akun Baru</h1>
                          </div>
                          <form class="user">
                              <div class="form-group">
                                  <input type="text" class="form-control form-control-user" id="namaLengkap"
                                      placeholder="nama lengkap">
                              </div>
                              <div class="form-group">
                                  <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                      placeholder="Email Address">
                              </div>
                              <div class="form-group row">
                                  <div class="col-sm-6 mb-3 mb-sm-0">
                                      <input type="password" class="form-control form-control-user"
                                          id="exampleInputPassword" placeholder="Password">
                                  </div>
                                  <div class="col-sm-6">
                                      <input type="password" class="form-control form-control-user"
                                          id="exampleRepeatPassword" placeholder="Repeat Password">
                                  </div>
                              </div>
                              <a href="login.html" class="btn btn-primary btn-user btn-block">
                                  Registrasi Akun
                              </a>
                              <hr>
                          </form>
                          <hr>
                          <div class="text-center">
                              <a class="small" href="#">Forgot Password?</a>
                          </div>
                          <div class="text-center">
                              <a class="small" href="<?= base_url('auth/index'); ?>">Apakah sudah membuat akun? LOGIN!</a>
                          </div>
                      </div>
                  </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
