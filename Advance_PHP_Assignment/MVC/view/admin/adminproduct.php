<div class="col-md-12">
  <div class="card card-plain">
    <div class="header">
      <h4 class="title">Table on Plain Background</h4>
      <p class="category">Here is a subtitle for this table</p>
    </div>
    <div class="content table-responsive table-full-width">
    <form action="addproduct" method="post">
      <button class="btn btn-primary float-end">Add Products</button>
    </form>

    
    
    <table class="table table-hover">
        <thead>
          <th>ID</th>
          <th>DESCRIPTION</th>
          <th>PRICE</th>
          <th>IMAGE</th>
          <th>ACTION</th>
        </thead>
        <tbody>
          <?php
          if (isset($pharmacy)) {
            foreach ($pharmacy as $value) {
              ?>



              <tr>

                <td><?php echo $value->id ?></td> 

                <td><?php echo $value->description ?></td>

                <td><?php echo $value->price ?></td>

                <td><img src="<?php echo $value->image ?>" height="70" width="70px"></td>

                <td>
                <form action="" method="post" enctype="multipart/form-data">
                <button type="button" class="btn btn-primary btn-sm" name="update-pr" value="<?php echo $value->id ?>">Update</button>
                </form>
                
                <form action="" method="post">
                <button type="submit" class="btn btn-secondary btn-sm" name="delete_btn" value="<?php echo $value->id ?>">Delete </button>
                </form>
                </td>

              </tr>



            <?php }
          } else {
            echo "<tr>
                                        <tr style='text-allign:center;' colspan=8>No data fount</tr>
                                        </tr>";
          } ?>
        </tbody>
      </table>

    </div>
  </div>
</div>


</div>
</div>
</div>
</div>