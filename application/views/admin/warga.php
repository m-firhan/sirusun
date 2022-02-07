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
                                                <a href="<?php echo site_url('warga/edit/'.$row->id_user); ?>" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editWarga"><i class="fa fa-edit"></i></a>
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
                        <form action="<?=base_url('user/tambah_warga');?>" method="POST">
                            <div class="form-group">
                                <label for="nama">No Pokok</label>
                                <input name="no_pokok" type="text" class="form-control" id="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" required>
                            </div>
                            <div class="form-group">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="alamat" name="tgl_lahir" required>
                            </div>
                            <div class="form-group">
                                <label for="jenisKelamin">jenis kelamin</label>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="r_jk" id="exampleRadios1" value="laki-laki" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r_jk" id="exampleRadios2" value="perempuan">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="no_hp">Nomor HP</label>
                                <input type="number" class="form-control" name="no_hp" id="no_hp">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email">
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
                    <form action="" method="POST">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" value="" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" value="" name="alamat" required>
                            </div>
                            <div class="form-group">
                                <label for="jenisKelamin">jenis kelamin</label>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="no_hp">Nomor HP</label>
                                <input type="number" class="form-control" id="no_hp" name="no_hp" value="">
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
          
