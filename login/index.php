<?php 
session_start();

include('./db_connect.php');
?>
<title>Welcome </title>
<script type="text/javascript" src="script/ajax.js"></script>
<?php 

?>


			<ul class="nav navbar-nav navbar-left">
				<?php 
                
                
                // if (isset($_SESSION['user_id'])) { 
				// 	$plan = "";
				// 	$user = $_SESSION['user_name'];
				// 	$sql = "SELECT plan from users where user = '$user'";
				// 	$result = $conn->query($sql);

				// 	if ($result->num_rows > 0) {
					// output data of each row
					// while($row = $result->fetch_assoc()) {
					// 	$plan = $row['plan'];
					// }
					// } else {
					// 	$plan = "0";
					
					// }
					
				





					// $sql1 = "SELECT * from plans where planid = '$plan'";
					// $result1 = $conn->query($sql1);

					//if ($result1->num_rows > 0) {
					// output data of each row
					//while($row = $result1->fetch_assoc()) {
						// echo"
						// monthly    :  $row[monthly]
						// yearly     :  $row[yearly]
						// quality    :  $row[vidquality]
						// resolution :  $row[resolution]
						// number of screens : $row[devices] 
						
						// ";
					// }
					// } else {
					//  $plan = '0';
					// }
					// $conn->close();
					
?>

				<?php //} else { ?>

				<?php //} ?>
	
				<!DOCTYPE html>
<html>
<head>


<?php



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/price.css">
    <title>Document</title>
</head>
<body>
    <h1>Pricing</h1>
    <div class="cont">
    <p class="category">Monthly</p>
    <input id="toggle" class="switch" type="checkbox" >
    <p class="category">Yearly</p>
</div>
    <section id="pricing">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-12">
            <div class="price-card">
                <p class="plan">Mobile<p>
                <p id="p0" ><span class="price">$29.99</span>/month</p>
                <div class="features">
                <p >Good Video Quality</p>
                <p>480p Resolution</p>
                <p>Can be watched on Phone, Tablet</p>
                </div>
               <a href="./checkout.php"><button class="button-66" role="button">Get Plan</button></a> 

            </div>

        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="price-card">
                <p class="plan">Basic<p>
                    <p id="p1" ><span class="price">$34.00</span>/month</p>
                    <div class="features">
                    <p >Good Video Quality</p>
                    <p>480p Resolution</p>
                    <p>Can be watched on Phone, Tablet,Computer,TV</p>
                    </div>
                    <a href="./checkut.php">
                    <button class="button-66" role="button">Get Plan</button></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="price-card">
                <p class="plan">Standard<p>
                    <p id="p2"><span class="price">Rs49.99</span>/month</p>
                    <div class="features">
                    <p >Better Video Quality</p>
                    <p>1080p Resolution</p>
                    <p>Can be watched on Phone, Tablet,Computer,TV</p>
                    </div>
                   <a href="./plan3.php"><button class="button-66" role="button">Get Plan</button></a> 
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="price-card">
                <p class="plan">Premium<p>
                    <p id="p3"><span class="price">$99.99</span>/month</p>
                    <div class="features">
                    <p >Best Video Quality</p>
                    <p>4K+HDR Resolution</p>
                    <p>Can be watched on Phone, Tablet,Computer,TV</p>
                    </div>
                    <a href="./plan4.php"><button class="button-66" role="button">Get Plan</button></a>
                    
            </div>
        </div>
    </div>
    
</section>
<script>
var a = document.getElementById("toggle")
a.addEventListener('change', function() {
    if (this.checked) {
        document.getElementById("p0").innerHTML = "<p id='p0'><span class='price'>$1109.99</span>/Year</p>";
        document.getElementById("p1").innerHTML = "<p id='p1'><span class='price'>$1229.99</span>/Year</p>";
        document.getElementById("p2").innerHTML = "<p id='p2'><span class='price'>$1349.99</span>/Year</p>";
        document.getElementById("p3").innerHTML = "<p id='p3'><span class='price'>$1599.99</span>/Year</p>";
    } else {
        document.getElementById("p0").innerHTML = "<p id='p0'><span class='price'>$29.99</span>/Year</p>";
        document.getElementById("p1").innerHTML = "<p id='p1'><span class='price'>$34.99</span>/Year</p>";
        document.getElementById("p2").innerHTML = "<p id='p2'><span class='price'>$49.99</span>/Year</p>";
        document.getElementById("p3").innerHTML = "<p id='p3'><span class='price'>$99.99</span>/Year</p>";
    }
  });



</script>
<center>
    <div class="bottom">
        
<!-- <a href="./active.php"><button class="button-66" role="button">Active Plans</button></a> -->
    </div>
</center>
</body>
</html>

<?php include('./footer.php');?> 