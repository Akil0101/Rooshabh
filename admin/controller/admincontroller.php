<?php

require_once("model/adminmodel.php");


error_reporting(0);

class admincontroller extends adminmodel
{
    public function __construct()
    {



        parent::__construct();
        // logic for admin login
        if (isset($_POST["log"])) {
            $em = $_POST["txt_email"];
            $pass = $_POST["txt_password"];
            $chk = $this->adminlogin('admin', $em, $pass);
            if ($chk) {
                echo "<script>
                alert('You are Logged in successfully')
                window.location='admin-dashboard-pi';
                </script>";
            } else {
                echo "<script>
                alert('Your email and password are Incorrect try again')
                window.location='./';
                </script>";
            }
        }
        $OLPA = 0;
        $CPA=0;
        $NPC=0;
        // change password admin logic
        if (isset($_POST["changepass"])) {
            $id = $_SESSION["admin_id"];
            $opass = $_POST["opass"];
            $npass = $_POST["npass"];
            $cpass = $_POST["cpass"];

            $oldpass = $this->onepro($id, "admin","id" );
         
           
            if ($opass== $oldpass['password'] ) {

                if ($npass == $cpass) {
                    
                    $data="password='$npass'";
                     $chk=$this->updatealldata("admin",$id,$data,"id");
                     $NPC=1;

                } else {

                    $CPA=1;
            
                }


            } else {

                $OLPA = 1;

            }

        }




        $products = $this->selectalldata("product");

        $header = $this->one("header");
        $banner = $this->one("banner");
        $service = $this->selectalldata("service");
        $about = $this->one("about");
        $aboutpoint = $this->selectalldata("aboutpoint");
        $clients = $this->selectalldata("clients");
        $callto = $this->one("callto");
        $portcat = $this->selectalldata("portfolio_cat");
        $invoicelist = $this->selectalldata("invoice");
        $portpro = $this->selectalldata("portfolio");
        $testi_bg = $this->one("testimonials_bg");
        $tp = $this->selectalldata("testimonials");
        $op = $this->selectalldata("about_team");
        $contact = $this->one("contact");
        $footer = $this->one("footer");
        $customer = $this->selectalldata("customers");

        // logic for add product
        if (isset($_POST['addproduct'])) {
            $PPADD = 0;
            $tmp_name = $_FILES["img"]["tmp_name"];
            $name = $_FILES["img"]["name"];
            $path = "upload/products/" . $name;
            move_uploaded_file($tmp_name, $path);
            $proname = $_POST['product_name'];
            $prosize = $_POST['product_size'];
            $proprice = $_POST['product_price'];
            $data = array("product_image" => $path, "product_name" => $proname, "product_size" => $prosize, "product_price" => $proprice);
            $chk = $this->insalldata("product", $data);
            $PPADD = 1;
        }

        //logic for delete products

        if (isset($_POST['pdelete'])) {
            $PPDD = 0;
            $id = $_POST['pid'];
            $oldimg = $_POST['oldimg'];
            $chk = $this->delete($id, "product", "id");

            unlink($oldimg);
            $PPDD = 1;


        }
        //logic for delete About Point
        $apdelete = 0;
        if (isset($_POST['apdelete'])) {
            $id = $_POST['apid'];

            $chk = $this->delete($id, "aboutpoint", "id");
            if ($chk) {

                $apdelete = 1;

            }
        }

        //logic for delete invoice

        if (isset($_POST['iidelete'])) {
            $II = 0;
            $id = $_POST['iid'];

            $chk = $this->delete($id, "invoice", "id");
            $chk = $this->delete($id, "invoice_item", "invoice_id");


            $II = 1;


        }


        //invoice logic


        // $_SESSION['name']="";
        // $_SESSION['address']="";
        // $_SESSION['email']="";
        // $_SESSION['phone']="";
        // $_SESSION['gst']="";
        // $_SESSION['transpot']="";

//logic for selecting customer
if (isset($_POST["selectcust"])) {

    $sid=$_POST["sid"];

    $cust=$this->onepro($sid,"customers","id");

    $_SESSION['name'] = $cust['name'];
    $_SESSION['address'] = $cust['address'];
    $_SESSION['email'] = $cust['email'];
    $_SESSION['phone'] = $cust['phone'];



}




        if (isset($_POST['addpro'])) {

            if (isset($_SESSION['token'])) {



            } else {


                $name = $_POST['Name'];
                $address = $_POST['address'];
                $email = $_POST['Email'];
                $phone = $_POST['Phone'];
                $gst = $_POST['gst'];
                $trans = $_POST['transpot'];
                $token = rand(0000000, 9999999);


                $data="name='$name' and phone='$phone'";
                $chk=$this->chkdata("customers",$data);
    
               if($chk<1){
    
               $data1=array("name" => $name, "address" => $address, "email" => $email, "phone" => $phone);
    
                $chk1=$this->insalldata("customers",$data1);
                $CUSTO=1;
            }

                $_SESSION['token'] = $token;
                $_SESSION['name'] = $name;
                $_SESSION['address'] = $address;
                $_SESSION['email'] = $email;
                $_SESSION['phone'] = $phone;
                $_SESSION['gst'] = $gst;
                $_SESSION['transpot'] = $trans;

                $data = array("name" => $name, "address" => $address, "email" => $email, "mobile" => $phone, "token" => $token, "gst" => $gst, "transport" => $trans);
                $chk = $this->insalldata("invoice", $data);
                $test = false;

            }

        }

        //invoice add product
        if (isset($_POST['iaddproduct'])) {

            $qty = $_POST['pqty'];
            $pid = $_POST['pid'];
            $prod = $this->onepro($pid, "product", "id");
            $invo = $this->onepro($_SESSION['token'], "invoice", "token");
            $total = $prod['product_price'] * $qty;
            $data = array("invoice_id" => $invo['id'], "Product_img" => $prod['product_image'], "product_name" => $prod['product_name'], "product_size" => $prod['product_size'], "product_qty" => $qty, "product_price" => $prod['product_price'], "total" => $total);

            $chk = $this->insalldata("invoice_item", $data);
            echo "<script>
    
                window.location='createinvoice';
                </script>";
        }

        //fetch invoice item
        if (isset($_SESSION['token'])) {
            $invo = $this->onepro($_SESSION['token'], "invoice", "token");
            $item = $this->select("invoice_item", "invoice_id", $invo['id']);
            $stotal = $this->subtotal("invoice_item", "total", "invoice_id", $invo['id']);
            if (isset($_SESSION['total'])) {
                $gstamount = ($_SESSION['total'] * $_SESSION['gst']) / 100;
                $grandtotal = $_SESSION['total'] + $gstamount + $_SESSION['transpot'];
            }
        }

        //delete invoice item
        $idelete = 0;
        if (isset($_POST['itemd'])) {
            $id = $_POST['pid'];

            $chk = $this->delete($id, "invoice_item", "id");
            if ($chk) {

                $idelete = 1;



            }
            echo "<script>
            window.location='createinvoice';
            
            </script>";
        }



        //     include('invoice.php');
        //    $html = ob_get_contents();



        //save invoice logic
        if (isset($_POST['saveinvo'])) {
            $_SESSION['nots'] = $_POST['notes'];
            $notes = $_SESSION['nots'];
            $data = "nots='$notes'";
            $chk = $this->updatealldata("invoice", $_SESSION['token'], $data, "token");

            echo "<script>
            window.location='test';
            
            </script>";




        }

        //Download  invoice logic
        if (isset($_POST['iidownload'])) {


            $id = $_POST['iid'];

            $invo = $this->onepro($id, "invoice", "id");
            $item = $this->select("invoice_item", "invoice_id", $invo['id']);
            $stotal = $this->subtotal("invoice_item", "total", "invoice_id", $invo['id']);
            foreach ($stotal as $row) {
                // echo $row['total'];
                $_SESSION['total'] = $row['total'];
            }

            if (isset($_SESSION['total'])) {
                $gstamount = ($_SESSION['total'] * $_SESSION['gst']) / 100;
                $grandtotal = $_SESSION['total'] + $gstamount + $_SESSION['transpot'];
            }

            $_SESSION['token'] = $invo['token'];
            $_SESSION['name'] = $invo['name'];
            $_SESSION['address'] = $invo['address'];
            $_SESSION['email'] = $invo['email'];
            $_SESSION['phone'] = $invo['mobile'];
            $_SESSION['gst'] = $invo['gst'];
            $_SESSION['transpot'] = $invo['transport'];
            $_SESSION['nots'] = $invo['nots'];


            echo "<script>
                window.location='test';
                
                </script>";




        }

        //logic for add customer

        if(isset($_POST['addcustomer'])){
            $CUSTO=0;
            $ACUSTO=0;
            $name = $_POST['Name'];
            $address = $_POST['address'];
            $email = $_POST['Email'];
            $phone = $_POST['Phone'];

            $data="name='$name' and phone='$phone'";
            $chk=$this->chkdata("customers",$data);

           if($chk<1){

           $data1=array("name" => $name, "address" => $address, "email" => $email, "phone" => $phone);

            $chk1=$this->insalldata("customers",$data1);
            $CUSTO=1;
        }else{
            $ACUSTO=1;
        }
    }
        //logic for update header
        if (isset($_POST['uphead'])) {

            $headeral = 0;
            $bid = $_POST['bid'];
            $bname = $_POST['brand_name'];
            $data = "brand_name='$bname'";
            $chk = $this->updatealldata("header", $bid, $data, "id");

            if ($chk) {

                $headeral = 1;


            }


        }

        //logic for update footer
        if (isset($_POST['upfoot'])) {

            $FF = 0;
            $bid = $_POST['fid'];
            $facebook = $_POST['facebook'];
            $instagram = $_POST['instagram'];
            $twiter = $_POST['twiter'];
            $linkdin = $_POST['linkdin'];

            $data = "facebook='$facebook',instagram='$instagram',twiter='$twiter',linkdin='$linkdin'";
            $chk = $this->updatealldata("footer", $bid, $data, "id");

            if ($chk) {

                $FF = 1;


            }


        }

        $rootPath = $_SERVER['DOCUMENT_ROOT'];

        //logic for update banner 
        if (isset($_POST['upban'])) {

            $BA = 0;
            $b = $_POST['bnid'];


            $target_dir = "upload/banner/";

            $target_file = $target_dir . basename($_FILES['banner_img']['name']);

            if (move_uploaded_file($_FILES['banner_img']['tmp_name'], $target_file)) {

                unlink($_POST['old_banner']);
            }

            $data = "banner_img='$target_file'";
            $chk = $this->updatealldata("banner", $b, $data, "id");

            if ($chk) {

                $BA = 1;


            }

        }
        // logic for add services
        $SA = 0;
        if (isset($_POST['upser'])) {

            $target_dir = "upload/services/";
            $target_file = $target_dir . basename($_FILES['sicon']['name']);
            move_uploaded_file($_FILES['sicon']['tmp_name'], $target_file);

            $sname = $_POST['sname'];
            $sdes = $_POST['sdes'];
            $data = array("icon" => $target_file, "name" => $sname, "des" => $sdes);

            $chk = $this->insalldata("service", $data);

            $SA = 1;


        }




        //logic for delete services
        if (isset($_POST['des'])) {

            $sid = $_POST['sid'];
            $oimg = $_POST['oldimg'];
            $chk = $this->delete($sid, "service", "sid");
            unlink($oimg);


        }

        //logic for delete Clients
        if (isset($_POST['cldelete'])) {
            $ACD = 0;
            $sid = $_POST['cid'];
            $oimg = $_POST['climg'];
            $chk = $this->delete($sid, "clients", "id");

            unlink($oimg);


            $ACD = 1;




        }

        //logic for delete Clients
        if (isset($_POST['pcdelete'])) {
            $PCD = 0;
            $sid = $_POST['pcid'];

            $chk = $this->delete($sid, "portfolio_cat", "id");




            $PCD = 1;




        }

         //logic for delete Customer
         if (isset($_POST['cddelete'])) {
            $CDD = 0;
            $sid = $_POST['cdid'];

            $chk = $this->delete($sid, "customers", "id");




            $CDD = 1;




        }

        //logic for delete portfolio product
        if (isset($_POST['ppdelete'])) {
            $PPD = 0;
            $sid = $_POST['ppid'];
            $oimg = $_POST['oldpp'];
            $chk = $this->delete($sid, "portfolio", "id");

            unlink($oimg);


            $PPD = 1;




        }
        //logic for delete services
        if (isset($_POST['tpdelete'])) {
            $TPD = 0;
            $sid = $_POST['tpid'];
            $oimg = $_POST['old_img'];
            $chk = $this->delete($sid, "testimonials", "id");
            unlink($oimg);
            $TPD = 1;

        }

        //logic for delete about our team member
        if (isset($_POST['opdelete'])) {
            $OPD = 0;
            $sid = $_POST['opid'];
            $oimg = $_POST['old_img'];
            $chk = $this->delete($sid, "about_team", "id");
            unlink($oimg);
            $OPD = 1;

        }

        //logic for update about 
        if (isset($_POST['upabout'])) {

            $AB = 0;
            $aid = $_POST['aid'];
            $img = $_FILES['aimg']['name'];
            $oldimg = $_POST['oimg'];
            $title = $_POST['title'];
            $fpara = $_POST['fpara'];
            $lpara = $_POST['lpara'];
            $target_dir = "upload/about/";


            if ($img != '') {

                $target_file = $target_dir . basename($_FILES['aimg']['name']);

                if (move_uploaded_file($_FILES['aimg']['tmp_name'], $target_file)) {

                    unlink($_POST['oimg']);
                }

                $data = "title='$title',img='$target_file',1para='$fpara',2para='$lpara'";
                $chk = $this->updatealldata("about", $aid, $data, "id");

                if ($chk) {

                    $AB = 1;


                }
            } else {

                $data = "title='$title',img='$oldimg',1para='$fpara',2para='$lpara'";
                $chk = $this->updatealldata("about", $aid, $data, "id");

                if ($chk) {

                    $AB = 1;


                }

            }

        }

        //logic for add about point
        if (isset($_POST['aboutpoint'])) {
            $AP = 0;
            $MX = 0;
            $point = $_POST['point'];
            $data = array("point" => $point);


            $count = $this->countrow("aboutpoint");

            if ($count >= 4) {

                $MX = 1;
            } else {
                $chk = $this->insalldata('aboutpoint', $data);

                if ($chk) {
                    $AP = 1;

                }

            }
        }

        //logic for Add clients 
        if (isset($_POST['addclient'])) {

            $AC = 0;



            $target_dir = "upload/clients/";

            $target_file = $target_dir . basename($_FILES['clients']['name']);

            move_uploaded_file($_FILES['clients']['tmp_name'], $target_file);



            $data = array("clients_img" => $target_file);
            $chk = $this->insalldata("clients", $data);

            if ($chk) {

                $AC = 1;


            }

        }

        //logic for update calltoaction img 
        if (isset($_POST['upcall'])) {

            $CL = 0;
            $b = $_POST['clid'];


            $target_dir = "upload/calltoaction/";

            $target_file = $target_dir . basename($_FILES['call_img']['name']);

            if (move_uploaded_file($_FILES['call_img']['tmp_name'], $target_file)) {

                unlink($_POST['old_call']);
            }

            $data = "call_img='$target_file'";
            $chk = $this->updatealldata("callto", $b, $data, "id");

            if ($chk) {

                $CL = 1;


            }

        }

        //logic for add portfolio Category
        if (isset($_POST['port_cate'])) {

            $POC = 0;

            $pname = $_POST['port_cat'];

            $data = array("port_cat" => $pname);
            $chk = $this->insalldata("portfolio_cat", $data);

            if ($chk) {

                $POC = 1;


            }


        }


        //logic for  add portfolio product
        if (isset($_POST['pp_add'])) {

            $PP = 0;

            $ppcat = $_POST['pp_cat'];
            $ppname = $_POST['pp_name'];
            $ppdes = $_POST['pp_des'];
            $target_dir = "upload/portfolio/";



            $target_file = $target_dir . basename($_FILES['pp_img']['name']);

            move_uploaded_file($_FILES['pp_img']['tmp_name'], $target_file);

            $data = array("	p_category" => $ppcat, "	p_img" => $target_file, "	p_name" => $ppname, "	p_des" => $ppdes, );
            $chk = $this->insalldata("portfolio", $data);



            if ($chk) {

                $PP = 1;


            }





        }

        //logic for update testimonials bg 
        if (isset($_POST['uptestiimg'])) {

            $TT = 0;
            $b = $_POST['tid'];


            $target_dir = "upload/testimonials/bg/";

            $target_file = $target_dir . basename($_FILES['timg']['name']);

            if (move_uploaded_file($_FILES['timg']['tmp_name'], $target_file)) {

                unlink($_POST['oimg']);
            }

            $data = "testimonials_img='$target_file'";
            $chk = $this->updatealldata("testimonials_bg", $b, $data, "id");

            if ($chk) {

                $TT = 1;


            }

        }


        //logic for  add testimonials person product
        if (isset($_POST['tp_add'])) {

            $TP = 0;

            $tpname = $_POST['tp_name'];
            $tppost = $_POST['tp_post'];
            $tpdes = $_POST['tp_des'];
            $target_dir = "upload/testimonials/person/";



            $target_file = $target_dir . basename($_FILES['tp_img']['name']);

            move_uploaded_file($_FILES['tp_img']['tmp_name'], $target_file);

            $data = array("img" => $target_file, "name" => $tpname, "post" => $tppost, "des" => $tpdes, );
            $chk = $this->insalldata("testimonials", $data);



            if ($chk) {

                $TP = 1;


            }





        }

        //logic for  add about our team person product
        if (isset($_POST['op_add'])) {

            $OP = 0;

            $opname = $_POST['op_name'];
            $oppost = $_POST['op_role'];
            $optwit = $_POST['op_twit'];
            $opface = $_POST['op_face'];
            $opinsta = $_POST['op_insta'];
            $oplinkd = $_POST['op_linkd'];

            $target_dir = "upload/our-team/";



            $target_file = $target_dir . basename($_FILES['op_img']['name']);

            move_uploaded_file($_FILES['op_img']['tmp_name'], $target_file);

            $data = array("img" => $target_file, "name" => $opname, "role" => $oppost, "twiter" => $optwit, "facebook" => $opface, "instagram" => $opinsta, "linkdin" => $oplinkd, );
            $chk = $this->insalldata("about_team", $data);



            if ($chk) {

                $OP = 1;


            }





        }

        //logic for update contact us 
        if (isset($_POST['upcontact'])) {

            $COU = 0;
            $aid = $_POST['coid'];
            $location = $_POST['location'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $password = $_POST['password'];



            $data = "location='$location',address='$address',phone='$phone',email='$email',password='$password'";
            $chk = $this->updatealldata("contact", $aid, $data, "id");

            $COU = 1;



        }


        //load views of admin create an routing
        if (isset($_SERVER["PATH_INFO"])) {
            switch ($_SERVER["PATH_INFO"]) {
                case '/':
                    require_once("index.php");
                    require_once("login.php");
                    break;

                case '/admin-dashboard-pi':
                    if (isset($_SESSION["admin_id"])) {
                        require_once("index.php");
                        require_once("navbar.php");
                        require_once("dashboard.php");

                        require_once("footer.php");
                    } else {
                        echo "<script>window.location.assign('http://localhost/work/morbi/tmorbi/admin/')</script>";
                    }
                    break;

                    case '/admin-dashboard-line':
                        if (isset($_SESSION["admin_id"])) {
                            require_once("index.php");
                            require_once("navbar.php");
                            require_once("dashboardline.php");
    
                            require_once("footer.php");
                        } else {
                            echo "<script>window.location.assign('http://localhost/work/morbi/tmorbi/admin/')</script>";
                        }
                        break;

                        case '/admin-dashboard-bar':
                            if (isset($_SESSION["admin_id"])) {
                                require_once("index.php");
                                require_once("navbar.php");
                                require_once("dashboardbar.php");
        
                                require_once("footer.php");
                            } else {
                                echo "<script>window.location.assign('http://localhost/work/morbi/tmorbi/admin/')</script>";
                            }
                            break;

                case '/add-product':
                    if (isset($_SESSION["admin_id"])) {
                        require_once("index.php");
                        require_once("navbar.php");
                        require_once("add-product.php");
                        require_once("footer.php");
                    } else {
                        echo "<script>window.location.assign('http://localhost/work/morbi/tmorbi/admin/')</script>";
                    }
                    break;

                case '/manage-product':
                    if (isset($_SESSION["admin_id"])) {
                        require_once("index.php");
                        require_once("navbar.php");
                        require_once("manage-product.php");
                        require_once("footer.php");
                    } else {
                        echo "<script>window.location.assign('http://localhost/work/morbi/tmorbi/admin/')</script>";
                    }
                    break;

                // case '/add-pro':
                //     if (isset($_SESSION["admin_id"])) {
                //         require_once("index.php");
                //         require_once("navbar.php");
                //         require_once("add-product.php");
                //         require_once("footer.php");
                //     } else {
                //         echo "<script>window.location.assign('http://localhost/work/morbi/tmorbi/admin/')</script>";
                //     }
                //     break;

                case '/createinvoice':
                    if (isset($_SESSION["admin_id"])) {
                        require_once("index.php");
                        require_once("navbar.php");
                        require_once("createinvoice.php");
                        require_once("footer.php");
                    } else {
                        echo "<script>window.location.assign('http://localhost/work/morbi/tmorbi/admin/')</script>";
                    }
                    break;

                case '/manageinvoice':
                    if (isset($_SESSION["admin_id"])) {
                        require_once("index.php");
                        require_once("navbar.php");
                        require_once("manageinvoice.php");
                        require_once("footer.php");
                    } else {
                        echo "<script>window.location.assign('http://localhost/work/morbi/tmorbi/admin/')</script>";
                    }
                    break;

                case '/admin-changepassword':
                    if (isset($_SESSION["admin_id"])) {
                        require_once("index.php");
                        require_once("navbar.php");
                        require_once("admin-changepassword.php");
                        require_once("footer.php");
                    } else {
                        echo "<script>window.location.assign('http://localhost/work/morbi/tmorbi/admin/')</script>";
                    }
                    break;

                    case '/managecustomers':
                        if (isset($_SESSION["admin_id"])) {
                            require_once("index.php");
                            require_once("navbar.php");
                            require_once("managecustomers.php");
                            require_once("footer.php");
                        } else {
                            echo "<script>window.location.assign('http://localhost/work/morbi/tmorbi/admin/')</script>";
                        }
                        break;

                case '/header':
                    if (isset($_SESSION["admin_id"])) {
                        require_once("index.php");
                        require_once("navbar.php");
                        require_once("header.php");
                        require_once("footer.php");
                    } else {
                        echo "<script>window.location.assign('http://localhost/work/morbi/tmorbi/admin/')</script>";
                    }
                    break;

                case '/banner':
                    if (isset($_SESSION["admin_id"])) {
                        require_once("index.php");
                        require_once("navbar.php");
                        require_once("banner.php");
                        require_once("footer.php");
                    } else {
                        echo "<script>window.location.assign('http://localhost/work/morbi/tmorbi/admin/')</script>";
                    }
                    break;

                case '/addservices':
                    if (isset($_SESSION["admin_id"])) {
                        require_once("index.php");
                        require_once("navbar.php");
                        require_once("addservices.php");
                        require_once("footer.php");
                    } else {
                        echo "<script>window.location.assign('http://localhost/work/morbi/tmorbi/admin/')</script>";
                    }
                    break;

                case '/manageservices':
                    if (isset($_SESSION["admin_id"])) {
                        require_once("index.php");
                        require_once("navbar.php");
                        require_once("manageservices.php");
                        require_once("footer.php");
                    } else {
                        echo "<script>window.location.assign('http://localhost/work/morbi/tmorbi/admin/')</script>";
                    }
                    break;

                case '/editabout':
                    if (isset($_SESSION["admin_id"])) {
                        require_once("index.php");
                        require_once("navbar.php");
                        require_once("editabout.php");
                        require_once("footer.php");
                    } else {
                        echo "<script>window.location.assign('http://localhost/work/morbi/tmorbi/admin/')</script>";
                    }
                    break;

                case '/manageclients':
                    if (isset($_SESSION["admin_id"])) {
                        require_once("index.php");
                        require_once("navbar.php");
                        require_once("manageclients.php");
                        require_once("footer.php");
                    } else {
                        echo "<script>window.location.assign('http://localhost/work/morbi/tmorbi/admin/')</script>";
                    }
                    break;

                case '/calltoaction':
                    if (isset($_SESSION["admin_id"])) {
                        require_once("index.php");
                        require_once("navbar.php");
                        require_once("calltoaction.php");
                        require_once("footer.php");
                    } else {
                        echo "<script>window.location.assign('http://localhost/work/morbi/tmorbi/admin/')</script>";
                    }
                    break;

                case '/manageportfolio':
                    if (isset($_SESSION["admin_id"])) {
                        require_once("index.php");
                        require_once("navbar.php");
                        require_once("manageportfolio.php");
                        require_once("footer.php");
                    } else {
                        echo "<script>window.location.assign('http://localhost/work/morbi/tmorbi/admin/')</script>";
                    }
                    break;

                case '/managetestimonials':
                    if (isset($_SESSION["admin_id"])) {
                        require_once("index.php");
                        require_once("navbar.php");
                        require_once("managetestimonials.php");
                        require_once("footer.php");
                    } else {
                        echo "<script>window.location.assign('http://localhost/work/morbi/tmorbi/admin/')</script>";
                    }
                    break;

                case '/manageourteam':
                    if (isset($_SESSION["admin_id"])) {
                        require_once("index.php");
                        require_once("navbar.php");
                        require_once("ourteam.php");
                        require_once("footer.php");
                    } else {
                        echo "<script>window.location.assign('http://localhost/work/morbi/tmorbi/admin/')</script>";
                    }
                    break;

                case '/changepassword':
                    if (isset($_SESSION["admin_id"])) {
                        require_once("index.php");
                        require_once("navbar.php");
                        require_once("changepassword.php");
                        require_once("footer.php");
                    } else {
                        echo "<script>window.location.assign('http://localhost/work/morbi/tmorbi/admin/')</script>";
                    }
                    break;

                case '/updatecontactus':
                    if (isset($_SESSION["admin_id"])) {
                        require_once("index.php");
                        require_once("navbar.php");
                        require_once("contactus.php");
                        require_once("footer.php");
                    } else {
                        echo "<script>window.location.assign('http://localhost/work/morbi/tmorbi/admin/')</script>";
                    }
                    break;

                case '/footer':
                    if (isset($_SESSION["admin_id"])) {
                        require_once("index.php");
                        require_once("navbar.php");
                        require_once("managefooter.php");
                        require_once("footer.php");
                    } else {
                        echo "<script>window.location.assign('http://localhost/work/morbi/tmorbi/admin/')</script>";
                    }
                    break;



                case '/test':

                    require_once("index.php");
                    require_once("invoice.php");


                    break;

                case '/fetchfooter':

                    require_once("index.php");
                    require_once("fetchfooter.php");

                    break;

                case '/gstamount':

                    require_once("index.php");
                    require_once("gstamount.php");

                    break;

                case '/hederfetch':

                    require_once("index.php");
                    require_once("fetchhed.php");

                    break;

                case '/bannerfetch':

                    require_once("index.php");
                    require_once("fetchban.php");


                    break;

                case '/servicefetch':

                    require_once("index.php");
                    require_once("servicefetch.php");


                    break;

                case '/aboutfetch':

                    require_once("index.php");
                    require_once("aboutfetch.php");


                    break;

                case '/aboutpointfetch':

                    require_once("index.php");
                    require_once("aboutpointfetch.php");


                    break;

                case '/clientsfetch':

                    require_once("index.php");
                    require_once("clientsfetch.php");


                    break;

                case '/calltoactionfech':

                    require_once("index.php");
                    require_once("calltoactionfech.php");


                    break;

                    case '/customerfetch':

                        require_once("index.php");
                        require_once("fechtcustomer.php");
    
    
                        break;

                case '/portfoliocatfech':

                    require_once("index.php");
                    require_once("portfoliocatfech.php");


                    break;
                case '/portfolioprofech':

                    require_once("index.php");
                    require_once("portfolioprofech.php");


                    break;
                case '/testifech':

                    require_once("index.php");
                    require_once("testifech.php");


                    break;

                case '/tpfech':

                    require_once("index.php");
                    require_once("tpfech.php");


                    break;

                case '/opfech':

                    require_once("index.php");
                    require_once("opfech.php");


                    break;

                case '/contactfech':

                    require_once("index.php");
                    require_once("contactfech.php");


                    break;

                case '/productfech':

                    require_once("index.php");
                    require_once("productfech.php");


                    break;
                case '/invoicefech':

                    require_once("index.php");
                    require_once("invoicefech.php");


                    break;


                default:
                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("404.php");
                    require_once("footer.php");
                    break;
            }
        }
    }
}

$obj = new admincontroller;
?>