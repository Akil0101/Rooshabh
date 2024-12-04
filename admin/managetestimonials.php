<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Manage Testimonials</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Manage Testimonials</h6>
</nav>




<div class="TT">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>SUCCESS</strong> Your Testimonials Background image< Updated Successfully <button type="button"
            class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
    </div>
</div>

<div class="row">
    <div class="col-xs-12">
        <center>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Edit Testimonials Background image</h4>
                </div>

                <div class="panel-body form-group form-group-sm prodiv">
                    <form method="post" enctype="multipart/form-data">


                        <div class="row">

                            <div class="col-xs-4 mt-1">

                                <input type="hidden" name="tid" id="tid">
                                <input type="hidden" name="oimg" id="oimg">
                                <input type="file" name="timg" id="timg" class="form-control  pimage inpadd">
                            </div>

                        </div>
                        <div class="row">
                            <center>
                                <div class="col-xs-12 margin-top btn-group">
                                    <input type="submit" id="action_add_product" value="Update"
                                        class="btn btn-success float-right" name="uptestiimg">
                                </div>
                            </center>
                        </div>
                    </form>
                </div>

            </div>
        </center>
    </div>
    <div>

    </div>

    <div class="TP">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>SUCCESS</strong> Your Testimonials person Added Successfully
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
                        <h4>Add Testimonials Person</h4>
                    </div>

                    <div class="panel-body form-group form-group-sm prodiv">
                        <form method="post" enctype="multipart/form-data">


                            <div class="row">



                                <div class="col-xs-4 mt-1">

                                    <input type="file" name="tp_img" class="form-control  invoinput inpadd">

                                    <input type="text" required class="form-control  invoinput inpadd" name="tp_name"
                                        placeholder="Enter Person Name">

                                    <input type="text" required class="form-control  invoinput inpadd" name="tp_post"
                                        placeholder="Enter Person Post">

                                    <input type="text" required class="form-control  invoinput inpadd" name="tp_des"
                                        placeholder="Enter Person Description">

                                </div>






                            </div>
                            <div class="row">
                                <center>
                                    <div class="col-xs-12 margin-top btn-group">
                                        <input type="submit" id="action_add_product" value="Add Person"
                                            class="btn btn-success float-right" name="tp_add">
                                    </div>
                                </center>
                            </div>
                        </form>
                    </div>

                </div>
            </center>
        </div>
        <div></div>

        <div class="TPD">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>ALERT</strong> Your Testimonials Person Deleted Successfully
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
                            <h5 class="card-title">Manage Testimonials Person</h5>
                            <div class="container mydata">
                                <?php
                                ?>
                                <!-- Table with stripped rows -->
                                <table id="tab" class="table">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Image</th>
                                            <th>name</th>
                                            <th>post</th>
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





                // about data fetch code
                $.ajax({

                    url: "<?php echo $mainurl; ?>testifech",

                    method: "GET",

                    success: function (response) {

                        let data = JSON.parse(response);

                        console.log(data);



                        tid.value = data['id'];

                        oimg.value = data['testimonials_img'];





                    }

                });


                //    about fetch point
                $.ajax({

                url: "<?php echo $mainurl; ?>tpfech",

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
                            const cell4 = newRow.insertCell(3);
                            const cell5 = newRow.insertCell(4);
                            const cell6 = newRow.insertCell(5);
                            cell1.innerHTML = i;
                            cell2.innerHTML = "<img src="+item['img']+" class='climg' alt=''>";
                            cell3.innerHTML = item['name'];
                            cell4.innerHTML = item['post'];
                            cell5.innerHTML = item['des'];

                            cell6.innerHTML = "<form  method='post'><input type='hidden' name='tpid'value='" + item['id'] + "'><input type='hidden' name='old_img' value='" + item['img'] + "'><button type='submit'  name='tpdelete'class='delete btn btn-danger mr-sm-2'>Delete</button></form>";
                            i++;
                        });

                    }

                });




            });
        </script>