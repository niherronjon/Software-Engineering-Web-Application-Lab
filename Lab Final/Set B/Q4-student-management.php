<?php
$conn = mysqli_connect("localhost", "root", "", "crud_operation");

if (isset($_POST['add_student'])) {
    $id   = $_POST['id']; 
    $name = $_POST['name'];    
    $sem  = $_POST['semester']; 

    mysqli_query($conn, "INSERT INTO Student (Id, Name, Semester) VALUES ('$id','$name','$sem')");
}

$students = mysqli_query($conn, "SELECT * FROM Student");
?>

<h2>Add Student</h2>
<form method="post">
  Id: <input type="text" name="id" required><br><br>
  Name: <input type="text" name="name" required><br><br>
  Semester: <input type="text" name="semester" required><br><br>
  <button type="submit" name="add_student">Add</button>
</form>

<h2>Student List</h2>
<table border="1" cellpadding="5">
  <tr><th>Id</th><th>Name</th><th>Semester</th></tr>
  <?php while($row = mysqli_fetch_assoc($students)) { ?>
    <tr>
      <td><?= htmlspecialchars($row['Id']) ?></td>
      <td><?= htmlspecialchars($row['Name']) ?></td>
      <td><?= htmlspecialchars($row['Semester']) ?></td>
    </tr>
  <?php } ?>
</table>