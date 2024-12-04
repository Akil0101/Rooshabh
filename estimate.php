<div class="modal fade bd-example-modal-lg" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <?php if ($products == null) {
                echo "<h3 class='text-center'>No products found</h3>";

            } else {

                ?>
                <!-- Table with stripped rows -->
                <table id="myTable" class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>image</th>
                            <th>Name</th>
                            <th>Size</th>
                            <th>price</th>
                            <th>Enter Quantity</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sno = 1;
                        foreach ($products as $row) {

                            ?>
                            <tr>

                                <td><?php echo $sno; ?></td>
                                <td> <img src="admin/<?php echo $row["product_image"]; ?>" height="50px" width="50px" alt="not found">
                                </td>
                                <td><?php echo $row['product_name']; ?></td>
                                <td><?php echo $row['product_size']; ?></td>
                                <td><?php echo $row['product_price']; ?></td>
                                <form action="" method="post">
                                    <td><input type="number" name="pqty" required></td>
                                    <td>
                                        <input type="hidden" name="pid" value="<?php echo $row['id']; ?>"><button type='submit'
                                            name="eaddproduct" class='delete btn btn-danger mr-sm-2'>Add</button>
                                </form>
                                </td>
                            </tr>
                            <?php
                            $sno++;
                        }
                        ?>
                    </tbody>
                </table>
            <?php } ?>
        </div>
    </div>
</div>






<div class="container content-invoice">
    <div class="cards">
        <div class="card-bodys">
            <form method="post">
                <div class="load-animate animated fadeInUp">
                <center>
                    <div class="row">
                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                            <h2 class="title">Create Estimate </h2>

                        </div>
                    </div>
                    <input id="currency" type="hidden" value="$">
                    <div class="row">
                        <!-- <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <h3>From,</h3>
                            <div class="form-group">
                                <input type="text" class="form-control invoinput" name="companyName" value="Rushabh bathware" id="companyName"
                                    placeholder="Name">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control invoinput"  rows="3" name="address" id="address"
                                    placeholder="Address">Morbi</textarea>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control invoinput" value="rushabh123@gmail.com" name="Email" id="companyName"
                                    placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control invoinput" value="8141910114" name="Phone" id="companyName"
                                    placeholder="Phone">
                            </div>

                        </div> -->
                        <center>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <!-- <h3>To,</h3> -->
                            <div class="form-group">
                                <input type="text" class="form-control invoinput" required name="Name"
                                    placeholder="Name" value="<?php if (isset($_SESSION['ename'])) {
                                        echo $_SESSION['ename'];
                                    } ?>">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control invoinput" required rows="3" name="address"
                                    placeholder="Address"><?php if (isset($_SESSION['ename'])) {
                                        echo $_SESSION['eaddress'];
                                    } ?></textarea>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control invoinput" value="<?php if (isset($_SESSION['ename'])) {
                                    echo $_SESSION['eemail'];
                                } ?>" required name="Email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control invoinput" value="<?php if (isset($_SESSION['ename'])) {
                                    echo $_SESSION['ephone'];
                                } ?>" required name="Phone" placeholder="Phone">
                            </div>

                           
                        
                        </div>
                        </center>
                    </div>
                    </center>
                    <div class="row">
                        <div class="col-xs-12">
                            <input type="submit" class="btn btn-success smit " name="addpro" value=" + Add Product">
                            <!-- <button class="btn btn-success" id="addRows" type="submit"   ><a href="" ></a></button> -->

                        </div>
                    </div>
                   
                    <div class="row ">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                            <table class="table table-condensed table-striped " id="invoiceItem">
                                <tr>

                                    <th width="15%">Sr No</th>
                                    <th width="15%">Product Image</th>
                                    <th width="38%">Product Name</th>
                                    <th width="10%">Size</th>
                                    <th width="15%">Quantity</th>
                                    <th width="15%">Price</th>
                                    <th width="15%">Total</th>
                                    <th width="10%">Action</th>
                                </tr>

                                <?php
                                $i = 1;
                                if (isset($item)) {
                                    foreach ($item as $row) {
                                        ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><img src="<?php echo $mainurl ."admin/". $row['Product_img']; ?>" height="50px"
                                                    width="50px" alt="no image found" srcset=""></td>

                                            <td><?php echo $row['product_name']; ?></td>
                                            <td><?php echo $row['product_size']; ?></td>
                                            <td><?php echo $row['product_qty']; ?></td>
                                            <td><?php echo $row['product_price']; ?></td>
                                            <td><?php echo $row['total']; ?></td>
                                            <td>
                                                <form action="createinvoice" method="post"><input type="hidden" name="pid"
                                                        value="<?php echo $row['id']; ?>"><button type='submit' name="itemd"
                                                        class='delete btn btn-danger mr-sm-2'>Delete</button></form>
                                            </td>
                                        </tr>
                                        <?php
                                        $i++;
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td>No data</td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="form-group mt-3 mb-3 ">
                                <label>Subtotal: &nbsp;</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        ₹
                                    </div>
                                    <?php if (isset($row['total'])) {
                                        foreach ($stotal as $row) {
                                            echo $row['total'];
                                            $_SESSION['etotal'] = $row['total'];
                                        }
                                    } else {
                                        $_SESSION['etotal'] = 0;
                                        echo 0;
                                    } ?>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    
                    
                    <input type="submit" class="btn btn-success smit " name="saveesti"  value="Download Estimate">
                </div>

            </form>
        </div>
    </div>
</div>
</div>


<script type="text/javascript">

    function openmodal() {



        $('#mymodal').modal('show');

    }

   

   

</script>



<?php
if (isset($_POST['addpro'])) {

    
                echo "<script>openmodal();</script>";
   
}

?>