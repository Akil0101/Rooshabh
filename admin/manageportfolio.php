<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Manage Portfolio</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Manage Portfolio</h6>
</nav>
<center>
    <h2>Manage Portfolio</h2>
</center>



<div class="POC">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>SUCCESS</strong> Your Portfolio Category Added Successfully
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>

<div class="row">
    <div class="col-xs-12">
        <center>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Enter Portfolio Category</h4>
                </div>

                <div class="panel-body form-group form-group-sm prodiv">
                    <form method="post" enctype="multipart/form-data">


                        <div class="row">


                            <div class="col-xs-4 mt-1">

                                <input type="text" name="port_cat" id="port_cat" class="form-control  pimage inpadd">

                            </div>


                        </div>
                        <div class="row">
                            <center>
                                <div class="col-xs-12 margin-top btn-group">
                                    <input type="submit" id="action_add_product" value="Update"
                                        class="btn btn-success float-right" name="port_cate">
                                </div>
                            </center>
                        </div>
                    </form>
                </div>

            </div>
        </center>
    </div>
    <div></div>

    <hr class="hr">


    <div class="PCD">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>ALERT</strong> Your Category Deleted Successfully
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
                        <h5 class="card-title">Manage Portfolio Category</h5>
                        <div class="container mydata">
                            <?php
                            ?>
                            <!-- Table with stripped rows -->
                            <table id="tab" class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category</th>
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

    <div class="PP">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>SUCCESS</strong> Your Portfolio Product Added Successfully
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <center>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Add Portfolio Product</h4>
                    </div>

                    <div class="panel-body form-group form-group-sm prodiv">
                        <form method="post" enctype="multipart/form-data">


                            <div class="row">



                                <div class="col-xs-4 mt-1">

                                    <select name="pp_cat" id="pcat" class="form-control invoinput inpadd"
                                        placeholder="Select Category" data-bvalidator="required">
                                        <option style="border:2px solid black" value="">-select Category-</option>





                                    </select>
                                    <input type="file" name="pp_img" class="form-control  invoinput inpadd">

                                    <input type="text" required class="form-control  invoinput inpadd" name="pp_name"
                                        placeholder="Enter Product Name">

                                    <input type="text" required class="form-control  invoinput inpadd" name="pp_des"
                                        placeholder="Enter Product Description">

                                </div>






                            </div>
                            <div class="row">
                                <center>
                                    <div class="col-xs-12 margin-top btn-group">
                                        <input type="submit" id="action_add_product" value="Add Product"
                                            class="btn btn-success float-right" name="pp_add">
                                    </div>
                                </center>
                            </div>
                        </form>
                    </div>

                </div>
            </center>
        </div>
        <div></div>

        <div class="PPD">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>ALERT</strong> Your Product Deleted Successfully
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
                            <h5 class="card-title">Manage Portfolio Product</h5>
                            <div class="container mydata">
                                <?php
                                ?>
                                <!-- Table with stripped rows -->
                                <table id="tab1" class="table">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Category</th>
                                            <th>Image</th>
                                            <th>name</th>
                                            <th>description</th>
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




                //    portfoliocatfech
                $.ajax({

                    url: "<?php echo $mainurl; ?>portfoliocatfech",

                    method: "GET",

                    success: function (response) {

                        let data = JSON.parse(response);

                        // console.log(data);
                        let i = 1;


                        data.forEach(item => {
                            const table = document.getElementById("tab").getElementsByTagName('tbody')[0];
                            const newRow = table.insertRow();
                            const cell1 = newRow.insertCell(0);
                            const cell2 = newRow.insertCell(1);
                            const cell3 = newRow.insertCell(2);
                            cell1.innerHTML = i;
                            cell2.innerHTML = item['port_cat'];
                            cell3.innerHTML = "<form  method='post'><input type='hidden' name='pcid'value='" + item['id'] + "'><button type='submit'  name='pcdelete'class='delete btn btn-danger mr-sm-2'>Delete</button></form>";
                            i++;

                            var x = document.getElementById("pcat");
                            var option = document.createElement("option");
                            option.value = item['port_cat'];
                            option.text = item['port_cat'];
                            x.add(option);
                        });

                    }

                });


                //    portfolioproductfech
                $.ajax({

                    url: "<?php echo $mainurl; ?>portfolioprofech",

                    method: "GET",

                    success: function (response) {

                        let data = JSON.parse(response);

                        // console.log(data);
                        let i = 1;


                        data.forEach(item => {
                            const table = document.getElementById("tab1").getElementsByTagName('tbody')[0];
                            const newRow = table.insertRow();
                            const cell1 = newRow.insertCell(0);
                            const cell2 = newRow.insertCell(1);
                            const cell3 = newRow.insertCell(2);
                            const cell4 = newRow.insertCell(3);
                            const cell5 = newRow.insertCell(4);
                            const cell6 = newRow.insertCell(5);
                            cell1.innerHTML = i;
                            cell2.innerHTML = item['p_category'];
                            cell3.innerHTML =" <img src='"+item['p_img']+"' alt='' height='67px' width='67px' srcset=''>";
                            cell4.innerHTML = item['p_name'];
                            cell5.innerHTML = item['p_des'];
                            cell6.innerHTML = "<form  method='post'><input type='hidden' name='ppid'value='" + item['id'] + "'><input type='hidden' name='oldpp' value='"+item['p_img']+"'><button type='submit'  name='ppdelete'class='delete btn btn-danger mr-sm-2'>Delete</button></form>";
                            i++;

                           
                        });

                    }

                });




            });
        </script>
      