<?php 
// *********** 	SNIPPETS ***********
$tabmsg1 = "The last three months of distributions are shown by default."; // Boilerplate message for top of tab table

?>
<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>TIAA CREF Test</title>
  <link rel="stylesheet" href="stylesheets/app.css" />
  <link rel="stylesheet" href="stylesheets/main.css" />
  <script src="js/vendor/custom.modernizr.js"></script>
</head>
<body>
	<?php include('includes/header.php'); ?>
	<div id="main-content">	
		<div class="row">
			<div class="large-12 columns">
				<h3>Distributions &amp; Loans</h3>
	
				<!-- Grid Example -->
				<div class="row">
					<div class="large-12 columns">
						<p>See all distributions and loans made over the past two years.</p>
					</div>
				</div>
				<div class="section-container auto" data-section>
				  <section>
				    <p class="title" data-section-title><a href="#panel1">Distributions</a></p>
				    <div class="content" data-section-content>
				      <p><?php echo $tabmsg1; ?></p>
				      <hr class="texture">
				      <table>
				        <thead>
				          <tr>
				            <th>Date</th>
				            <th>Distribution Type</th>
				            <th width="">Plan</th>
				            <th width="">Investment Provider</th>
				            <th width="">Amount</th>
				          </tr>
				        </thead>
				        <tbody>
							<tr>
								<td>03/18/2013</td>
								<td>Rollovers</td>
								<td>ABC Organization 403(b) Plan</td>
								<td><a href="#" class="external">TIAA-CREF</a></td>
								<td>$1,200</td>
							</tr>
							<tr>
								<td>06/04/2013</td>
								<td>Rollovers</td>
								<td>ABC Organization 403(b) Plan</td>
								<td><a href="#" class="external">TIAA-CREF</a></td>
								<td>$1,200</td>							
							</tr>
							<tr>
								<td>05/25/2011</td>
								<td>Hardship</td>
								<td>ABC Organization 457 Plan</td>
								<td><a href="#" class="external">Vanguard</a></td>
								<td>$1,200</td>						
							</tr>
							<tr>
								<td>05/03/2011</td>
								<td>Hardship</td>
								<td>ABC Organization 457 Plan</td>
								<td><a href="#" class="external">Vanguard</a></td>
								<td>$1,200</td>						
							</tr>
							<tr>
								<td>03/09/2011</td>
								<td>Separation from Service</td>
								<td>ABC Organization 403(b) Plan</td>
								<td><a href="#" class="external">Vanguard</a></td>
								<td>$1,200</td>						
							</tr>
				        </tbody>
				      </table>
				    </div>
				  </section>
				  <section>
				    <p class="title" data-section-title><a href="#panel2">Loan Details</a></p>
				    <div class="content" data-section-content>
				      <p><?php echo $tabmsg1; ?></p>
				      <hr>
				    </div>
				  </section>
				</div>		
			</div>
		</div>
	</div>
	<?php include('includes/footer.php') ?>
  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
  	<script src="js/foundation/foundation.js"></script>
	<script src="js/foundation/foundation.alerts.js"></script>
	<script src="js/foundation/foundation.clearing.js"></script>
	<script src="js/foundation/foundation.cookie.js"></script>
	<script src="js/foundation/foundation.dropdown.js"></script>
	<script src="js/foundation/foundation.forms.js"></script>
	<script src="js/foundation/foundation.interchange.js"></script>
	<script src="js/foundation/foundation.joyride.js"></script>
	<script src="js/foundation/foundation.magellan.js"></script>
	<script src="js/foundation/foundation.orbit.js"></script>
	<script src="js/foundation/foundation.placeholder.js"></script>
	<script src="js/foundation/foundation.reveal.js"></script>
	<script src="js/foundation/foundation.section.js"></script>
	<script src="js/foundation/foundation.tooltips.js"></script>
	<script src="js/foundation/foundation.topbar.js"></script>
  <script>
   $(document)
     .foundation()
     .foundation('topbar', {stickyClass: 'sticky-top-bar'});
  </script>
</body>
</html>
