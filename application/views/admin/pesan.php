  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabel Pesan</h6>
    </div>
    <div class="card-body">
        <button type="button" class="btn btn-success mb-3">Laporan</button>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>ID User</th>
                        <th>Tanggal Pengiriman</th>
                        <th>Isi Pesan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $nomer = 0;
                        foreach ($data as $row) {?>
                            <tr>
                            <td><?=++$nomer;?></td>
                            <td><?=$row->tgl;?></td>
                            <td><?=$row->nama1;?></td>
                            <td><?=$row->last_message;?></td>
                            <td style="text-align: center;">
                                <a href="<?php echo site_url('message/message_detail/1')?>" class="btn btn-sm btn-primary"><i class="fa fa-comments"></i> </a>
                                <a name="" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a>
                            </td>
                            </tr><?php
                        }
                    ?>
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
  <div class="modal fade" id="tambahPesan" tabindex="-1" aria-labelledby="tambahPesanLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahPesanLabel">Form Tambah Pesan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="id_user">ID User</label>
                                <input type="date" class="form-control" id="id_user" name="id_user">
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal Pengiriman</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal">
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Isi Pesan</span>
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