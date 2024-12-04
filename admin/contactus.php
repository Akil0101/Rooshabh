<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Update Contact US</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Update Contact USt</h6>
</nav>
<center>
    <h2> Update Your Contact US</h2>
</center>




<div class="COU">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>SUCCESS</strong> Your Conatac Section Updated Successfully
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
                    <h4>Edit Contact US</h4>
                </div>

                <div class="panel-body form-group form-group-sm prodiv">
                    <form method="post" enctype="multipart/form-data">


                        <div class="row">

                            <div class="col-xs-4 mt-1">

                                <input type="hidden" name="coid" id="coid">


                            </div>

                            <div class="col-xs-4 mt-1">


                                <textarea name="location" id="location" class="form-control  pimage inpadd"></textarea>
                            </div>

                            <div class="col-xs-4 mt-1">

                                <textarea name="address" id="address" class="form-control  pimage inpadd"></textarea>

                            </div>
                            <div class="col-xs-4 mt-1">

                                <input type="number" id="phone" name="phone" class="form-control  pimage inpadd">

                            </div>

                            <div class="col-xs-4 mt-1">

                                <input type="text" id="email" name="email" class="form-control  pimage inpadd">

                            </div>

                            <div class="col-xs-4 mt-1">

                                <input type="text" id="password" name="password" class="form-control  pimage inpadd">

                            </div>






                        </div>
                        <div class="row">
                            <center>
                                <div class="col-xs-12 margin-top btn-group">
                                    <input type="submit" id="action_add_product" value="Update"
                                        class="btn btn-success float-right" name="upcontact">
                                </div>
                            </center>
                        </div>
                    </form>
                </div>

            </div>
        </center>
    </div>
    <div></div>


    <script>
        $(document).ready(function () {





            // about data fetch code
            $.ajax({

                url: "<?php echo $mainurl; ?>contactfech",

                method: "GET",

                success: function (response) {

                    let data = JSON.parse(response);

                    // console.log(data);

                    const textarea = document.getElementById("location");
                    textarea.value = data['location'];
                    const textarea2 = document.getElementById("address");
                    textarea2.value = data['address'];
                    coid.value = data['id'];
                    phone.value=data['phone'];
                    email.value=data['email'];
                    password.value=data['password'];




                }

            });



        });
    </script>