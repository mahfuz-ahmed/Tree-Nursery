
    <section class="content">
      <div class="container-fluid">
        <div class="card pl-4 pt-4 pr-4 pb-4">
          <div class="row">
            <div class="col-sm-12">
              <button class="btn btn-dark float-right" data-toggle="modal" data-target="#add_new_category">Add New</button>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12"><br>
              <table  class="table table-striped table-bordered datatable" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php 
                    $i=1;
                    foreach($all_category as $cat)
                    {
                    ?>
                        <tr>
                          <td><?php echo  $i; ?></td>
                          <td><?php echo $cat['name'] ?></td>
                          <td><input type="checkbox" name="status" value="1" checked="checked"> Active</td>
                          <td>
                            <a href="<?php  echo base_url().'products/edit_product_category/'.$cat['id'] ?>" class="btn btn-dark btn-sm"><i class="fa fa-edit"></i> Edit</a>
                            <a href="<?php  echo base_url().'products/delete_product_category/'.$cat['id'] ?>" class="btn btn-dark btn-sm"><i class="fa fa-trash"></i> Delete</a>
                          </td>
                        </tr>
                    <?php $i++; } ?>
                    <tbody>
                    </tbody>
                     <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
          </div>
        </div>
         
      </div>

    </section>

  </div>

<div class="modal" id="add_new_category">
  <div class="modal-dialog">
    <div class="modal-content">


      <div class="modal-header">
        <h4 class="modal-title">Add Division</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>


      <div class="modal-body">
        <form action="<?php echo base_url().'products/category/' ?>" class="database_operations" >
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label>Enter Division Name</label>
              <input type="text" name="name" required="required" class="form-control" placeholder="Division Name">
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group">
             <button type="submit" class="btn btn-dark">Add</button>
            </div>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>