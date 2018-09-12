 <div class="content">            
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                              
                                    <div class="panel-body">

                                    <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true"  data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                            
                                    <a class="alert alert-primary"  href="<?php echo base_url()."index.php/admin/add_teacher/" ?>">add teacher</a>

                                    <thead>
                                    <tr>
                                    
                                    <th data-sortable="true"  width="80">Nip</th>
                                    <th data-sortable="true"  width="150">Nama Guru</th>
                                    <th data-sortable="true"  width="100">Alamat</th>
                                    <th data-sortable="true"  width="70">Action</th>
                                    </tr>
                                    </thead>
                                        <?php foreach ($db_guru as $data) { ?>
                                            <tr>
                                            
                                            <td><?php echo $data['nip']; ?></td>
                                            <td><?php echo $data['nama']; ?></td>
                                            <td><?php echo $data['alamat']; ?></td>
                                            <td>
                                              <a class="alert alert-info" href="#">view</a> -
                                              <a class="alert alert-success" href="<?php echo base_url()."index.php/admin/edit_teacher/".$data['nip']; ?>">edit</a> -
                                              <a class="alert alert-danger" href="<?php echo base_url()."index.php/admin/delete_teacher/".$data['nip']; ?>">delete</a>
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


