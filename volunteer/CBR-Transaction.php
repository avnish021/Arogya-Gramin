<?php
include "header.php";
?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<?php
include 'connect.php';
include "../Classes/Database.php";
$v_email = $_SESSION['v_email'];
$obj = new Database();
$obj->Select("card_discount", "*", null, "V_EMAIL='$v_id'", null, null);
foreach ($obj->getResult() as list(
  "PERSONAL_CARD_RATE" => $cardrate, "PERSONAL_DISCOUNT" => $discount,
  "FAMILY_CARD_RATE" => $familycrdrate, "FAMILY_CARD_DISCOUNT" => $familyCrdDis
));
$obj->Select("volunteer", "phone,personal_card,family_card,name", null, "v_email='$v_id'", null, null);
foreach ($obj->getResult() as list("phone" => $phone, "personal_card" => $plimit, "family_card" => $flimit, "name" => $vname));
?>

<div class="content" id="cardbox">
  <div class="container">
    <div class="text-center padding">
      <h2 class="card-heading">CBR Transaction</h2>
    </div>
    <div class="btn-group btn-group-toggle responsive" data-toggle="buttons">
      <label class="btn btn-secondary active">
        <input type="radio" name="options" id="option2" autocomplete="off"> Personal Card Limit : <?php echo $plimit; ?>
      </label>
      <label class="btn btn-secondary active">
        <input type="radio" name="options" id="option3" autocomplete="off"> Family Card Limit : <?php echo $flimit; ?>
      </label>
    </div>

    <form id="submit" enctype="multipart/form-data" name="submit" method="post">
      <input type="hidden" name="transid" id="TrnsID" class="form-control" value="<?php echo RandomCode(); ?>" readonly>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="mode">Payment Mode<span class="required">*</span></label>
          <select name="mode" id="mode" class="form-control" required>
            <option value="">Select Payment Mode</option>
            <option value="Online">Online</option>
            <option value="Offline">Offline</option>
          </select>
        </div>

        <div class="form-group col-md-6">
          <label for="type">Payment Mode<span class="required">*</span></label>
          <select name="type" id="type" class="form-control" required>
            <option value="">Select Card Type</option>
            <option value="family_card">Family Card</option>
            <option value="personal_card">Personal Card</option>
          </select>
        </div>
      </div>


      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="Name">Volunteer Name<span class="required">*</span></label>
          <input type="text" name="name" id="name" class="form-control" value="<?php echo $vname; ?>" readonly>
        </div>
        <div class="form-group col-md-6">
          <label for="Gender">Volunteer Email<span class="required">*</span></label>
          <input type="text" name="email" id="userEmail" class="form-control" value="<?php echo $v_id; ?>" readonly>
        </div>
      </div>


      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="Name">Family Card/Unit<span class="required">*</span></label>
          <input type="text" name="frate" id="frate" class="form-control" value="<?php echo $familycrdrate; ?>" readonly>
        </div>
        <div class="form-group col-md-6">
          <label for="Gender">Family Card Discount<span class="required">*</span></label>
          <input type="text" name="fdiscount" id="fdiscount" class="form-control" value="<?php echo $familyCrdDis; ?>" readonly>
        </div>
      </div>


      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="Name">Quantity<span class="required">*</span></label>
          <input type="number" name="quantity" max="50" id="quantity" class="form-control" placeholder="Enter Total Card Quantity" required>
        </div>
        <div class="form-group col-md-6">
          <label for="Gender">Amount/Card<span class="required">*</span></label>
          <input type="number" name="cardamt" id="cardAmt" class="form-control" value="<?php echo $cardrate; ?>" readonly>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="Gender">Discount in(%)<span class="required">*</span></label>
          <input type="text" name="discount" max="50" id="discount" class="form-control" value="<?php echo $discount; ?>" readonly>
        </div>
        <div class="form-group col-md-6">
          <label for="aadharno">Total Amount<span class="required">*</span> </label>
          <input name="amount" type="text" id="amount" class="form-control" readonly>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="Gender">Mobile No.<span class="required">*</span></label>
          <input type="number" name="contact" value="<?php echo $phone; ?>" max="10" id="contact" class="form-control" placeholder="Enter Mobile No." readonly>
        </div>
        <div id="result"></div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-8 mt-4">
          <input type="button" class="btn btn-primary mr-4 " name="submit" id="rzp-button1" value="Make Payment">
        </div>
      </div>
      </center>
  </div>
