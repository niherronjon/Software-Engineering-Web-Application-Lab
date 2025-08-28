<?php
$conn = mysqli_connect("localhost","root","","crud_operation");

$msg="";

if(isset($_POST['add_student'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $sem=$_POST['semester'];
    $q=mysqli_query($conn,"SELECT * FROM Student WHERE Id='$id'");
    if(mysqli_num_rows($q)>0){
        $msg="This ID already exists!";
    }else{
        mysqli_query($conn,"INSERT INTO Student(Id,Name,Semester) VALUES('$id','$name','$sem')");
        $msg="Student added";
    }
}

if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    mysqli_query($conn,"DELETE FROM Student WHERE Id='$id'");
    $msg="Student deleted";
}

if(isset($_POST['update_student'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $sem=$_POST['semester'];
    mysqli_query($conn,"UPDATE Student SET Name='$name',Semester='$sem' WHERE Id='$id'");
    $msg="Student updated";
}

$students=mysqli_query($conn,"SELECT * FROM Student");

$editData=null;
if(isset($_GET['edit'])){
    $id=$_GET['edit'];
    $res=mysqli_query($conn,"SELECT * FROM Student WHERE Id='$id'");
    $editData=mysqli_fetch_assoc($res);
}
?>

<p><?= $msg ?></p>

<h2><?= $editData ? "Edit Student" : "Add Student"; ?></h2>
<form method="post">
  Id: <input type="text" name="id" value="<?= $editData['Id'] ?? '' ?>" <?= $editData ? 'readonly' : '' ?> required><br><br>
  Name: <input type="text" name="name" value="<?= $editData['Name'] ?? '' ?>" required><br><br>
  Semester: <input type="text" name="semester" value="<?= $editData['Semester'] ?? '' ?>" required><br><br>
  <button type="submit" name="<?= $editData ? 'update_student' : 'add_student' ?>">
    <?= $editData ? 'Update' : 'Add' ?>
  </button>
</form>

<h2>Student List</h2>
<table border="1" cellpadding="5">
  <tr><th>Id</th><th>Name</th><th>Semester</th><th>Action</th></tr>
  <?php while($row=mysqli_fetch_assoc($students)){ ?>
    <tr>
      <td><?= $row['Id'] ?></td>
      <td><?= $row['Name'] ?></td>
      <td><?= $row['Semester'] ?></td>
      <td>
        <a href="?edit=<?= $row['Id'] ?>">Edit</a> | 
        <a href="?delete=<?= $row['Id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
      </td>
    </tr>
  <?php } ?>
</table>