<?php

// Get the form data
$faculty = $_POST['faculty'];
$department = $_POST['department'];
$semester = $_POST['semester'];
$year = $_POST['year'];
$type = $_POST['type'];
$gender = $_POST['gender'];
$name = $_POST['name'];
$prenom = $_POST['prenom'];
$groupe = $_POST['groupe'];
$niveau = $_POST['niveau'];
$matiere = $_POST['matiere'];
$salle = $_POST['salle'];

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=schooldatabase', 'root', '');

// Prepare the SQL statement
$sql = 'INSERT INTO professors (faculty, department, semester, year, type, gender, name, prenom, groupe, niveau, matiere, salle) VALUES (:faculty, :department, :semester, :year, :type, :gender, :name, :prenom, :groupe, :niveau, :matiere, :salle)';

// Bind the parameters
$stmt = $db->prepare($sql);
$stmt->bindParam(':faculty', $faculty);
$stmt->bindParam(':department', $department);
$stmt->bindParam(':semester', $semester);
$stmt->bindParam(':year', $year);
$stmt->bindParam(':type', $type);
$stmt->bindParam(':gender', $gender);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':prenom', $prenom);
$stmt->bindParam(':groupe', $groupe);
$stmt->bindParam(':niveau', $niveau);
$stmt->bindParam(':matiere', $matiere);
$stmt->bindParam(':salle', $salle);

// Execute the statement
$stmt->execute();

// Close the connection
$db = null;

// Redirect the user to the success page
header('Location: success.php');

?>
