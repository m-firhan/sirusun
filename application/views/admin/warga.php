
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Warga</h6>
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahWarga">Tambah Warga</button>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Jenis Kelamin</th>
                                            <th>no_hp</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $nomer = 0;
                                        foreach ($data as $row) {?>
                                        <tr>
                                            <td><?=++$nomer?></td>
                                            <td><?=$row->nama;?></td>
                                            <td><?=$row->alamat;?></td>
                                            <td><?=$row->jk;?></td>
                                            <td><?=$row->no_hp;?></td>
                                            <td style="text-align: center;">
                                                <a href="<?php echo site_url('warga/edit/'.$row->id_user); ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                                <a href="#" name="" onclick="deleteConfirm('<?php echo site_url('user/delete/'.$row->id_user); ?>')"  class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a>
                                            </td>
                                        </tr>
                                        <?php
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
            <div class="modal fade" id="tambahWarga" tabindex="-1" aria-labelledby="tambahWargaLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahWargaLabel">Form Tambah Warga</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                        <button type="button" class="btn btn-primary">Tambah</button>
                    </div>
                    </div>
                </div>
            </div>
            <!-- akhir modal tambah -->

            <!-- modal edit -->
            <div class="modal fade" id="editWarga" tabindex="-1" aria-labelledby="editWargaLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editWargaLabel">Form Edit Warga</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                        <button type="button" class="btn btn-primary">Edit</button>
                    </div>
                    </div>
                </div>
            </div>
            <!-- akhir modal edit -->
          
