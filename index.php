<!DOCTYPE HTML>
<!--
	Landscape by Pixelarity
	pixelarity.com | hello@pixelarity.com
	License: pixelarity.com/license
-->
<html>
	<head>
		<title>ESDesign</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="apple-touch-icon" sizes="57x57" href="assets/fav/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="assets/fav/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="assets/fav/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="assets/fav/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="assets/fav/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="assets/fav/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="assets/fav/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="assets/fav/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="assets/fav/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="assets/fav/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="assets/fav/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="assets/fav/favicon-16x16.png">
		<link rel="manifest" href="assets/fav/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="assets/fav/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

	

		<?php include 'includes/header.php' ?>

		<!-- Main -->
			<div id="main">

				<!-- Reel -->
					<div class="reel">

						<?php 
							include 'pages/home.php';
							include 'pages/about.php';
							include 'pages/portfolio.php';
						?>

						<!-- Contact Us -->
							<article id="contact" class="slide style2 center">
								<img src="images/pic01.jpg" alt="" data-position="30% 50%" />
								<div class="inner">
									<h2>Contact Us</h2>
									<div class="content">
										<form method="post" action="#">
											<div class="field half first"><input type="text" name="name" id="name" placeholder="Name" /></div>
											<div class="field half"><input type="email" name="email" id="email" placeholder="Email" /></div>
											<div class="field"><textarea name="message" id="message" placeholder="Message" rows="5"></textarea></div>
											<ul class="actions">
												<li><input type="submit" value="Send" /></li>
											</ul>
										</form>
									</div>
									<ul class="icons">
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
									</ul>
								</div>
							</article>

						<!-- Elements -->
						<!--
							<article id="elements" class="slide style1 center">
								<img src="images/pic04.jpg" alt="" data-position="center" />
								<div class="inner">
									<h2>Elements</h2>
									<div class="content align-left">

										<section>
											<h4>Text</h4>
											<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
											This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
											This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
											<hr />
											<h2>Heading Level 2</h2>
											<h3>Heading Level 3</h3>
											<h4>Heading Level 4</h4>
											<h5>Heading Level 5</h5>
											<h6>Heading Level 6</h6>
											<hr />
											<h5>Blockquote</h5>
											<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
											<h5>Preformatted</h5>
											<pre><code>i = 0;

