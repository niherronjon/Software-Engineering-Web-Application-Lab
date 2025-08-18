<?php
$conn = mysqli_connect("localhost", "root", "", "crud_operation");

// Add book
if (isset($_POST['add_book'])) {
    $isbn  = $_POST['isbn'];
    $name  = $_POST['name'];
    $genre = $_POST['genre'];

    mysqli_query($conn, "INSERT INTO books (isbn, name, genre) VALUES ('$isbn','$name','$genre')");
}

// Get all books
$books = mysqli_query($conn, "SELECT * FROM books");
?>

<h2>Add Book</h2>
<form method="post">
  ISBN: <input type="text" name="isbn"><br><br>
  Name: <input type="text" name="name"><br><br>
  Genre: <input type="text" name="genre"><br><br>
  <button type="submit" name="add_book">Add</button>
</form>

<h2>Book List</h2>
<table border="1" cellpadding="5">
  <tr><th>ISBN</th><th>Name</th><th>Genre</th></tr>
  <?php while($row = mysqli_fetch_assoc($books)) { ?>
    <tr>
      <td><?= $row['isbn'] ?></td>
      <td><?= $row['name'] ?></td>
      <td><?= $row['genre'] ?></td>
    </tr>
  <?php } ?>
</table>
