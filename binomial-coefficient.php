<?php
function binomialCoefficient($n, $k)
{
	// Base Cases
	if ($k > $n)
		return 0;
	if ($k == 0 || $k == $n)
		return 1;

	// Recur
	return binomialCoefficient($n - 1, $k - 1) +
		binomialCoefficient($n - 1, $k);
}

if (isset($_POST['submit'])) {
	$n = $_POST['n'];
	$k = $_POST['k'];
	$result = binomialCoefficient($n, $k);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Binomial Coefficient</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<style>
		.form{
			font-size: 22px;;
			font-weight: 600;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<form method="post" class="bg-secondary p-5 form">
					<h1 class="text-center">Find Binomial Coefficient</h1>
					<div class="d-flex justify-content-center mt-5">
						<div class="mb-3">
							The Value of C(&nbsp;
						</div>
						<div class="mb-3">
							<input type="number" class="form-control" id="n" name="n" value="<?= (isset($n)) ? $n : '' ?>" placeholder="n">
						</div>
						<div class="mb-3">
							,
						</div>
						<div class="mb-3">
							<input type="number" class="form-control" id="k" name="k" value="<?= (isset($k)) ? $k : '' ?>" placeholder="k">
						</div>
						<div class="mb-3">
						    &nbsp;) is <?= (isset($result)) ? $result : '_______' ?>.
						</div>
					</div>
					<div class="d-flex justify-content-center mt-5">
					<button type="submit" class="btn btn-primary" name="submit">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>