<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Edit About</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Edit About</h6>
</nav>
<center>
    <h2>Edit Your About Section</h2>
</center>



<div class="AB">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>SUCCESS</strong> Your About Section Updated Successfully
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
                    <h4>Edit About</h4>
                </div>

                <div class="panel-body form-group form-group-sm prodiv">
                    <form method="post" enctype="multipart/form-data">


                        <div class="row">

                            <div class="col-xs-4 mt-1">

                                <input type="hidden" name="aid" id="aid">
                                <input type="hidden" name="oimg" id="oimg">
                                <input type="file" name="aimg" id="aimg" class="form-control  pimage inpadd">
                            </div>

                            <div class="col-xs-4 mt-1">


                                <input type="text" name="title" id="title" class="form-control  pimage inpadd">
                            </div>

                            <div class="col-xs-4 mt-1">

                                <textarea name="fpara" id="fpara" class="form-control  pimage inpadd"></textarea>

                            </div>

                            <div class="col-xs-4 mt-1">

                                <textarea name="lpara" id="lpara" class="form-control  pimage inpadd"></textarea>

                            </div>



                            <script>
                                $(document).ready(function () {





                                    // about data fetch code
                                    $.ajax({

                                        url: "<?php echo $mainurl; ?>aboutfetch",

                                        method: "GET",

                                        success: function (response) {

                                            let data = JSON.parse(response);

                                            // console.log(data);

                                            const textarea = document.getElementById("fpara");
                                            textarea.value = data['1para'];
                                            const textarea2 = document.getElementById("lpara");
                                            textarea2.value = data['2para'];
                                            aid.value = data['id'];
                                            title.value = data['title'];
                                            oimg.value = data['img'];





                                        }

                                    });


                                    //    about fetch point
                                    $.ajax({

                                        url: "<?php echo $mainurl; ?>aboutpointfetch",

                                        method: "GET",

                                        success: function (response) {

                                            let data = JSON.parse(response);

                                            // console.log(data);
                                            let i = 1;

                                          
                                            data.forEach(item => {
                                               const table = document.getElementById("tab").getElementsByTagName('tbody')[0];
                                               const newRow = table.insertRow();
                                               const cell1 = newRow.insertCell(0);
                                               const  cell2 = newRow.insertCell(1);
                                               const cell3 = newRow.insertCell(2);
                                                cell1.innerHTML = i;
                                                cell2.innerHTML = item['point'];
                                                cell3.innerHTML = "<form  method='post'><input type='hidden' name='apid'value='"+item['id']+"'><button type='submit'  name='apdelete'class='delete btn btn-danger mr-sm-2'>Delete</button></form>";
                                                 i++;
                                         } );







                                        }

                                    });




                                });
                            </script>





                        </div>
                        <div class="row">
                            <center>
                                <div class="col-xs-12 margin-top btn-group">
                                    <input type="submit" id="action_add_product" value="Update"
                                        class="btn btn-success float-right" name="upabout">
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
    <center>
        <h2>Add About Point</h2>
    </center>



    <div class="AP">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>SUCCESS</strong> Your About Point Added Successfully
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>

    <div class="MX">
        <div class="alert alert-dange alert-dismissible fade show" role="alert">
            <strong>ALERT</strong> You Can Add Maximum 4 Point
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <center>
                <!-- <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Enter About Point</h4>
                </div> -->

                <div class="panel-body form-group form-group-sm prodiv">
                    <form method="post" enctype="multipart/form-data">


                        <div class="row">



                            <div class="col-xs-4 mt-1">

                                <input type="text" name="point" class="form-control  pimage inpadd"
                                    placeholder="Enter About Point ">

                            </div>









                        </div>
                        <div class="row">
                            <center>
                                <div class="col-xs-12 margin-top btn-group">
                                    <input type="submit" id="action_add_product" value="Add"
                                        class="btn btn-success float-right" name="aboutpoint">
                                </div>
                            </center>
                        </div>
                    </form>
                </div>

        </div>
        </center>
    </div>
    <div></div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Manage About Point</h5>
                        <div class="container mydata">
                            <?php
                            ?>
                            <!-- Table with stripped rows -->
                            <table id="tab" class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Point</th>
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