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
                        <h3>Tambah Data</h3>
                        <br>
                        <form class="form" action="<?php echo base_url('admin/in_kebudayaan');?>" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Nama</label><input type="text" class="form-control" name="nama" required="true">
                            </div>
                            <div class="form-group">
                                <label>Isi</label><textarea name="isi" class="form-control"></textarea>
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
                                <label>Nama gambar</label><input type="file" name="filefoto" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
