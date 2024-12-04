<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Add Services</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Add Services</h6>
</nav>

<div class="SA">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>SUCCESS</strong> Your Service Successfully Added
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
                    <h4>Add Services</h4>
                </div>

                <div class="panel-body form-group form-group-sm prodiv">
                    <form method="post" enctype="multipart/form-data">


                        <div class="row">



                            <div class="col-xs-4 mt-1">
                            
                                    <input type="file" name="sicon" class="form-control  invoinput inpadd">
                               
                                    <input type="text" required class="form-control  invoinput inpadd"
                                     name="sname" id="sname"
                                    placeholder="Enter Service Name">

                                    <input type="text" required class="form-control  invoinput inpadd"
                                     name="sdes" id="sdes"
                                    placeholder="Enter Service Description">
                            </div>
                           
                          




                        </div>
                        <div class="row">
                            <center>
                                <div class="col-xs-12 margin-top btn-group">
                                    <input type="submit" id="action_add_product" value="Add Services"
                                        class="btn btn-success float-right" name="upser">
                                </div>
                            </center>
                        </div>
                    </form>
                </div>

            </div>
        </center>
    </div>
    <div></div>