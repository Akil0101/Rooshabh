<div class="OP">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>SUCCESS</strong> Your Team person Added Successfully
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

                                <input type="file" required name="op_img" class="form-control  invoinput inpadd">

                                <input type="text" required class="form-control  invoinput inpadd" name="op_name"
                                    placeholder="Enter Person Name">

                                <input type="text" required class="form-control  invoinput inpadd" name="op_role"
                                    placeholder="Enter Person Role">

                                <input type="text" required class="form-control  invoinput inpadd" name="op_twit"
                                    placeholder="Enter Person twiter link">

                                <input type="text" required class="form-control  invoinput inpadd" name="op_face"
                                    placeholder="Enter Person facebook link">

                                <input type="text" required class="form-control  invoinput inpadd" name="op_insta"
                                    placeholder="Enter Person instagram link">

                                <input type="text" required class="form-control  invoinput inpadd" name="op_linkd"
                                    placeholder="Enter Person linkdin link">

                           


                            </div>






                        </div>
                        <div class="row">
                            <center>
                                <div class="col-xs-12 margin-top btn-group">
                                    <input type="submit" id="action_add_product" value="Add Person"
                                        class="btn btn-success float-right" name="op_add">
                                </div>
                            </center>
                        </div>
                    </form>
                </div>

            </div>
        </center>
    </div>
    <div></div>

    <div class="OPD">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>ALERT</strong> Your about our team member Deleted Successfully
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
                        <h5 class="card-title">Manage About Our Team Member</h5>
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
                                        <th>role</th>
                                        <th>twiter</th>
                                        <th>facebook</th>
                                        <th>instagram</th>
                                        <th>linkdin</th>
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



            //    about our team member fetch
            $.ajax({

            url: "<?php echo $mainurl; ?>opfech",

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
                        const cell7 = newRow.insertCell(6);
                        const cell8 = newRow.insertCell(7);
                        const cell9 = newRow.insertCell(8);
                        cell1.innerHTML = i;
                        cell2.innerHTML = "<img src="+item['img']+" class='climg' alt=''>";
                        cell3.innerHTML = item['name'];
                        cell4.innerHTML = item['role'];
                        cell5.innerHTML = item['twiter'];
                        cell6.innerHTML = item['facebook'];
                        cell7.innerHTML = item['instagram'];
                        cell8.innerHTML = item['linkdin'];

                        cell9.innerHTML = "<form  method='post'><input type='hidden' name='opid'value='" + item['id'] + "'><input type='hidden' name='old_img' value='" + item['img'] + "'><button type='submit'  name='opdelete'class='delete btn btn-danger mr-sm-2'>Delete</button></form>";
                        i++;
                    });

                }

            });




        });
    </script>