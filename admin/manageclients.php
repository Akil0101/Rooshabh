<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Manage clients</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Manage clients</h6>
</nav>


             
    <center>
        <h2>Add clients</h2>
    </center>



    <div class="AC">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>SUCCESS</strong> Your clients Added Successfully
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>



    <div class="row">
        <div class="col-xs-12">
            <center>
            

                <div class="panel-body form-group form-group-sm prodiv">
                    <form method="post" enctype="multipart/form-data">


                        <div class="row">



                            <div class="col-xs-4 mt-1">

                                <input type="file" required name="clients" id="clients" class="form-control  pimage inpadd">
                            </div>









                        </div>
                        <div class="row">
                            <center>
                                <div class="col-xs-12 margin-top btn-group">
                                    <input type="submit"  id="action_add_product" value="Add"
                                        class="btn btn-success float-right" name="addclient">
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

    <div class="ACD">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>SUCCESS</strong> Your clients Deleted Successfully
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    </div>
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Manage clients</h5>
                        <div class="container mydata">
                            <?php
                            ?>
                            <!-- Table with stripped rows -->
                            <table id="tab" class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>clients</th>
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

                <img src="" alt="">
            </div>
        </div>
    </section>
    <script>
    
                                $(document).ready(function () {


                                    //    clients Fetch
                                    $.ajax({

                                        url: "<?php echo $mainurl; ?>clientsfetch",

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
                                                cell2.innerHTML = "<img src="+item['clients_img']+" class='climg' alt=''>";
                                                cell3.innerHTML = "<form  method='post'><input type='hidden' name='cid'value='"+item['id']+"'><input type='hidden' name='climg' value='"+item['clients_img']+"'><button type='submit'  name='cldelete'class='delete btn btn-danger mr-sm-2'>Delete</button></form>";
                                                 i++;
                                         } );







                                        }

                                    });




                                });
                            </script>
                            