<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Consulta ha fallado.");
  }

  $_SESSION['message'] = 'tarea guardada correctamente';
  $_SESSION['message_type'] = 'guardado con exito';
  header('Location: index.php');

}

?>
