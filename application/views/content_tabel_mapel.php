 <div class="content">            
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                              
                                    <div class="panel-body">

                                    <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true"  data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                            
                                    <a class="alert alert-primary"  href="<?php echo base_url()."index.php/admin/add_mapel/" ?>">add mapel</a>

                                    <thead>
                                    <tr>
                                        <th data-sortable="true"  width="100">kode mapel</th>
                                        <th data-sortable="true"  width="100">Nama mapel</th>
                                        <th data-sortable="true"  width="100">Rungan</th>
                                        <th data-sortable="true"  width="100">Waktu</th>
                                        <th data-sortable="true"  width="100">Guru</th>
                                        <th data-sortable="true"  width="100">Action</th>
                                    </tr>
                                    </thead>
                                        <?php foreach ($db_mapel as $data) { ?>
                                            <tr>
                                            <td><?php echo $data['kd_mapel']; ?></td>
                                            <td><?php echo $data['nm_mapel']; ?></td>
                                            <td><?php echo $data['ruangan']; ?></td>
                                            <td><?php echo $data['hari']; ?> </td>
                                            <td><?php echo $data['guru']; ?></td>
                                            <td>
                                              <a class="alert alert-success" href="<?php echo base_url()."index.php/admin/edit_mapel/".$data['kd_mapel']; ?>">edit</a> -
                                              <a class="alert alert-danger" href="<?php echo base_url()."index.php/admin/delete_mapel/".$data['kd_mapel']; ?>">delete</a>
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


