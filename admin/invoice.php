<?php
// ob_start();
// include('index.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

  <title>Example 1</title>
  <style>
    .clearfix:after {
      content: "";
      display: table;
      clear: both;
    }

    a {
      color: #5D6975;
      text-decoration: underline;
    }

    body {
      float: left;
      position: relative;
      width: 600px;
      height: 29.7cm;
      margin: 0 auto;
      color: #001028;
      background: #FFFFFF;
      font-family: Arial, sans-serif;
      font-size: 12px;
      font-family: Arial;
      margin-left: 70px;
     
    }

    header {
      padding: 10px 0;
      margin-bottom: 30px;
    }

    #logo {
      text-align: center;
      margin-bottom: 10px;
    }

    #logo img {
      width: 90px;
    }

    h1 {
      border-top: 1px solid #5D6975;
      border-bottom: 1px solid #5D6975;
      color: #5D6975;
      font-size: 2.4em;
      line-height: 1.4em;
      font-weight: normal;
      text-align: center;
      margin: 0 0 20px 0;
      background: url(dimension.png);
    }

    #project {
      float: left;
    }

    #project span {
      color: #5D6975;
      text-align: right;
      width: 52px;
      margin-right: 10px;
      display: inline-block;
      font-size: 0.8em;
    }

    #company {
      float: right;
      text-align: right;
    }

    #project div,
    #company div {
      white-space: nowrap;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      border-spacing: 0;
      margin-bottom: 20px;
    }

    table tr:nth-child(2n-1) td {
      background: #F5F5F5;
    }

    table th,
    table td {
      text-align: center;
    }

    table th {
      padding: 5px 20px;
      color: #5D6975;
      border-bottom: 1px solid #C1CED9;
      white-space: nowrap;
      font-weight: normal;
    }

    table .service,
    table .desc {
      text-align: left;
    }

    table td {
      padding: 20px;
      text-align: right;
    }

    table td.service,
    table td.desc {
      vertical-align: top;
    }

    table td.unit,
    table td.qty,
    table td.total {
      font-size: 1.2em;
    }

    table td.grand {
      border-top: 1px solid #5D6975;
      ;
    }

    #notices .notice {
      color: #5D6975;
      font-size: 1.2em;
    }

    footer {
      color: #5D6975;
      width: 100%;
      height: 30px;
      position: absolute;
      bottom: 0;
      border-top: 1px solid #C1CED9;
      padding: 8px 0;
      text-align: center;
    }
  </style>
</head>

<body id="in"><?php
$token = $_SESSION["token"];
$name = $_SESSION["name"];
$address = $_SESSION["address"];
$email = $_SESSION["email"];
$phone = $_SESSION["phone"];
$gst = $_SESSION["gst"];
$trans = $_SESSION["transpot"];
$total = $_SESSION["total"];
?>
  <header class="clearfix">

    <hr>
    <h1>INVOICE-<?php echo $token; ?></h1>
    <hr>
    <div id="company" class="clearfix">
      <div>Rooshabh Bathware</div>
      <div>455 Foggy Heights,<br /> AZ 85004, US</div>
      <div>(602) 519-0450</div>
      <div><a href="mailto:company@example.com">company@example.com</a></div>
    </div>
    <div id="project">

      <div><span>CLIENT</span> <?php echo $name; ?></div>

      <div><span>Phone</span> <?php echo $phone ?></div>
      <div><span>ADDRESS</span> <?php echo $address ?></div>
      <div><span>EMAIL</span> <a href="<?php echo $email; ?>"><?php echo $email; ?></a>
      </div>
      <div><span>DATE</span> <?php echo $invo["date"]; ?></div>

    </div>
  </header>
  <main>
    <table>
      <thead>
        <tr>
          <th width="15%">Sr No</th>

          <th width="38%">Product Name</th>
          <th width="10%">Size</th>
          <th width="15%">Quantity</th>
          <th width="15%">Price</th>
          <th width="15%">Total</th>

        </tr>
      </thead>
      <tbody><?php
      $i = 1;
      if (isset($item)) {
        foreach ($item as $row) {
          ?>
            <tr>
              <td><?php echo $i; ?></td>


              <td><?php echo $row["product_name"]; ?></td>
              <td><?php echo $row["product_size"]; ?></td>
              <td><?php echo $row["product_qty"]; ?></td>
              <td><?php echo $row["product_price"]; ?></td>
              <td><?php echo $row["total"]; ?></td>

            </tr><?php
            $i++;
        }
      } else {
        ?>
          <tr>
            <td>No data</td>
          </tr><?php } ?>
        <tr>
          <td colspan="5">SUBTOTAL</td>
          <td class="total">₹<?php echo $total;
          ?></td>
        </tr>
        <tr>
          <td colspan="5">GST <?php echo $gst;
          ?>%</td>
          <td class="total">₹
            <?php echo $gstamount; ?>
          </td>
        </tr>
        <tr>
          <td colspan="5">Transport Charge</td>
          <td class="total">₹<?php echo $trans;
          ?></td>
        </tr>
        <tr>
          <td colspan="5" class="grand total">GRAND TOTAL</td>
          <td class="grand total">₹<?php echo $grandtotal; ?></td>
        </tr>
      </tbody>
    </table>

    <div id="notices">
      <div>NOTES:</div>
      <div class="notice"><?php echo $_SESSION['nots']; ?></div>
    </div>
    <br>
    <div id="notices">
      <div>NOTICE:</div>
      <div class="notice">Invoice was created on a computer and is valid without the signature and seal.</div>
    </div>
  </main>

</body>

</html>


<?php
 
 
        unset($_SESSION['token']);
        unset($_SESSION['name']);
        unset($_SESSION['address']);
        unset($_SESSION['email']);
        unset($_SESSION['phone']);
        unset($_SESSION['gst']);
        unset($_SESSION['transpot']);
        unset($_SESSION['total']);
        unset($_SESSION['nots']);
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.0/html2canvas.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.2/jspdf.min.js"></script>


<script>
window.onload = function() {
  html2canvas(document.getElementById("in")).then(canvas => {

const imgData = canvas.toDataURL('image/png');

var pdf = new jsPDF("p", "mm", "a4");

pdf.addImage(imgData, 'JPEG', 0, 0, 420, 500);



pdf.save('my-pdf.pdf');
window.location='createinvoice';
});
}

</script>