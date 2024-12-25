<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Add Customer</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Add Customer</h6>
</nav>

<div class="CUSTO">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>SUCCESS</strong> Your Customer Added Successfully
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>

<div class="ACUSTO">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>ALERT</strong> Your Customer Allready Exist
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>

<div id="response" class="alert alert-success" style="display:none;">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <div class="message"></div>
</div>

<div class="row">
    <div class="col-xs-12">
        <center>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Customer Information</h4>
                </div>

                <div class="panel-body form-group form-group-sm prodiv">
                    <form method="post" enctype="multipart/form-data">


                        <div class="row">
                            <center>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <!-- <h3>To,</h3> -->
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


                                </div>
                                <div class="row">
                                    <center>
                                        <div class="col-xs-12 margin-top btn-group ">
                                            <input type="submit" id="" value="ADD Customer"
                                                class="btn btn-success btn-c " name="addcustomer">
                                        </div>
                                    </center>
                                </div>
                                </center>
                    </form>
                </div>

            </div>
        </center>
    </div>
    <div>

    <div class="CDD">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>ALERT</strong> Your Customer Deleted Successfully
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Manage Customers</h5>
                    <div class="container mydata">
                       
                            <!-- Table with stripped rows -->
                            <table id="myTable" class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>address</th>
                                        <th>email</th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                     
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

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
                            cell6.innerHTML = " <form action='' method='post'><input type='hidden' name='cdid' value="+item['id']+"> <button type='submit' name='cddelete' class='delete btn btn-danger mr-sm-2'>Delete</button></form>";
                            i++;

                           
                        });

                    }

                });




            });
        </script>