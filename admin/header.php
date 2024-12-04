<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Header</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Header</h6>
</nav>

<div class="HA">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>SUCCESS</strong> Your Header Name Updated Successfully
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
                    <h4>Edit Header</h4>
                </div>

                <div class="panel-body form-group form-group-sm prodiv">
                    <form method="post" enctype="multipart/form-data">


                        <div class="row">



                            <div class="col-xs-4 mt-1">
                                <input type="hidden" name="bid" id="bid" >
                                <input type="text" required class="form-control  invoinput inpadd"
                                     name="brand_name" id="brand_name"
                                    placeholder="Enter Your Header Name">
                            </div>
                            <script>
                                $(document).ready(function () {

                                    

                                        $.ajax({

                                            url: "<?php echo $mainurl; ?>hederfetch",

                                            method: "GET",

                                            success: function (response) {

                                                let data = JSON.parse(response);

                                                // Update HTML elements with data from 'data' array
                                                //  console.log(data);
                                                 bid.value=data['id'];
                                                 brand_name.value=data['brand_name'];

                                            }

                                        });

                                   

                                });
                            </script>
                          




                        </div>
                        <div class="row">
                            <center>
                                <div class="col-xs-12 margin-top btn-group">
                                    <input type="submit" id="action_add_product" value="Update"
                                        class="btn btn-success float-right" name="uphead">
                                </div>
                            </center>
                        </div>
                    </form>
                </div>

            </div>
        </center>
    </div>
    <div></div>