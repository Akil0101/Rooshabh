<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Manage Services</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Manage Services</h6>
</nav>

<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Manage products</h5>
            <div class="container mydata">
              <!-- Table with stripped rows -->
              <table id="myTable" class="table datatable">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Service icon</th>
                    <th>Service Name</th> 
                    <th>Service Description</th>
                    
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sno = 1;
                  foreach ($service as $row) {

                    ?>
                    <tr>

                      <td><?php echo $sno; ?></td>
                      <td><img src="<?php echo $row["icon"]; ?>" height="64px" width="64px"></td>
                      <td><?php echo $row["name"]; ?></td>
                      <td><?php echo $row["des"]; ?></td>
                    
                      <td class="myt"><form  method="post"><input type="hidden" name="oldimg" value="<?php echo $row["icon"]; ?>"><input type="hidden" name="sid" value="<?php echo $row["sid"]; ?>" ><button type="submit" name="des" class='edit btn btn-danger mr-sm-2'>delete</button></form>
                          
                      </td>
                    </tr>
                    <?php
                    $sno++;
                  }
                  ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>