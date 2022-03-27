document.getElementById("quantity").addEventListener("keyup", function() {
    let quantity = document.getElementById("quantity").value;
    let cardamt = document.getElementById("cardAmt").value;
    let discount = document.getElementById("discount").value;
    let amount = document.getElementById("amount");
    let type = document.getElementById("type").value;

if(type=="personal_card"){
let tempAmt = Math.floor(cardamt * quantity);
    let amtAfterDiscount = Math.floor(tempAmt * discount / 100);
    amount.value = amtAfterDiscount;    
}else if(type=="family_card"){
   let frate = document.getElementById("frate").value; 
   let fdiscount = document.getElementById("fdiscount").value;
 let tempAmt = Math.floor(frate * quantity);
 let amtAfterDiscount = Math.floor(tempAmt * fdiscount / 100);
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

if(type=="personal_card"){
let tempAmt = Math.floor(cardamt * quantity);
    let amtAfterDiscount = Math.floor(tempAmt * discount / 100);
    amount.value = amtAfterDiscount;    
}else if(type=="family_card"){
   let frate = document.getElementById("frate").value; 
   let fdiscount = document.getElementById("fdiscount").value;
 let tempAmt = Math.floor(frate * quantity);
 let amtAfterDiscount = Math.floor(tempAmt * fdiscount / 100);
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
    var cardamt ="";
    var discount = "";
    if(type=="personal_card"){
    cardamt = document.getElementById("cardAmt").value;
    discount = document.getElementById("discount").value;
    }else if(type=="family_card"){
    cardamt = document.getElementById("frate").value;
    discount = document.getElementById("fdiscount").value;  
    }
    let amount = document.getElementById("amount");
    let contact = document.getElementById("contact").value;
    let mode = document.getElementById("mode").value; 
let tot_amount = amount.value;

if(amounttoPay!=""&&name!=""&&email!=""&&quantity!=""&&cardamt!=""&&discount!=""&&amount!=""&&contact!=""
&&amount!=""&&tot_amount!=""&&TrnsID!=""&&mode!=""&&type!=""){
if(mode=='Online'){ 

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
							  payment_id:   response.razorpay_payment_id,
							  email: email,
							  amount: amounttoPay,
							  trnsid: Trnsid,
							  type: type,
							  quantity: quantity,
							  
							},
				
							success: function (data) 
							{
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
				
							success: function (data) 
							{
						alert("Payment Failed!")
							}
					     }); 
        
    });
  
      rzp1.open();
      e.preventDefault();
}else{
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
}else{
    alert("please Fill Required Fields!")
}
  });