</div>
<script>
  document.getElementById("quantity").addEventListener("keyup", function() {
    let quantity = document.getElementById("quantity").value;
    let cardamt = document.getElementById("cardAmt").value;
    let discount = document.getElementById("discount").value;
    let amount = document.getElementById("amount");
    let type = document.getElementById("type").value;

    if (type == "personal_card") {
      let tempAmt = cardamt * quantity;
      let amtAfterDiscount = tempAmt * discount / 100;
      amount.value = amtAfterDiscount;
    } else if (type == "family_card") {
      let frate = document.getElementById("frate").value;
      let fdiscount = document.getElementById("fdiscount").value;
      let tempAmt = frate * quantity;
      let amtAfterDiscount = tempAmt * fdiscount / 100;
      amount.value = amtAfterDiscount;
    }
    let tot_amount = document.getElementById("amount").value;
  });

  document.getElementById("type").addEventListener("change", function() {
    let quantity = document.getElementById("quantity").value;
    let cardamt = document.getElementById("cardAmt").value;
    let discount = document.getElementById("discount").value;
    let amount = document.getElementById("amount");
    let type = document.getElementById("type").value;

    if (type == "personal_card") {
      let tempAmt = cardamt * quantity;
      let amtAfterDiscount = tempAmt * discount / 100;
      amount.value = amtAfterDiscount;
    } else if (type == "family_card") {
      let frate = document.getElementById("frate").value;
      let fdiscount = document.getElementById("fdiscount").value;
      let tempAmt = frate * quantity;
      let amtAfterDiscount = tempAmt * fdiscount / 100;
      amount.value = amtAfterDiscount;
    }
    let tot_amount = document.getElementById("amount").value;
  });


  document.getElementById("rzp-button1").addEventListener("click", function(e) {
    let amounttoPay = document.getElementById("amount").value;
    let name = document.getElementById("name").value;
    let Trnsid = document.getElementById("TrnsID").value;
    let email = document.getElementById("userEmail").value;
    let quantity = document.getElementById("quantity").value;
    let type = document.getElementById("type").value;
    var cardamt = "";
    var discount = "";
    if (type == "personal_card") {
      cardamt = document.getElementById("cardAmt").value;
      discount = document.getElementById("discount").value;
    } else if (type == "family_card") {
      cardamt = document.getElementById("frate").value;
      discount = document.getElementById("fdiscount").value;
    }
    let amount = document.getElementById("amount");
    let contact = document.getElementById("contact").value;
    let mode = document.getElementById("mode").value;
    let tot_amount = amount.value;

    if (amounttoPay != "" && name != "" && email != "" && quantity != "" && cardamt != "" && discount != "" && amount != "" && contact != "" &&
      amount != "" && tot_amount != "" && TrnsID != "" && mode != "" && type != "") {
      if (mode == 'Online') {

        $.ajax({
          type: "post",
          url: "Payment-Record.php",
          data: {
            name: name,
            cardamt: cardamt,
            discount: discount,
            quantity: quantity,
            tot_amount: tot_amount,
            status: "Pending",
            contact: contact,
            mode: "Online",
            UserMail: email,
            trnsid: Trnsid,
            type: type,
          },
          success: function(data) {

          }

        });


        var options = {
          "key": "rzp_live_sdxpIOm9fQ7OD9",
          "amount": amounttoPay * 100,
          "currency": "INR",
          "name": "Arogya Gramin",
          "description": "Healthcare Foundation",
          "image": "https://www.arogyagramin.com/assets/images/logo1.png",

          "handler": function(response) {
            jQuery.ajax({
              type: 'post',
              url: 'Payment-Record.php',
              data: {
                payment_id: response.razorpay_payment_id,
                email: email,
                amount: amounttoPay,
                trnsid: Trnsid,
                type: type,
                quantity: quantity,

              },

              success: function(data) {
                $("#wallet").text(data);
                alert("Payment Successful!")
                location.reload();
              }
            });

          },

          "prefill": {
            "name": name,
            "email": email,
            "contact": contact
          },
          "notes": {
            "address": "Kankarbag Patna Bihar"
          },
          "theme": {
            "color": "green"
          }


        };
        var rzp1 = new Razorpay(options);
        rzp1.on('payment.failed', function(response) {
          jQuery.ajax({
            type: 'post',
            url: 'Payment-Record.php',
            data: {
              razorpay_payment_id: response.razorpay_payment_id,
              errorCode: response.error.code,
              errorDescription: response.error.description,
              errorSource: response.error.source,
              errorStep: response.error.step,
              ErrorReason: response.error.reason,
              PaymentID: response.error.metadata.payment_id,
              email: email,
              amount: amounttoPay,
              trnsid: Trnsid,
            },

            success: function(data) {
              alert("Payment Failed!")
            }
          });

        });

        rzp1.open();
        e.preventDefault();
      } else {
        $.ajax({
          type: "post",
          url: "Payment-Record.php",
          data: {
            name: name,
            cardamt: cardamt,
            discount: discount,
            quantity: quantity,
            tot_amount: tot_amount,
            status: "Pending",
            contact: contact,
            mode: "Offline",
            UserMail: email,
            trnsid: Trnsid,
            type: type,
          },
          success: function(data) {
            alert("Request Added!")
            location.reload();
          }

        });
      }
    } else {
      alert("please Fill Required Fields!")
    }
  });
