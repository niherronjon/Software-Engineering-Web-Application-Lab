<?php
$conn = mysqli_connect("localhost", "root", "", "library");

// CREATE (Add Book)
if(isset($_POST['add'])){
    $title = $_POST['title'];
    $author = $_POST['author'];
    $isbn = $_POST['isbn'];
    mysqli_query($conn, "INSERT INTO books(title,author,isbn) VALUES('$title','$author','$isbn')");
    echo "Book Added!<br>";
}

// READ (Show Books)
$result = mysqli_query($conn, "SELECT * FROM books");

// UPDATE (Change Book Title)
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $title = $_POST['title'];
    mysqli_query($conn, "UPDATE books SET title='$title' WHERE id=$id");
    echo "Book Updated!<br>";
}

// DELETE (Remove Book)
if(isset($_POST['delete'])){
    $id = $_POST['id'];
    mysqli_query($conn, "DELETE FROM books WHERE id=$id");
    echo "Book Deleted!<br>";
}
?>

<!-- Add Book Form -->
<h3>Add Book</h3>
<form method="post">
  Title: <input type="text" name="title" required><br>
  Author: <input type="text" name="author" required><br>
  ISBN: <input type="text" name="isbn" required><br>
  <button type="submit" name="add">Add Book</button>
</form>

<!-- Update Book Form -->
<h3>Update Book Title</h3>
<form method="post">
  ID: <input type="number" name="id" required><br>
  New Title: <input type="text" name="title" required><br>
  <button type="submit" name="update">Update Book</button>
</form>

<!-- Delete Book Form -->
<h3>Delete Book</h3>
<form method="post">
  ID: <input type="number" name="id" required><br>
  <button type="submit" name="delete">Delete Book</button>
</form>

<!-- Show All Books -->
<h3>All Books</h3>
<table border="1" cellpadding="5">
  <tr><th>ID</th><th>Title</th><th>Author</th><th>ISBN</th></tr>
  <?php while($row = mysqli_fetch_assoc($result)){ ?>
    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['title']; ?></td>
      <td><?php echo $row['author']; ?></td>
      <td><?php echo $row['isbn']; ?></td>
    </tr>
  <?php } ?>
</table>
