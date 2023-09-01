
 <?php
if(isset($_POST['factorial'])){
	$num=$_POST['factorial'];
	if(empty($num)){
		$Error = "Input value is required.";
	 }else{
		$fact=1;
        for($i=$num;$i>0;$i--){
        $fact=$fact*$i;
       }
    $Result= "Factorial of <strong>$num</strong> is: <strong>$fact</strong>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Factorial Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../asset/app.css">
    <style>
        .container{
            max-width: 800px;
            border: 1px solid #ced4da;
            padding: 100px 165px;
        }
        label{
            margin-bottom: 18px;
        }
        input{
            margin-bottom: 24px;
        }
        [type=submit]{
            min-width: 120px;
            min-height: 48px
        }
    </style>
</head>
<body>
    <!-- Top bar -->
    <div class="container-fluid shadow-sm border-bottom mb-4">
        <div class="row aligh-items-center">
            <div class="col">
                <nav class="navbar navbar-light">
                    <a class="btn btn-sm btn-light me-2" href="php-bmi-calculator-demo.zip" title="Download Demo Files"><svg class="svg-icon" viewBox="0 0 24 24">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                        <polyline points="7 10 12 15 17 10"></polyline>
                        <line x1="12" y1="15" x2="12" y2="3"></line>
                    </svg></a>
          
                </nav>
            </div>
        </div>
    </div>
    <!-- Main -->
    <!-- Editor -->
    <div class="container" style="max-width:800px">
        <div class="text-center mb-5">
            <h1 class="fw-bolder mb-0">PHP Factorial Calculator</h1>
        </div>
        <form method="post" action="">
            <div class="row justify-content-center" >
                <div class="col">
                    <div>
                        <div class="col-12">
                            <label for="factorial" class="fs-3">Enter a Number</label>
                            <input  class="form-control form-control-custom" name="factorial" type="number"  value="<?php if(isset($num)){ echo $num;}?>">
                        </div> <br>
             
                        <div class="col text-center mb-3 mb-md-4"><input type="submit" name="submit" value="Calculate" class="btn btn-primary"></div>
                    </div>
                </div>
            </div>
        </form>
        <?php if(isset($Result)){?><!-- Result -->
        <div class="row justify-content-center">
            <div class="col text-center">
                <label for="Result" class="fs-4">Result</label>
                <div class="form-control fs-3"><?php echo $Result; ?></div>
            </div>
        </div>
        <?php } if(isset($Error)){?><!-- Error Messages -->
        <div class="row justify-content-center">
            <div class="col">
                <div class="alert alert-danger shadow-sm" role="alert">Error: <?php echo $Error; ?></div>
            </div>
        </div>
    <?php } ?>
</div>
</body>
</html>