while (!deck.isInOrder()) {
  print 'Iteration ' + i;
  deck.shuffle();
  i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
										</section>

										<section>
											<h4>Lists</h4>
											<div class="row">
												<div class="6u 12u$(medium)">
													<h5>Unordered</h5>
													<ul>
														<li>Dolor pulvinar etiam.</li>
														<li>Sagittis adipiscing.</li>
														<li>Felis enim feugiat.</li>
													</ul>
													<h5>Alternate</h5>
													<ul class="alt">
														<li>Dolor pulvinar etiam.</li>
														<li>Sagittis adipiscing.</li>
														<li>Felis enim feugiat.</li>
													</ul>
												</div>
												<div class="6u$ 12u(medium)">
													<h5>Ordered</h5>
													<ol>
														<li>Dolor pulvinar etiam.</li>
														<li>Etiam vel felis viverra.</li>
														<li>Felis enim feugiat.</li>
														<li>Dolor pulvinar etiam.</li>
														<li>Etiam vel felis lorem.</li>
														<li>Felis enim et feugiat.</li>
													</ol>
													<h5>Icons</h5>
													<ul class="icons">
														<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
														<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
														<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
														<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
													</ul>
												</div>
											</div>
											<h5>Actions</h5>
											<ul class="actions">
												<li><a href="#" class="button special">Default</a></li>
												<li><a href="#" class="button">Default</a></li>
											</ul>
											<ul class="actions small">
												<li><a href="#" class="button special small">Small</a></li>
												<li><a href="#" class="button small">Small</a></li>
											</ul>
											<div class="row">
												<div class="6u 12u$(small)">
													<ul class="actions vertical">
														<li><a href="#" class="button special">Default</a></li>
														<li><a href="#" class="button">Default</a></li>
													</ul>
												</div>
												<div class="6u$ 12u$(small)">
													<ul class="actions vertical small">
														<li><a href="#" class="button special small">Small</a></li>
														<li><a href="#" class="button small">Small</a></li>
													</ul>
												</div>
												<div class="6u 12u$(small)">
													<ul class="actions vertical">
														<li><a href="#" class="button special fit">Default</a></li>
														<li><a href="#" class="button fit">Default</a></li>
													</ul>
												</div>
												<div class="6u$ 12u$(small)">
													<ul class="actions vertical small">
														<li><a href="#" class="button special small fit">Small</a></li>
														<li><a href="#" class="button small fit">Small</a></li>
													</ul>
												</div>
											</div>
										</section>

										<section>
											<h4>Table</h4>
											<h5>Default</h5>
											<div class="table-wrapper">
												<table>
													<thead>
														<tr>
															<th>Name</th>
															<th>Description</th>
															<th>Price</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Item One</td>
															<td>Ante turpis integer aliquet porttitor.</td>
															<td>29.99</td>
														</tr>
														<tr>
															<td>Item Two</td>
															<td>Vis ac commodo adipiscing arcu aliquet.</td>
															<td>19.99</td>
														</tr>
														<tr>
															<td>Item Three</td>
															<td> Morbi faucibus arcu accumsan lorem.</td>
															<td>29.99</td>
														</tr>
														<tr>
															<td>Item Four</td>
															<td>Vitae integer tempus condimentum.</td>
															<td>19.99</td>
														</tr>
														<tr>
															<td>Item Five</td>
															<td>Ante turpis integer aliquet porttitor.</td>
															<td>29.99</td>
														</tr>
													</tbody>
													<tfoot>
														<tr>
															<td colspan="2"></td>
															<td>100.00</td>
														</tr>
													</tfoot>
												</table>
											</div>

											<h5>Alternate</h5>
											<div class="table-wrapper">
												<table class="alt">
													<thead>
														<tr>
															<th>Name</th>
															<th>Description</th>
															<th>Price</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Item One</td>
															<td>Ante turpis integer aliquet porttitor.</td>
															<td>29.99</td>
														</tr>
														<tr>
															<td>Item Two</td>
															<td>Vis ac commodo adipiscing arcu aliquet.</td>
															<td>19.99</td>
														</tr>
														<tr>
															<td>Item Three</td>
															<td> Morbi faucibus arcu accumsan lorem.</td>
															<td>29.99</td>
														</tr>
														<tr>
															<td>Item Four</td>
															<td>Vitae integer tempus condimentum.</td>
															<td>19.99</td>
														</tr>
														<tr>
															<td>Item Five</td>
															<td>Ante turpis integer aliquet porttitor.</td>
															<td>29.99</td>
														</tr>
													</tbody>
													<tfoot>
														<tr>
															<td colspan="2"></td>
															<td>100.00</td>
														</tr>
													</tfoot>
												</table>
											</div>
										</section>

										<section>
											<h4>Buttons</h4>
											<ul class="actions">
												<li><a href="#" class="button special">Special</a></li>
												<li><a href="#" class="button">Default</a></li>
											</ul>
											<ul class="actions">
												<li><a href="#" class="button">Default</a></li>
												<li><a href="#" class="button small">Small</a></li>
											</ul>
											<ul class="actions fit">
												<li><a href="#" class="button special fit">Fit</a></li>
												<li><a href="#" class="button fit">Fit</a></li>
											</ul>
											<ul class="actions fit small">
												<li><a href="#" class="button special fit small">Fit + Small</a></li>
												<li><a href="#" class="button fit small">Fit + Small</a></li>
											</ul>
											<ul class="actions">
												<li><a href="#" class="button special icon fa-download">Icon</a></li>
												<li><a href="#" class="button icon fa-download">Icon</a></li>
											</ul>
											<ul class="actions">
												<li><span class="button special disabled">Disabled</span></li>
												<li><span class="button disabled">Disabled</span></li>
											</ul>
										</section>

										<section>
											<h4>Form</h4>
											<form method="post" action="#">
												<div class="field half first">
													<input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
												</div>
												<div class="field half">
													<input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
												</div>
												<div class="field">
													<div class="select-wrapper">
														<select name="demo-category" id="demo-category">
															<option value="">- Category -</option>
															<option value="1">Manufacturing</option>
															<option value="1">Shipping</option>
															<option value="1">Administration</option>
															<option value="1">Human Resources</option>
														</select>
													</div>
												</div>
												<div class="field half first">
													<input type="radio" id="demo-priority-low" name="demo-priority" checked>
													<label for="demo-priority-low">Low</label>
												</div>
												<div class="field half">
													<input type="radio" id="demo-priority-high" name="demo-priority">
													<label for="demo-priority-high">High</label>
												</div>
												<div class="field half first">
													<input type="checkbox" id="demo-copy" name="demo-copy">
													<label for="demo-copy">Email me a copy</label>
												</div>
												<div class="field half">
													<input type="checkbox" id="demo-human" name="demo-human" checked>
													<label for="demo-human">Not a robot</label>
												</div>
												<div class="field">
													<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
												</div>
												<ul class="actions">
													<li><input type="submit" value="Send Message" class="special" /></li>
													<li><input type="reset" value="Reset" /></li>
												</ul>
											</form>
										</section>

									</div>
								</div>
							</article>
						-->

					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
	</body>
</html>