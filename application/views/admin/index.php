<div class="container">
  <div class="card shadow-sm">
    <div class="row p-4">
      <div class="col-12 col-lg-4 p-2">
        <div class="card text-white bg-info shadow-sm">
          <div class="card-body text-center">
            <h5 class="card-title display-4 font-weight-bold">2</h5>
            <h3 class="card-text font-weight-bold">WARGA</h3>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4 p-2">
        <div class="card text-white bg-danger shadow-sm">
          <div class="card-body text-center">
            <h5 class="card-title display-4 font-weight-bold">2</h5>
            <h3 class="card-text font-weight-bold">KAMAR</h3>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4 p-2">
        <div class="card text-white bg-warning shadow-sm">
          <div class="card-body text-center">
            <h5 class="card-title display-4 font-weight-bold">3</h5>
            <h3 class="card-text font-weight-bold">INFORMASI</h3>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4 p-2">
        <div class="card text-white bg-info shadow-sm">
          <div class="card-body text-center">
            <h5 class="card-title display-4 font-weight-bold">1</h5>
            <h3 class="card-text font-weight-bold">ADMIN</h3>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4 p-2">
        <div class="card text-white bg-danger shadow-sm">
          <div class="card-body text-center">
            <h5 class="card-title display-4 font-weight-bold">28</h5>
            <h3 class="card-text font-weight-bold">JADWAL</h3>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4 p-2">
        <div class="card text-white bg-warning shadow-sm">
          <div class="card-body text-center">
            <h5 class="card-title display-4 font-weight-bold">7</h5>
            <h3 class="card-text font-weight-bold">PESAN</h3>
          </div>
        </div>
      </div>
    </div>
  </div>

 <!-- informasi -->
<div class="card mt-3 shadow-sm">
      <div class="card-header">
        Informasi
      </div>
      <?php
        foreach ($str_response as $data) { ?>
        <div>
          <div class="row no-gutters">
            <div class="col-md-1 pl-3 mt-3">
              <img src="<?=base_url('assets/dist/img/').$data->profile_pic;?>" alt="User Image" class="img-fluid img-thumbnail rounded-circle" onerror="this.onerror=null; this.src='<?=base_url('assets/img/default.jpg');?>'">
      <div class="row no-gutters">
        <div class="col-md-1 px-3 mt-3">
          <img src="<?= base_url('assets/img/default.jpg'); ?>" class="img-fluid img-thumbnail rounded-circle">
        </div>
          <div class="col-md-8">
            <div class="card-body">
              <span class="font-weight-bold">SIRusun</span>
              <div class="small text-gray-500">12 Januari 2022 | 20.00</div>
            </div>
              <div class="col-md-8">
                <div class="card-body">
                  <span class="font-weight-bold"><?=$data->nama;?></span>
                  <div class="small text-gray-500"><?=$data->tgl;?></div>
                </div>
              </div>
          </div>
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Pengumuman !</h5>
            <p class="card-text"><?=$data->konten;?></p>
          </div>
        </div>
      <?php } ?>  
    </div>
</div>
     
   