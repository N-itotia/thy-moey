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
		</body>
</html>