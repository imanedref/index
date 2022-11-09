<!DOCTYPE html>
<center><html>
  <body style="background-color:SkyBlue;">
	<form method="post" action="process.php">
		<img src="https://www.google.fr/imgres?imgurl=http%3A%2F%2Fwww.cieillico.fr%2Fwp-content%2Fuploads%2F2018%2F02%2FMorel-informatique-500x375.jpg&imgrefurl=https%3A%2F%2Fwww.cieillico.fr%2Flinformatique-dans-la-vie-courante%2F&tbnid=gCZJEUlrJ-emuM&vet=10CAUQxiAoBWoXChMI4MHB7rGh-wIVAAAAAB0AAAAAEBA..i&docid=51kclTSQNkz4EM&w=500&h=375&itg=1&q=informatique&ved=0CAUQxiAoBWoXChMI4MHB7rGh-wIVAAAAAB0AAAAAEBA" alt="Simply Easy Learning" width="220" height="150">
		<title>Formation DEVOPS</title>
                <h1 style="background-color:rgba(255, 99, 71, 0.5);">Imane Drif</h1>
		First name:<br>
		<input type="text" name="first_name" size="40">
		<br>
		Last name:<br>
		<input type="text" name="last_name" size="40">
		<br>
		City name:<br>
		<input type="text" name="city_name" size="40">
		<br>
		Email Id:<br>
		<input type="email" name="email"size="40"> 
		<br><br>
		<input type="submit" name="save" value="submit"><br><br>
	</form>
  </body>

<html>
  <body><center>

<?php
$user = "omega";
$password = "omega";
$database = "omega";
$table = "employee";

try {

        $db= new PDO("pgsql:host=192.168.193.139;dbname=$database", $user, $password);

  foreach($db->query("SELECT * FROM $table") as $row) {

echo "<table style='background-color:#D3D3D3' width=30% border='1'>
<tr>
<th <td>first_name</th></td>
<th>last_name</th>
<th >city_name</th>
<th width>email</th>
</tr>";

echo "<tr>";
echo "<td >" . $row['first_name'] . "</td>";
echo "<td >" . $row['last_name'] . "</td>";
echo "<td >" . $row['city_name'] . "</td>";
echo "<td >" . $row['email'] . "</td>";
echo "</tr>";
echo "<table>";

  }

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
