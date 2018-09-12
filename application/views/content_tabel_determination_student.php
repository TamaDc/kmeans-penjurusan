 <style type="text/css">
.form-controls {
  width: 12%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
       -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
          transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}

.form-controlss {
  width: 15%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
       -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
          transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}

.form-controlss{
    border: 1px solid #2974ce;
    box-shadow: none;
}


.form-controls {
    border: 1px solid #2974ce;
    box-shadow: none;
}

</style>

 <div class="content">
                       
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                              
                                    <div class="panel-body">

                                    <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true"  data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                        
                                    <thead>
                                    <tr>
                                    <th data-sortable="true"  width="80px">Nisn</th>
                                    <!-- <th data-sortable="true"  width="150">Nama</th> -->
                                    <th data-sortable="true"  width="150px">Indonesia</th>
                                    <th data-sortable="true"  width="150px">Inggris</th>
                                    <th data-sortable="true"  width="150px">Matematika</th>
                                    <th data-sortable="true"  width="150px">Ipa</th>
                                    </tr>
                                    </thead>
                                        <?php foreach ($db_nilai as $data) { ?>
                                            <tr>
                                            
                                            <td><?php echo $data['nis']; ?></td>
                                            <!-- <td><?php echo $data1['nama']; ?></td> -->
                                            <td><?php echo $data['ind']; ?></td>
                                             <td><?php echo $data['ing']; ?></td>
                                              <td><?php echo $data['mtk']; ?></td>
                                               <td><?php echo $data['ipa']; ?></td>
                                          
                                            </tr>
                                        
                                        <?php } ?>
                                        
                                    </table>
                                    </div>
                                
                            </div>
                        </div>
                    </div><!--/.row-->  
                

                    </div>
                     <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                              
                                    <div class="panel-body">

                                    <table border="0" data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true"  data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                                     <form class="form-horizontal"  target="_blank" role="form" method="POST" action="<?php echo base_url()."index.php/admin/kmeans";?>">
                                    <thead>
                                    <tr>
                                        <h3>Determinatioan of majors (K-means)</h3>
                                        <br>
                                    </tr>
                                    </thead>
                                    <tr>
                                        <td width="150px">
                                        <h4>Cluster 1</h4></td>
                                        <td align="center">
                                           
                                            <input type="text"  class="form-controlss" id="c1a" name="c1a" placeholder="Indonesia" > - 
                                            <input type="text"  class="form-controlss" id="c1b" name="c1b" placeholder="Inggris" > -
                                            <input type="text"  class="form-controlss" id="c1c" name="c1c" placeholder="Matematika" > -
                                            <input type="text"  class="form-controlss" id="c1d" name="c1d" placeholder="Ipa" > 
                                        </td>
                                        </td>
                                        <td rowspan="3" width="250px" align="center">
                                            <input id="submit" name="btnSubmit" type="submit" value="Klasifiksi" class="alert alert-primary">
                                    </tr>
                                    <tr>
                                        <td>
                                        <h4>Cluster 2</h4>
                                        </td>
                                        <td align="center">
                                            <input type="text"  class="form-controlss" id="c2a" name="c2a" placeholder="Indonesia" > - 
                                            <input type="text"  class="form-controlss" id="c2b" name="c2b" placeholder="Inggris" > -
                                            <input type="text"  class="form-controlss" id="c2c" name="c2c" placeholder="Matematika" > -
                                            <input type="text"  class="form-controlss" id="c2d" name="c2d" placeholder="Ipa" > 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <h4>Cluster 3</h4></td>
                                            <td align="center">
                                            <input type="text"  class="form-controlss" id="c3a" name="c3a" placeholder="Indonesia" > - 
                                            <input type="text"  class="form-controlss" id="c3b" name="c3b" placeholder="Inggris" > -
                                            <input type="text"  class="form-controlss" id="c3c" name="c3c" placeholder="Matematika" > -  
                                            <input type="text"  class="form-controlss" id="c3d" name="c3d" placeholder="Ipa" >                            
                                       </td>
                                    </td>      
                                    </tr>
                                </form>
                            </table>
                            </div>
                            </div>
                        </div>
                    </div><!--/.row--> 
                </div>
            </div>



