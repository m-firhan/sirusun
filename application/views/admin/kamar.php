<?php

    if (isset($_POST['submit'])){
        
    }

?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Table Kamar</h6>
                        </div>
                        <div class="card-body">
                         <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahKamar">Tambah Kamar</button>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>No. Ruangan</th>
                                            <th>Lantai</th>
                                            <th>Fasilitas</th>
                                            <th>Harga</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $nomor = 0;
                                        foreach ($data as $row) {
                                        ?>

                                            <tr>
                                                <td><?=++$nomor;?></td>
                                                <td><?=$row->no_ruangan;?></td>
                                                <td><?=$row->lantai;?></td>
                                                <td><?=$row->fasilitas;?></td>
                                                <td><?="Rp. ".$row->harga;?></td>
                                                <td>
                                                <span class="label <?php
                                                                        if ($row->status == 1) {
                                                                            $str_status = "Kosong"; 
                                                                            echo "badge badge-success";
                                                                        }
                                                                        if ($row->status == 2) {
                                                                            $str_status = "Terisi 1";
                                                                            echo "badge badge-primary";
                                                                        }
                                                                        if ($row->status == 3) {
                                                                            $str_status = "Penuh";
                                                                            echo "badge badge-danger";
                                                                        }
                                                                        if ($row->status == 4){
                                                                            $str_status = "Dalam Perbaikan";
                                                                            echo "badge badge-warning";
                                                                        } 
                                                                        ?>"
                                                                        ><?=$str_status?></span>
                                                </td>
                                                <td>
                                                    <a href="#" class="badge badge-success"data-toggle="modal" data-target="#editKamar">Edit</a>
                                                    <a href="#" class="badge badge-danger" onclick="return confirm('Yakin mau dihapus!')">Hapus</a>
                                                <!-- <a href="<?php echo site_url('kamar/edit/').$row->id_kamar; ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> </a>
                                                <a href="#" name="" onclick="deleteConfirm('<?php echo site_url('kamar/delete/'.$row->id_kamar); ?>')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a> -->
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
           <div class="modal fade" id="tambahKamar" tabindex="-1" aria-labelledby="tambahKamarLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahKamarLabel">Form Tambah Kamar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo site_url('kamar/tambah_kamar')?>" method="POST">
                            <div class="form-group">
                                    <label for="noRuangan">No Ruangan</label>
                                    <input type="text" class="form-control" id="noRuangan" name="no_ruangan" required>
                                </div>
                                <div class="form-group">
                                    <label for="lantai">Lantai</label>
                                    <input type="number" class="form-control" id="lantai" name="lantai" required>
                                </div>
                                <div class="form-group">
                                    <label for="fasilitas">fasilitas</label>
                                    <input type="text" class="form-control" id="fasilitas" name="fasilitas" required>
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="number" class="form-control" id="harga" name="harga" required>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                        <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Kosong
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Terisi 1
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="3">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Penuh
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="4">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Dalam Perawatan
                                        </label>
                                    </div>
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
            <div class="modal fade" id="editKamar" tabindex="-1" aria-labelledby="editKamarLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editKamarLabel">Form Edit Kamar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="noRuangan">No Ruangan</label>
                                    <input type="text" class="form-control" id="noRuangan" name="noRuangan" value="">
                            </div>
                                    <div class="form-group">
                                        <label for="lantai">Lantai</label>
                                        <input type="number" class="form-control" id="lantai" name="lantai" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="fasilitas">fasilitas</label>
                                        <input type="text" class="form-control" id="fasilitas" name="fasilitas" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="harga">Harga</label>
                                        <input type="number" class="form-control" id="harga" name="harga" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                            <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Penuh
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Terisi 1
                                            </label>
                                        </div>
                                    </div>
                                  </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                                <button type="button" class="btn btn-primary">Edit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- akhir modal edit -->