<?php

$people = array(
   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com'));
   
?>
<!DOCTYPE html>
<html>
	<head>
		<title>My Github Test</title>
	</head>
	
	<style type="text/css">
		.table1{border-collapse:collapse;border-spacing:0;}
	</style>
	
	<body>

		<table border='1' class="table1">
			<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>E-Mail</th>
				<th></th>
			</tr>

<?php   
	
	for($c=0; $c < count($people); $c++)
	{
		print(
"			<tr>
				<td>" . $people[$c]['id'] . "</td>
				<td>" . $people[$c]['first_name'] . "</td>
				<td>" . $people[$c]['last_name'] . "</td>
				<td>" . $people[$c]['email'] . "</td>
				<td><input type=\"button\" onclick=\"alert('". $people[$c]['first_name'] . " " . $people[$c]['last_name'] . " -- " . $people[$c]['email'] . "')\" value=\"Click Me!\"></td>
			</tr>\n");
    }
?>
		</table>
	</body>
</html>
