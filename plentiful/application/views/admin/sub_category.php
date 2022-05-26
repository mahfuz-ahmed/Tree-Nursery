
    <section class="content">
      <div class="container-fluid">
        <div class="card pl-4 pt-4 pr-4 pb-4">
          <div class="row">
            <div class="col-sm-12">
              <button class="btn btn-dark float-right" data-toggle="modal" data-target="#add_new_subcategory">Add New</button>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12"><br>
              <table  class="table table-striped table-bordered datatable" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Division</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php 
                    $i=1;
                    foreach($all_sub_category as $scat)
                    {
                      ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $scat['name']; ?></td>
                        <td><?php echo $scat['category']; ?></td>
                        <td><input type="checkbox" name="status" value="1" <?php if($scat['status']==1) { ?> checked="checked" <?php } ?>></td>
                        <td>
                          <a href="<?php  echo base_url().'products/delete_category/'.$scat['id'] ?>" class="btn btn-dark"><i class="fa fa-trash"></i></a>
                        </td>
                      </tr>
                      <?php
                      $i++;
                    }
                    ?>
                     <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Division</th>
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

<div class="modal" id="add_new_subcategory">
  <div class="modal-dialog">
    <div class="modal-content">


      <div class="modal-header">
        <h4 class="modal-title">Add Area</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>


      <div class="modal-body">
        <form action="<?php echo base_url().'products/subcategory/' ?>" class="database_operations" >
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label>Enter Area Name</label>
              <input type="text" name="name" required="required" class="form-control" placeholder="Area Name">
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group">
              <label>Select Division</label>
              <select class="form-control" name="category">
                <option value="">Select</option>
                <?php 
                foreach($all_category as $cat)
                {
                  ?><option><?= $cat['name']; ?></option><?php 
                }
                ?>  
              </select>
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