

<div class="modal fade bd-example-modal-lg" id="custmodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        
                            <!-- Table with stripped rows -->
                            <table id="myTable" class="table">
                                <thead>
                                    <tr>
                                        <th width="5%">Id</th>
                                        <th width="10%">Name</th>
                                        <th class="add">address</th>
                                        <th>email</th>
                                        <th width="10%">Phone</th>
                                        <th width="10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                     
    

<script>
            $(document).ready(function () {



                //    portfolioproductfech
         $.ajax({

                    url: "<?php echo $mainurl; ?>customerfetch",

                    method: "GET",

                    success: function (response) {

                        let data = JSON.parse(response);

                        // console.log(data);
                        let i = 1;


                        data.forEach(item => {
                            const table = document.getElementById("myTable").getElementsByTagName('tbody')[0];
                            const newRow = table.insertRow();
                            const cell1 = newRow.insertCell(0);
                            const cell2 = newRow.insertCell(1);
                            const cell3 = newRow.insertCell(2);
                            const cell4 = newRow.insertCell(3);
                            const cell5 = newRow.insertCell(4);
                            const cell6 = newRow.insertCell(5);
                            cell1.innerHTML = i;
                            cell2.innerHTML = item['name'];
                            cell3.innerHTML =item['address'];
                            cell4.innerHTML = item['email'];
                            cell5.innerHTML = item['phone'];
                            cell6.innerHTML = " <form action='' method='post'><input type='hidden' name='sid' value="+item['id']+"> <button type='submit' name='selectcust' class='delete btn btn-primary mr-sm-2'>Select</button></form>";
                            i++;

                           
                        });

                    }

                });




            });
        </script>
        </div>
    </div>
</div>



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
                                <td> <img src="<?php echo $row["product_image"]; ?>" height="50px" width="50px" alt="not found">
                                </td>
                                <td><?php echo $row['product_name']; ?></td>
                                <td><?php echo $row['product_size']; ?></td>
                                <td><?php echo $row['product_price']; ?></td>
                                <form action="" method="post">
                                    <td><input type="number" name="pqty" required></td>
                                    <td>
                                        <input type="hidden" name="pid" value="<?php echo $row['id']; ?>"><button type='submit'
                                            name="iaddproduct" class='delete btn btn-danger mr-sm-2'>Add</button>
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



<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Invoice</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Invoice</h6>
</nav>



<div class="container content-invoice">
    <div class="cards">
        <div class="card-bodys">
            <form method="post">
                <div class="load-animate animated fadeInUp">
                    <div class="row">
                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                            <h2 class="title">Create Invoice </h2>

                        </div>
                    </div>
                    <input id="currency" type="hidden" value="$">
                    <div class="row">


                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <!-- <h3>To,</h3> -->
                            <div class="form-group">
                                <a href="" data-toggle="modal" data-target="#custmodal">select existing customers</a>
                            </div>
                            <div class="form-group">
                                OR Enter Manually
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control invoinput" required name="Name"
                                    placeholder="Name" value="<?php if (isset($_SESSION['name'])) {
                                        echo $_SESSION['name'];
                                    } ?>">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control invoinput" required rows="3" name="address"
                                    placeholder="Address"><?php if (isset($_SESSION['name'])) {
                                        echo $_SESSION['address'];
                                    } ?></textarea>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control invoinput" value="<?php if (isset($_SESSION['name'])) {
                                    echo $_SESSION['email'];
                                } ?>" required name="Email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control invoinput" value="<?php if (isset($_SESSION['name'])) {
                                    echo $_SESSION['phone'];
                                } ?>" required name="Phone" placeholder="Phone">
                            </div>

                            <div class="form-group">
                                <input type="number" class="form-control invoinput" value="<?php if (isset($_SESSION['name'])) {
                                    echo $_SESSION['gst'];
                                } ?>" required name="gst" placeholder="Enter GST in %">
                            </div>

                            <div class="form-group">
                                <input type="number" class="form-control invoinput" value="<?php if (isset($_SESSION['name'])) {
                                    echo $_SESSION['transpot'];
                                } ?>" required name="transpot" placeholder="Transpot Charge">
                            </div>

                        </div>





                    </div>
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
                                            <td><img src="<?php echo $mainurl . $row['Product_img']; ?>" height="50px"
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
                                            $_SESSION['total'] = $row['total'];
                                        }
                                    } else {
                                        $_SESSION['total'] = 0;
                                        echo 0;
                                    } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="form-group mt-3 mb-3 ">
                                <label>GST Rate: &nbsp;</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        %
                                    </div>
                                    <?php if (isset($_SESSION['gst'])) {
                                        echo $_SESSION['gst'];
                                    } else {
                                        echo 0;
                                    } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="form-group mt-3 mb-3 ">
                                <label>GST Amount: &nbsp;</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        ₹
                                    </div>
                                    <span id="mygst"></span>
                                    <script>
                                        $(document).ready(function () {



                                            $.ajax({

                                                url: "<?php echo $mainurl; ?>gstamount",

                                                method: "GET",

                                                success: function (response) {

                                                    // let data = JSON.parse(response);

                                                    // Update HTML elements with data from 'data' array
                                                    //  console.log(data);
                                                    $("#mygst").html(response);

                                                }

                                            });



                                        });
                                    </script>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="form-group mt-3 mb-3 ">
                                <label>Transpot Charge: &nbsp;</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        ₹
                                    </div>
                                    <?php if (isset($_SESSION['transpot'])) {
                                        echo $_SESSION['transpot'];
                                    } else {
                                        echo 0;
                                    } ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="form-group mt-3 mb-3 ">
                                <label>Total: &nbsp;</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        ₹
                                    </div>
                                    <?php if (isset($grandtotal)) {
                                        echo $grandtotal;
                                    } else {
                                        echo 0;
                                    } ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="form-group mt-3 mb-3 ">
                                <label>Notes: &nbsp;</label>
                                <div class="input-group mb-3">
                                    <textarea name="notes" id="" placeholder="Enter Notes"></textarea>

                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="form-group mt-3 mb-3 ">
                                <label>Amount Paid: &nbsp;</label>
                                <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    ₹
                                    </div>
                                    <input value="" type="number" class="form-control" name="amountPaid" id="amountPaid"
                                        placeholder="Amount Paid">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="form-group mt-3 mb-3 ">
                                <label>Amount Due: &nbsp;</label>
                                <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    ₹
                                    </div>
                                    <input value="" type="number" class="form-control" name="amountDue" id="amountDue"
                                        placeholder="Amount Due">
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                            <h3>Notes: </h3>
                            <div class="form-group">
                                <textarea class="form-control txt" rows="5" name="notes" id="notes"
                                    placeholder="Your Notes"></textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="hidden" value="" class="form-control" name="userId">
                                <input data-loading-text="Saving Invoice..." type="submit" name="invoice_btn"
                                    value="Save Invoice" class="btn btn-success submit_btn invoice-save-btm">
                            </div>
                        </div> -->
                    </div>
                    <div class="clearfix"></div>

                    <input type="submit" class="btn btn-success smit " name="saveinvo" value="Save Invoice">
                </div>

            </form>
        </div>
    </div>
</div>
</div>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.js"></script> -->


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