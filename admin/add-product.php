<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Add Product</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Add Product</h6>
</nav>

<div class="PPADD">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>SUCCESS</strong> Your Product Added Successfully
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
                    <h4>Product Information</h4>
                </div>

                <div class="panel-body form-group form-group-sm prodiv">
                    <form method="post" enctype="multipart/form-data">


                        <div class="row">

                            <div class="col-xs-4 mt-1">


                                <input type="file" required name="img" id="product_image"
                                    class="form-control  pimage inpadd">
                            </div>

                            <div class="col-xs-4 mt-1">
                                <input type="text" required class="form-control  invoinput inpadd" name="product_name"
                                    placeholder="Enter Product Name">
                            </div>

                            <div class="col-xs-4 mt-1">
                                <input type="text" required class="form-control  invoinput inpadd" name="product_size"
                                    placeholder="Enter Product Size
                            ">
                            </div>


                            <div class="col-xs-4 mt-1">
                                <input type="number" required class="form-control  invoinput inpadd"
                                    name="product_price" placeholder="Enter Price">
                            </div>





                        </div>
                        <div class="row">
                            <center>
                                <div class="col-xs-12 margin-top btn-group ">
                                    <input type="submit" id="" value="ADD Product" class="btn btn-success btn-c "
                                        name="addproduct">
                                </div>
                            </center>
                        </div>
                    </form>
                </div>

            </div>
        </center>
    </div>
    <div>