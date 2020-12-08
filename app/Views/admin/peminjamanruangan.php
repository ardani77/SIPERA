<div class="main-panel"><br>
  <div class="content">
    <!-- Card -->
      <div class="col">
        <div class="panel animated fadeIn slower">
          <div class="card">
            <div class="card-header bg-dark">
              <h3 class="card-title text-white"><i class="fas fa-retweet"></i> Data Transaksi Peminjaman Ruangan</h3>
              <!-- <button style="margin-left: 35px;" type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target=".modal-tambah-peminjaman"><i class="fas fa-plus"></i> Tambah Transaksi</button> -->
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="basic-datatables" class="display table table-striped table-hover">
                  <thead class="bg-dark text-white">
                    <tr>
                      <th>No</th>
                      <th>Nama Anggota</th>
                      <th>Ruangan</th>
                      <th>Tgl. Pinjam</th>
                      <th>Tgl. Kembali</th>
                      <th>Tgl. Dikembalikan</th>
                      <th>Status Ruangan</th>
                      <th>Status Pinjam</th>
                    </tr>
                  </thead>
                  <tbody>
                        <?php
                          $no = 1;
                          foreach ($peminjaman_r as $pr) {
                        ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $pr->nama_anggota; ?></td>
                          <td><?php echo $pr->ruangan; ?></td>
                          <td><?php echo date('d/m/Y',strtotime($pr->tgl_pinjam)); ?></td>
                          <td><?php echo date('d/m/Y',strtotime($pr->tgl_kembali)); ?></td>
                          <td>
                            <?php
                            if($pr->tgl_pengembalian =="0000-00-00"){
                              echo "-";
                            }else{
                              echo date('d/m/Y',strtotime($pr->tgl_pengembalian));
                            } ?>
                          </td>
                          <td><?php echo "Rp. ".number_format($pr->total_denda)." ,-"; ?></td>
                          <td>
                            <?php
                            if($pr->status_pengembalian == "1"){
                              echo "Kembali";
                            }else{
                              echo "Belum Kembali";
                            } ?>
                          </td>
                          <td>
                            <?php
                            if($pr->status_peminjaman == "1"){
                              echo "Selesai";
                            }else {
                              ?>
                              <a class="btn btn-sm btn-success" href="<?php echo base_url().'admin/transaksi_selesai/'.$p->id_pinjam; ?>"><span class="glyphicon glyphicon-ok"></span> Transaksi Selesai</a>
                              <br>
                              <a style="margin-top: 5px;" class="btn btn-sm btn-danger" href="<?php echo base_url().'admin/transaksi_hapus/'.$p->id_pinjam; ?>"><span class="glyphicon glyphicon-remove"></span> Batalkan Transaksi</a>
                            <?php } ?>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                  </div>
                </div>
              </div>
            </div>

<!--Bagian Footer -->
</div>
  </div>
    <footer class="footer">
      <div class="container-fluid">
        <div class="copyright ml-left">
          Copyright © 2019, made with by SIPERA
        </div>        
      </div>
    </footer>
  </div>
  </div>
<!-- Bagian Footer -->
