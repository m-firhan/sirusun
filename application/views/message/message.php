

<section class="content-header">
   <h1>
      Perpesanan
   </h1>
   <ol class="breadcrumb">
      <li><a href="<?php echo base_url('/');?>"><i class="fa fa-dashboard"></i> SIRusun</a></li>
      <li class="active">Perpesanan</li>
   </ol>
</section>

<?php
  $sesi = $this->session;
  $userType = $sesi->userdata('userType');
  if ($userType == 1){ ?>
<section class="content ">
   <div class="table-responsive">
      <div class="box box-danger">
         <br>
         <div class="box-header">
            <button type="button" class="btn btn-success">Laporan</button>
         </div>
         <div class="box-body">
            <table id="example1" class="table table-bordered table-condensed">
               <thead>
                  <tr>
                     <th>No.</th>
                     <th>Tanggal</th>
                     <th>Nama</th>
                     <th>Last message</th>
                     <th>Aksi</th>
                  </tr>
               </thead>
               <tbody>
                  <?php 
                    $nomer = 0;
                    foreach ($str_response as $row) {?>
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
                  </tfoot>
            </table>
         </div>
         <!-- /.box-body -->
      </div>
   </div>
</section>

  <?php }else{ ?>
<section class="content ">
   <div class="table-responsive">
      <div class="box box-danger">
         <br>
         <div class="box-body">
            <table id="example1" class="table table-bordered table-condensed">
               <thead>
                  <tr>
                     <th>No.</th>
                     <th>Tanggal</th>
                     <th>Nama</th>
                     <th>Last message</th>
                  </tr>
               </thead>
               <tbody>
                  <?php 
                    $nomer = 0;
                    foreach ($str_response as $row) {?>
                        <tr>
                          <td><?=++$nomer;?></td>
                          <td><?=$row->tgl;?></td>
                          <td><?=$row->nama1;?></td>
                          <td><?=$row->last_message;?></td>
                        </tr><?php
                    }
                  ?>
                  </tfoot>
            </table>
         </div>
         <!-- /.box-body -->
      </div>
   </div>
</section>

<?php } ?>

