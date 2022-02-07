  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Informasi</h6>
    </div>
    <div class="card-body">
      <button type="button" class="btn btn-success mb-3">Laporan</button>
      <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahInformasi">Tambah Informasi</button>
      <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>Id user</th>
                        <th>Tanggal</th>
                        <th>Judul</th>
                        <th>Konten</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>C001</td>
                        <td>04 januari 2020</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, dolor!</td>
                        <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit..</td>
                        <td class="text-center p-2">
                          <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('yakin mau dihapus?')"><i class="fa fa-trash"></i> </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

  <!-- modal tambah -->
  <div class="modal fade" id="tambahInformasi" tabindex="-1" aria-labelledby="tambahInformasiLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahInformasiLabel">Form Tambah Informasi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="id_user">Id User</label>
                                <input type="text" class="form-control" id="id_user">
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Judul</span>
                                </div>
                                <textarea class="form-control" aria-label="With textarea"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal">
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Konten</span>
                                </div>
                                <textarea class="form-control" aria-label="With textarea"></textarea>
                            </div>
                        </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
            <!-- akhir modal tambah -->

 