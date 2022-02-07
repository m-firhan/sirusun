  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Setting</h6>
    </div>
    <div class="card-body">
      <button type="button" class="btn btn-success mb-3">Laporan</button>
      <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahSetting">Tambah Setting</button>
      <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama Setting</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Lorem ipsum dolor sit amet.</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, totam.</td>
                        <td class="p-2">
                          <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editSetting"><i class="fa fa-edit"></i> </a>
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
  <div class="modal fade" id="tambahSetting" tabindex="-1" aria-labelledby="tambahSettingLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahSettingLabel">Form Tambah Setting</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="namaSetting">Nama Setting</label>
                                <input type="text" class="form-control" id="namaSetting">
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <input type="text" class="form-control" id="keterangan">
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

  <!-- modal edit -->
  <div class="modal fade" id="editSetting" tabindex="-1" aria-labelledby="editSettingLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editSettingLabel">Form Edit Setting</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="namaSetting">Nama Setting</label>
                                <input type="text" class="form-control" id="namaSetting" name="namaSetting" value="">
                            </div>
                            <div class="form-group">
                                <label for="Keterangan">Keterangan</label>
                                <input type="text" class="form-control" id="Keterangan" name="Keterangan" value="">
                            </div>
                        </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
            <!-- akhir modal edit -->
