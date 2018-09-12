 <div class="content">
                <div class="container-fluid">
                    <!-- <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Striped Table with Hover</h4>
                                    <p class="card-category">Here is a subtitle for this table</p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Salary</th>
                                            <th>Country</th>
                                            <th>City</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Dakota Rice</td>
                                                <td>$36,738</td>
                                                <td>Niger</td>
                                                <td>Oud-Turnhout</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Minerva Hooper</td>
                                                <td>$23,789</td>
                                                <td>Curaçao</td>
                                                <td>Sinaai-Waas</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Sage Rodriguez</td>
                                                <td>$56,142</td>
                                                <td>Netherlands</td>
                                                <td>Baileux</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Philip Chaney</td>
                                                <td>$38,735</td>
                                                <td>Korea, South</td>
                                                <td>Overland Park</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Doris Greene</td>
                                                <td>$63,542</td>
                                                <td>Malawi</td>
                                                <td>Feldkirchen in Kärnten</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Mason Porter</td>
                                                <td>$78,615</td>
                                                <td>Chile</td>
                                                <td>Gloucester</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> -->
                        
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                              
                                    <div class="panel-body">

                                    <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true"  data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                            
                                    <a class="alert alert-primary"  href="<?php echo base_url()."index.php/admin/add_student/" ?>">add student</a>

                                    <thead>
                                    <tr>
                                    
                                    <th data-sortable="true"  width="80">Nisn</th>
                                    <th data-sortable="true"  width="150">Nama</th>
                                    <th data-sortable="true"  width="100">Kelas</th>
                                    <th data-sortable="true"  width="70">Action</th>
                                    </tr>
                                    </thead>
                                        <?php foreach ($db_siswa as $data) { ?>
                                            <tr>
                                            
                                            <td><?php echo $data['nis']; ?></td>
                                            <td><?php echo $data['nama']; ?></td>
                                            <td><?php echo $data['kelas']; ?></td>
                                            <td>
                                              <a class="alert alert-info" href="#">view</a> -
                                              <a class="alert alert-success" href="<?php echo base_url()."index.php/admin/edit_student/".$data['nis']; ?>">edit</a> -
                                              <a class="alert alert-danger" href="<?php echo base_url()."index.php/admin/delete_student/".$data['nis']; ?>">delete</a>
                                            </td>
                                            </tr>
                                        <?php } ?>
                                    </table>
                                    </div>
                                
                            </div>
                        </div>
                    </div><!--/.row-->  
                
                    </div>
                </div>
            </div>


