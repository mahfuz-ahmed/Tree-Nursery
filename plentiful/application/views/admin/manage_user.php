
   <section class="content">
      <div class="container-fluid">
        <div class="card pl-4 pt-4 pr-4 pb-4">
          <div class="row">
            <div class="col-sm-12"><br>
              <table  class="table table-striped table-bordered datatable" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>E-Mail</th>
                            <th>Mobile No</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $i=1;
                      foreach($all_users as $ul){ ?>

                    <tr>
                      <td><?php echo $i ?></td>
                      <td><?php echo $ul['name'] ?></td>
                      <td><?php echo $ul['email'] ?></td>
                      <td><?php echo $ul['mobile_no'] ?></td>
                      <td><?php if($ul['access']==1) { echo "Admin"; } else if($ul['access']==2) { echo "Customer"; } else if($ul['access']==3) { echo "Vendor"; } ?></td>
                      <td><input type="checkbox" name="status"></td>
                      <td>
                       <?php if($ul['access']!=1) { ?>
                       <a href="<?php echo base_url().'users/delete_user/'.$ul['id'] ?>" class="btn btn-dark btn-sm"> Remove </a>
                     <?php } ?>
                      </td>
                    </tr>
                  <?php } ?>
                    </tbody>
                     <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>E-Mail</th>
                            <th>Mobile No</th>
                            <th>Type</th>
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