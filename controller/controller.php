<?php

require_once("model/model.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once("PHPMailer.php");
require_once("Exception.php");
require_once("SMTP.php");
error_reporting(0);
class controller extends model
{

    public function __construct()
    {
        parent::__construct();

        //fecth header name
        $header = $this->one("header");
        $banner = $this->one("banner");
        $about = $this->one("about");
        $aboutpoint = $this->selectalldata("aboutpoint");
        $service = $this->selectalldata("service");
        $clients = $this->selectalldata("clients");
        $portcat = $this->selectalldata("portfolio_cat");
        $portpro = $this->selectalldata("portfolio");
        $testibg = $this->one("testimonials_bg");
        $testip = $this->selectalldata("testimonials");
        $team = $this->selectalldata("about_team");
        $contactus = $this->one("contact");
        $products = $this->selectalldata("product");
        $EE = 0;
        //logic for sending email for contacts us
        if (isset($_POST['sendm'])) {

            $name = $_POST["name"];
            $email = $_POST["email"];
            $subject = $_POST["subject"];
            $mg = $_POST["message"];

            $mail = new PHPMailer(true);
            //Server settings
            $mail->SMTPDebug = false;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth = true;                                   //Enable SMTP authentication
            $mail->Username = $contactus['email'];                     //SMTP username
            $mail->Password = $contactus['password'];                              //SMTP password
            $mail->SMTPSecure = "TLS";            //Enable implicit TLS encryption
            $mail->Port = 587;
            //Recipients
            $mail->setFrom($_POST["email"], 'Mailer');
            $mail->addAddress('akilbadi194@gmail.com', 'Massege');

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body = "Name is:" . $name . "<br>" . "Email is: " . $email . "<br>" . "Massege:" . $mg . "<br>" . "For any fraud Contact with admin Immediately on Mobile numbers :" . $contactus['phone'] . "<br>Email  us on <a href='" . $contactus['email'] . "'>" . $contactus['email'] . "</a>";
            $mail->send();
            $EE = 1;
            echo "<script>window.onload = function(){
   if (location.hash === 'contact') {
      goto('#contact', this);
   }
} </script>";
        }

        //logic for estimate page
        
        
        // unset($_SESSION['etoken']);
        // unset($_SESSION['ename']);
        // unset($_SESSION['eaddress']);
        // unset($_SESSION['eemail']);
        // unset($_SESSION['ephone']);
        // unset($_SESSION['etotal']);
        if (isset($_POST['addpro'])) {

            if (isset($_SESSION['etoken'])) {



            } else {

                $name = $_POST['Name'];
                $address = $_POST['address'];
                $email = $_POST['Email'];
                $phone = $_POST['Phone'];

                $token = rand(0000000, 9999999);


                $_SESSION['etoken'] = $token;
                $_SESSION['ename'] = $name;
                $_SESSION['eaddress'] = $address;
                $_SESSION['eemail'] = $email;
                $_SESSION['ephone'] = $phone;


                $data = array("name" => $name, "address" => $address, "email" => $email, "mobile" => $phone, "token" => $token);
                $chk = $this->insalldata("estimate", $data);


            }

        }

             //estimate add product
             if (isset($_POST['eaddproduct'])) {

                $qty = $_POST['pqty'];
                $pid = $_POST['pid'];
                $prod = $this->onepro($pid, "product", "id");
                $esti = $this->onepro($_SESSION['etoken'], "estimate", "token");
                $total = $prod['product_price'] * $qty;
                $data = array("esti_id" => $esti['id'], "Product_img" => $prod['product_image'], "product_name" => $prod['product_name'], "product_size" => $prod['product_size'], "product_qty" => $qty, "product_price" => $prod['product_price'], "total" => $total);
    
                $chk = $this->insalldata("estimate_item", $data);
                echo "<script>
        
                    window.location='estimate';
                    </script>";
            }

              //fetch estimate item
        if (isset($_SESSION['etoken'])) {
            $esti = $this->onepro($_SESSION['etoken'], "estimate", "token");
            $item = $this->select("estimate_item", "esti_id", $esti['id']);
            $stotal = $this->subtotal("estimate_item", "total", "esti_id", $esti['id']);
           
        }

         //delete estimate item
         $idelete = 0;
         if (isset($_POST['itemd'])) {
             $id = $_POST['pid'];
 
             $chk = $this->delete($id, "estimate_item", "id");
             if ($chk) {
 
                 $idelete = 1;
 
 
 
             }
             echo "<script>
             window.location='estimate';
             
             </script>";
         }
 
         //logic for download estimate
         if(isset($_POST['saveesti'])){

            echo "<script>
            window.location='downloadestimate';
            
            </script>";

         }
    

        // load your template using routing
        if (isset($_SERVER["PATH_INFO"])) {

            switch ($_SERVER["PATH_INFO"]) {
                case '/':

                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("banner.php");
                    require_once("about.php");
                    require_once("clients.php");
                    require_once("Features.php");
                    require_once("services.php");
                    require_once("calltoaction.php");
                    require_once("portfolio.php");
                    require_once("status.php");
                    require_once("testimonials.php");
                    require_once("team.php");
                    require_once("contact.php");
                    require_once("footer.php");

                    break;

                case '/about':

                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("banner.php");
                    require_once("about.php");
                    require_once("footer.php");

                    break;


                case '/services':

                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("banner.php");
                    require_once("services.php");
                    require_once("footer.php");

                    break;

                case '/portfolio':

                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("banner.php");
                    require_once("portfolio.php");
                    require_once("footer.php");

                    break;

                case '/team':

                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("banner.php");
                    require_once("team.php");
                    require_once("footer.php");

                    break;

                case '/contact':

                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("banner.php");
                    require_once("contact.php");
                    require_once("footer.php");

                    break;

                case '/estimate':

                    require_once("index.php");
                    require_once("navbar.php");
                    require_once("banner.php");
                    require_once("estimate.php");
                    require_once("footer.php");

                    break;

                    case '/downloadestimate':

                        require_once("index.php");
                   
                        require_once("download_esti.php");
                  
    
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

$obj = new controller;

?>