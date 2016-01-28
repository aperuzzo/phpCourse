<html>
<body>
	<?php 
		$students = array('Claire', 'Michelle', 'Anthony', 'Kelly'); //define students
		function roleCall($people){
			foreach($people as $person){
				echo $person, '</br>';
			}
		}
		roleCall($students); //call function 
	?>
</body>
</html>
