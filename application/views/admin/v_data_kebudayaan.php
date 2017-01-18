<div class="content">
  <div class="container-fluid">
    <div class="row centered">
      <div class="col-md-8 col-md-offset-2 tombol">
        <ul class="nav">
          <li>
            <a href="<?php echo base_url('admin/in_kebudayaan'); ?>" class="btn btn-primary">
              <h4><i class="pe-7s-plus"></i> Tambah data kebudayaan</h4>
            </a>
          </li>
        </ul>
      </div>
      <div class="col-md-12">
        <div class="card">
          <table class="table table-inverse">
            <thead>
              <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Isi</th>
                <th>Katagori</th>
                <th>Gambar</th>
                <th>Waktu</th>
                <th>Options</th>
              </tr>
            </thead>
            <tbody>
              <?php
    $no=1;
    foreach ($query as $row){
    ?>
              <tr>
                <th>
                  <?php echo $no++;?>
                </th>
                <td>
                  <?php echo $row->nama;?>
                </td>
                <td>
                  <?php echo $row->isi;?>
                </td>
                <td>
                  <?php echo $row->katagori;?>
                </td>
                <td>
                  <?php echo $row->gambar;?>
                </td>
                <td>
                  <?php echo $row->waktu;?>
                </td>
                <td>
                  <ul style="list-style:none;">
                    <li>
                      <?php echo anchor('admin/up_kebudayaan/'.$row->id, '<div class="btn btn-lg btn-warning tombi"><i class="pe-7s-refresh"></i></div>');?>
                    </li>
                    <li>
                      <?php echo anchor('admin/del_kebudayaan/'.$row->id, '<div class="btn btn-lg btn-danger tombi"><i class="pe-7s-less "></i></div>');?>
                    </li>
                  </ul>
                </td>
              </tr>
            </tbody>
            <?php } ?>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
