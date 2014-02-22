<?php
$authors = array (
		'0' => array (
				'name' => 'Joane K. Rowling',
				'country' => 'Great Britain',
				'dateOfBirth' => '1965-07-31' 
		),
		'1' => array (
				'name' => 'Charles Darwin',
				'country' => 'Great Britain',
				'dateOfBirth' => '1809-02-12' 
		) 
);
?>
<html>
<head>
<title>Froggy Exercise</title>
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="bootstrap.min.css">
<script type="text/javascript" src="jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="app.js"></script>

<!-- Beginning of your PHP/javascript code. You can replace the existing scaffolding if you like -->

<?php
echo '<script type="text/javascript">window.authors = ' . json_encode ( $authors ) . ';</script>';
?>

<script type="text/javascript">
$(function() {
	(new App()).init();
});
</script>
<!-- End of your code -->

</head>
<body>
	<h1>Froggy's Book Shelf</h1>
	<div id="authors">
		<h2>Available Authors</h2>
		<table class="table table-striped table-hover" id="authors">
			<thead>
				<tr>
					<th>Name</th>
					<th>Country</th>
					<th>Date of Birth</th>
				</tr>
			</thead>
			<tbody>
				<tr class="danger">
					<td colspan="5">Not loaded yet</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div id="books" class="disabled">
		<div class="blocker">
			<p>Loading...</p>
		</div>
		<h1>
			Books written by <span id="author-name">&nbsp;</span>:
		</h1>
		<table class="table table-striped table-hover" id="authors">
			<thead>
				<tr>
					<th>Title</th>
					<th>Year</th>
					<th>No. of Pages</th>
					<th>Price and availability</th>
				</tr>
			</thead>
			<tbody>
				<tr class="example1">
					<td>The Voyage of the Beagle</td>
					<td>1839</td>
					<td>528</td>
					<td><button type="button" class="btn btn-sm btn-default">Check
							Pricing</button></td>
				</tr>
				<tr class="example2">
					<td>On the Origin of Species</td>
					<td>1859</td>
					<td>1024</td>
					<td class="price loading">&nbsp;</td>
				</tr>
				<tr class="example3">
					<td>Me and my Crew</td>
					<td>1822</td>
					<td>11</td>
					<td class="price stock">28</td>
				</tr>
				<tr class="example4">
					<td>On the Origin of Species</td>
					<td>1859</td>
					<td>1024</td>
					<td class="price out">148</td>
				</tr>
				<tr class="example5">
					<td>On the Origin of Species</td>
					<td>1859</td>
					<td>1024</td>
					<td class="price offline">Server offline
						<button type="button" class="btn btn-xs btn-primary">Check again</button>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>