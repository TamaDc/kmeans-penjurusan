     <?php foreach ($db_siswa as $data) {
      
    } ?>  

    <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Registerasi Siswa</h4>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Foto</label>
                                                    <input type="file" name="pick" class="form-control" placeholder="" value="">
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Nomor Induk Siswa</label>
                                                    <input type="text" name="nis" class="form-control" placeholder="" value="<?php echo $data['nis']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label>Nama Siswa</label>
                                                    <input type="text" name="nama" class="form-control"  value="<?php echo $data['nama']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                             <div class="col-md-4 pr-1">
                                                <div class="form-group">
                                                    <label>jenis kelamin</label>
                                                    <input type="text" name="jenis_kelaim" class="form-control" placeholder="" value="<?php echo $data['jenis_kelamin']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4 pr-1">
                                                <div class="form-group">
                                                    <label>tempat lahir</label>
                                                    <input type="text" name="tanggal_lahir" class="form-control" placeholder="Company" value="<?php echo $data['tempat_lahir']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label>kelas</label>
                                                    <input type="text" name="kelas" class="form-control"  value="<?php echo $data['kelas']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Alamat</label>
                                                    <input type="text" name="alamat" class="form-control" placeholder="" value="<?php echo $data['alamat']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-info btn-fill pull-right">Simpan</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>