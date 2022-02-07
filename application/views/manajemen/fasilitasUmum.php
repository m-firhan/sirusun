  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Fasilitas Umum</h6>
    </div>
    <div class="card-body">
      <button type="button" class="btn btn-success mb-3">Laporan</button>
      <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahFasilitas">Tambah Fasilitas</button>
      <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>Fasilitas</th>
                        <th>Jumlah</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td>1</td>
                        <td>AC</td>
                        <td>4 buah</td>
                        <td style="text-align: center;">
                          <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editFasilitas"><i class="fa fa-edit"></i> </a>
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
  <div class="modal fade" id="tambahFasilitas" tabindex="-1" aria-labelledby="tambahFasilitasLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahFasilitasLabel">Form Tambah Fasilitas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="nama">Fasilitas</label>
                                <input type="text" class="form-control" id="nama">
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Jumlah</label>
                                <input type="text" class="form-control" id="jumlah">
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
  <div class="modal fade" id="editFasilitas" tabindex="-1" aria-labelledby="editFasilitasLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editFasilitasLabel">Form Edit Fasilitas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="fasilitas">Fasilitas</label>
                                <input type="text" class="form-control" id="fasilitas" name="fasilitas" value="">
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Jumlah</label>
                                <input type="text" class="form-control" id="jumlah" name="jumlah" value="">
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
