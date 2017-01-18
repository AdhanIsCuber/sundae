<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header text-center">
                        <h4 class="title">Data kebudayaan</h4>
                    </div>
                    <hr>
                    <div class="content">
                        <h3>Update Data</h3>
                        <br>
                        <form class="form" action="<?php echo base_url('admin/up_kebudayaan/'.$query['id']);?>" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Nama</label><input type="text" class="form-control" name="nama" required="true" value="<?php echo $query['nama'];?>">
                            </div>
                            <div class="form-group">
                                <label>Isi</label><textarea name="isi" class="form-control"><?php echo $query['isi'];?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="sel1">Katagori</label>
                                <select class="form-control" name="katagori" id="sel1">
                                    <option value="kesenian">Kesenian</option>
                                    <option value="kuliner">Kuliner</option>
                                    <option value="musik">Musik</option>
                                    <option value="tarian">Tarian</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nama gambar</label><input type="file" class="form-control" name="filefoto" required="true">
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
