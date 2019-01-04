<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include 'navbar.php' ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Blank</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <h2>Diabetic System Setup</h2>
			
				  <button class="accordion">Risk Factors, Comorbidities</button>
			<div class="panel">
				<form action="functions/risks.php" method="post">
				<label>KS Number<input type="number" name="ksnum"size="39" required/></label><br/>
				<label><input type="checkbox" name="risk" value="Hypertension">Hypertension</label><br/>
				<label><input type="checkbox" name="risk" value="Dyslipidaemia"/>Dyslipidaemia</label><br/>
				<label><input type="checkbox" name="risk" value="CKD"/>CKD</label><br/>
				<label><input type="checkbox" name="risk" value="Foot disease"/>Foot disease</label><br/>
				<label><input type="checkbox" name="risk" value="Coronary Artery Disease"/>Coronary Artery Disease</label><br/>
				<label><input type="checkbox" name="risk" value="Erectile dysfunction"/>Erectile Dysfunction</label><br/>
				<button type="submit">Submit</button>
			</form>
			</div>
		<button class="accordion">Lifestyle Changes</button>
			<div class="panel">
				<form action="functions/lifestyle.php" method="post">
					<label>Smoking
					<select name="smoking">
						<option value="Yes">Yes</option>
						<option value="No">No</option>
						<option value="Cessation discussed">Cessation discussed</option>
					</select>
					</label><br/>		
					<label>Alcohol intake<input name="alcohol_intake"type="number"/>Units/Week</label>		
					<button type="submit">Submit</button>				
				</form>			
			</div>

		<button class="accordion">Self Management</button>
			<div class="panel">
				<form action="" method="post">
					<label>Patient Goals<input type="text" size="35"/></label><br>
				<label>Height<input type="text" size="30"/></label><br>
				<label>Weight Target<input type="number" size="30"/></label><br>
				<label>Target BMI<input type="number" size=" 30"/></label><br>
				<label>Weight Management Discussed<select>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select></label><br/>
					<label>Nutrition education<select>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select></label><br/>
					<label>Date:<input type="date"/></label><br>
					<button type="submit">Submit</button>				
				</form>			
			</div>
		
		<button class="accordion">Visits (every 3 months)</button>
			<div class="panel">
				<form action="" method="post">
					<label><b>Date</b> <input type="date"/></label><br/>
					<label><b>BP</b><input type="text"/><br/>
					<label><b>Weight(kg)</b><input type="number"/></label><br/>
					<label><b>HBA1c Target</b><input type="text"/></label><br/>
					<label><b>Notes(goals,clinical status)</b><input type="text"/></label><br/>
					<label><b>Hypo-glycaemia</b><input type="text"/></label><br/>
					<label><b>DM therapy/CV agents</b><input type="text"/></label>
					<button type="submit">Submit</button>				
				</form>			
			</div>	
				
		<script>
			var acc = document.getElementsByClassName("accordion");
			var i;
			
			for (i = 0; i < acc.length; i++) {
			  acc[i].addEventListener("click", function() {
			    this.classList.toggle("active");
			    var panel = this.nextElementSibling;
			    if (panel.style.display === "block") {
			      panel.style.display = "none";
			    } else {
			      panel.style.display = "block";
			    }
			  });
			}
			</script>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
