<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Footer</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Fotter</h6>
</nav>

<div class="FF">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>SUCCESS</strong> Your Footer Updated Successfully
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
                    <h4>Manage Footer</h4>
                </div>

                <div class="panel-body form-group form-group-sm prodiv">
                    <form method="post" enctype="multipart/form-data">


                        <div class="row">



                            <div class="col-xs-4 mt-1">
                                <input type="hidden" name="fid" id="fid" >
                                <input type="text" required class="form-control  invoinput inpadd"
                                     name="instagram" id="instagram">
                            </div>
                            <div class="col-xs-4 mt-1">
                               
                                <input type="text" required class="form-control  invoinput inpadd"
                                     name="facebook" id="facebook">
                            </div>
                            <div class="col-xs-4 mt-1">
                             
                                <input type="text" required class="form-control  invoinput inpadd"
                                     name="twiter" id="twiter">
                            </div>
                            <div class="col-xs-4 mt-1">
                            
                                <input type="text" required class="form-control  invoinput inpadd"
                                     name="linkdin" id="linkdin">
                            </div>
                            <script>
                                $(document).ready(function () {

                                    

                                        $.ajax({

                                            url: "<?php echo $mainurl; ?>fetchfooter",

                                            method: "GET",

                                            success: function (response) {

                                                let data = JSON.parse(response);

                                                // Update HTML elements with data from 'data' array
                                                //  console.log(data);
                                                 fid.value=data['id'];
                                                 instagram.value=data['instagram'];
                                                 facebook.value=data['facebook'];
                                                 twiter.value=data['twiter'];
                                                 linkdin.value=data['linkdin'];

                                            }

                                        });

                                   

                                });
                            </script>
                          




                        </div>
                        <div class="row">
                            <center>
                                <div class="col-xs-12 margin-top btn-group">
                                    <input type="submit" id="action_add_product" value="Update"
                                        class="btn btn-success float-right" name="upfoot">
                                </div>
                            </center>
                        </div>
                    </form>
                </div>

            </div>
        </center>
    </div>
    <div></div>