<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header text-center">
                        <h4 class="title">Data Berita</h4>
                    </div>
                    <hr>
                    <div class="content">
                        <h3>Update Data</h3>
                        <br>
                        <form class="form" action="<?php echo base_url('admin/up_berita/'.$query['id_berita']);?>" method="POST">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" class="form-control" name="judul" required="true" value="<?php echo $query['judul'];?>">
                            </div>
                            <div class="form-group">
                                <label>Artikel</label>
                                <textarea name="artikel" class="form-control"><?php echo $query['artikel'];?></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