</script>
</body>
</div>
<style>
  h3 {
    letter-spacing: 0.1px;
    word-spacing: 10px;
    text-align: center;
  }

  .dt-button.red {
    color: orange;
    background: linear-gradient(90deg, rgba(131, 58, 180, 1) 0%, rgba(253, 29, 29, 1) 100%, rgba(252, 176, 69, 1) 100%);
  }



  th {
    background-color: #ff6100;
    color: #fff;
    padding: 0;
    font-size: 12px;
    text-transform: uppercase;
  }

  td {
    background-color: #f7efd2;
    padding: 0;
    font-size: 12px;
  }
</style>
<h3> Last Transaction Detais</h3>
<div style=" overflow: scroll; width:100%; padding:10px 30px; border:1px solid grey; margin-bottom:30px;">
  <table id="example">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Total Amount</th>

        <th>Payment Status</th>
        <th>Payment ID</th>
        <th>Date</th>

        <th>Edit</th>
      </tr>
    </thead>
    <tbody>

      <?php
      $obj->Select("v_transaction", "*", null, "V_EMAIL = '$v_id'");

      foreach ($obj->getResult() as list(
        "ID" => $id, "V_NAME" => $name, "AMOUNT_EVERY_CARD" => $rate, "DISCOUNT" => $discount, "WALLET_AMOUNT" => $walletA, "PAYMENT_STATUS" => $status, "RAZORPAY_PAYMENT_ID" => $paymentId, "DATE" => $date, "TOTAL_AMOUNT" => $TOTAL_AMOUNT
      )) {
      ?>
        <tr>

          <td><?php echo $id; ?></td>
          <td><?php echo $name; ?></td>
          <td><?php echo $TOTAL_AMOUNT; ?></td>

          <td><?php echo $status; ?></td>
          <td><?php echo $paymentId; ?></td>
          <td><?php echo $date; ?></td>
          <td><?php echo "Edit"; ?></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
    <tfoot>
      <th>ID</th>
      <th>Name</th>
      <th>Total Amount</th>


      <th>Payment Status</th>
      <th>Payment ID</th>
      <th>Date</th>

      <th>Edit</th>

      </tr>
    </tfoot>
  </table>

</div>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
  $(document).ready(function() {
    $('#example').DataTable({
      dom: 'Bfrtip',
      buttons: [
        'print'
      ]
    });
  });
</script>

<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
<script src="../assets/user/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>