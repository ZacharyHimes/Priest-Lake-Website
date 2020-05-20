<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Payments</title>
	<link href="design.css" type="text/css" rel="stylesheet" />
	<link href="footer.css" type="text/css" rel="stylesheet" />
	<link href="navBar.css" type="text/css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Oleo+Script:wght@700&family=Righteous&display=swap" rel="stylesheet">
</head>
<img src="../SiteImages/BlackSpringRobin.png" width="576" height="98" alt=""/>

<header>

 <?php include 'nav.php';?>
<body>

			<div class = "quote">
				 <h1>Payments</h1>
					<p>
								You can view payment options,
								due dates, and cancellations
								here. Keep scrolling past the
								payment bars to view current
								weekly rates and other paymetn
								info.
					 </p>
			 </div>



<u><h2>Complete your Summer pament:</h2></u>
	<p><i>**Please note this checkout is by default to make summer payments of $500**</i></p>

<br>
<br>

<div id="paypal-button-container"></div>
<script src="https://www.paypal.com/sdk/js?client-id=AX0VAqBTM0Xf8Ut0uluCu_O6DYxMzWgrWvRFXhGoR8NQfBiBRzK-ufeixO8K4j7TmmmlUqOOnUt96k_d&currency=USD" data-sdk-integration-source="button-factory"></script>
<script>
  paypal.Buttons({
      style: {
          shape: 'rect',
          color: 'silver',
          layout: 'vertical',
          label: 'pay',

      },
      createOrder: function(data, actions) {
          return actions.order.create({
              purchase_units: [{
                  amount: {
                      value: '1'
                  }
              }]
          });
      },
      onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
              alert('Transaction completed by ' + details.payer.name.given_name + '!');
          });
      }
  }).render('#paypal-button-container');
</script>

<ul>
<li>	<p><b>For other payments not reguarding the normal summer weeks you can do that <a class="customLink" href="http://paypal.me/SpringRobinCabin">here</a>.</b> </li>
</ul>
<br>
<br>
<div class="infoBlock">
	<div class="homePagebreak">
			<h1><u> Cabin Rates</u> </h1>
			<ul class="homepageList">
				<li> <b>Summer rates</b> are $500 per week</li>
				<li> <b> Winter rates</b> are $75/night with a two night minimum</li>
				<li>All payments are due 10 days <b>BEFORE</b> the start of each stay</li>
				<li> <b>Refunds or cancellations</b> after ten-days prior to the reserved week will be
					given if the week is able to be rented by another user</li>


			</ul>
	</div>
</div>
<?php include 'footer.php';?>































</body>
</html>
