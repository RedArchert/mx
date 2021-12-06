<?php
namespace User;
use Models\User;
use Models\User\UserFactory;

$x =  __DIR__ . '/../Models/User/UserFactory.php';

echo $x;die;
?>


<form method="post" action="../Models/User/UserController.php">
<label>Firstname:</label><input type="text" name="fname" value="Gordon"/><br/>
<label>lastname:</label><input type="text" name="lname" value="Ramsay"/><br/>
<label>Role:</label><input type="text" name="role" value="Author"/><br/>
<label>Password:</label><input type="text" name="password" value="randompassword123"/><br/>

<input type="submit" name="submit" />
<form>

<html>
<head>
</head>

<body>
	
	<h3>List of users</h3>
	<table>
		<thead>
		<tr>
			<td>Firstname</td>
			<td>Lastname</td>
			<td>Role</td>
			<td>Password</td>
			<td>Date Created</td>
		</tr>
		</thead>
		<tbody>
<?php foreach ($stored as $user) :?>

<?php endforeach;?>
		</tbody>
	</table>
</body>

</html>
