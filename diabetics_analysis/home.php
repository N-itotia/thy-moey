<!DOCTYPE>
<html>
	<head>
		<title>Patient Form</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
		<body>
			<h2>Diabetic System Setup</h2>
				<div class="menu">
				  <a href="home.php">Patient Details</a> 
				   <a href="analysis.php" >Patient Analysis</a>
				  <a href="">Reports and Analysis</a> 
				  </div>
			
			<button class="accordion">Patient details</button>
			<div class="panel">		
			<form action="functions/details.php" method="post" class="form-container">
				<label>Patient Name:<input type="text" name="pname" size="50" required></input></label><br>
				
				<label>KS Number<input type="number" name="ksnum"size="39" required/></label><br/>
				
				<label>Diabetes Type: 
					<select name="diabetestype">
						<option value="Type 1">Type 1</option>
						<option value="Type 2">Type 2</option>
					</select>
				</label><br/>
				
				<label>Date of Birth<input name="dob" type="date" required/></label><br/>
				
				<label>Date of Diagnosis<input name="dodiag"type="date" required/></label><br/>
			<button type="submit" class="btn">Register</a><br/>
   
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
		</body>
</html>