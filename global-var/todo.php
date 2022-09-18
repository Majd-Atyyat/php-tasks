<?php if(isset($_POST['submit'])){
	session_start();
	
	$tasks=$_POST['todo']; 
	array_push($_SESSION['todo'],$tasks); 
	print_r($_SESSION['todo']);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>ToDo List</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="heading">
		<h2 style="font-style: 'Hervetica';">ToDo List </h2>
	</div>
	<form method="post" action="index.php" class="input_form">
		<input type="text" name="todo" class="task_input">
		<button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>
	</form>
    <table>
	<thead>
		<tr>
			
			<th>Tasks</th>
			
		</tr>
	</thead>

	<tbody>
	        <tr>
			<?php for($i = 0 ; $i < count($_SESSION['todo']) ; $i++) {
     echo '<tr> <td>'.$_SESSION['todo'][$i].'</td>'."<br>";
     }  ?>
			
			</tr>	
	</tbody>
</table>
</body>
</html>