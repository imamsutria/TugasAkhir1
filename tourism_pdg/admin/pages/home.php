<div class="content">

        <div class="col-lg-8" style="background: white; padding: 20px">  
            <section class="panel">
                <div class="panel-body">
                    <a href="?page=tourism_add" title="Add Tourism" class="btn btn-compose" style="background: #26a69a; color: white; margin-bottom: 1%; width: 100%"><i class="icon-plus-circle2"></i> &nbsp Add Tourism</a>
                    <div class="box-body">
                        <div class="form-group">
                            <table id="example2" class="table datatable-show-all">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th class="text-center" style="width: 100px">Option</th>
                                    </tr>
                                </thead>

                                <tbody>
                                <?php                       
                                    $sql = mysqli_query($conn, "SELECT * FROM tourism order by id ASC");
                                    while($data =  mysqli_fetch_array($sql)){
                                    $id = $data['id'];
                                    $nama = $data['name'];
                                    $alamat = $data['address'];
                                ?>
                                    <tr>
                                        <td><?php echo "$id"; ?></td>
                                        <td><?php echo "$nama"; ?></td>
                                        <td><?php echo "$alamat"; ?></td>
                                        <td>
                                            <div class="btn-group">
                        						<a href="?page=tourism_detail&id=<?php echo $id; ?>" class="btn btn-sm btn-default" style="background: #26a69a; color: white;" title='Detail'><i class="icon-list"></i></a> &nbsp&nbsp&nbsp&nbsp
                        						<a href="act/tourism_delete.php?id=<?php echo $id; ?>" class="btn btn-sm btn-default" style="background: #26a69a; color: white" title='Delete'><i class="icon-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>    
                            </table> 
                        </div>                   
                    </div>
                </div>
            </section>
        </div>

</div>