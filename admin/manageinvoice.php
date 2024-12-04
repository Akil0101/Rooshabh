<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Manage Invoice</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Manage Invoice</h6>
</nav>

<div class="II">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>ALERT</strong> Your Invoice Deleted Successfully
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
                    <h5 class="card-title">Manage Products</h5>
                    <div class="container mydata">
                       
                            <!-- Table with stripped rows -->
                            <table id="myTable" class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        
                                        <th>Name</th>
                                        <th>address</th>
                                        <th>email</th>
                                        <th>phone</th>
                                        <th>date</th>
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



                //    portfolioproductfech
                $.ajax({

                    url: "<?php echo $mainurl; ?>invoicefech",

                    method: "GET",

                    success: function (response) {

                        let data = JSON.parse(response);
                        let data1 =data.reverse();
                        // console.log(data);
                        let i = 1;


                        data1.forEach(item => {
                            const table = document.getElementById("myTable").getElementsByTagName('tbody')[0];
                            const newRow = table.insertRow();
                            const cell1 = newRow.insertCell(0);
                            const cell2 = newRow.insertCell(1);
                            const cell3 = newRow.insertCell(2);
                            const cell4 = newRow.insertCell(3);
                            const cell5 = newRow.insertCell(4);
                            const cell6 = newRow.insertCell(5);
                            const cell7 = newRow.insertCell(6);
                            cell1.innerHTML = i;
                            cell2.innerHTML = item['name'];
                            cell3.innerHTML =item['address'];
                            cell4.innerHTML = item['email'];
                            cell5.innerHTML = item['mobile'];
                            cell6.innerHTML = item['date'];

                            cell7.innerHTML = " <form action='' method='post'><input type='hidden' name='iid' value="+item['id']+"><button type='submit' name='iidownload' class='delete btn btn-primary mr-sm-2'>Download</button><button type='submit' name='iidelete' class='delete btn btn-danger mr-sm-2'>Delete</button></form>";
                            i++;

                           
                        });

                    }

                });




            });
        </script>
       