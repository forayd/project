<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Admin</title>
  </head>
  <body style="background: #34343a; font-family: Ubuntu;">
    <div class="container my-4">
    <table class="table text-white">
    <thead>
      <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Francais</th>
        <th>Arabe</th>
        <th>Anglais</th>
      </tr>
    </thead>
    <tbody>
     <?php
     require_once 'connection.php';

     $sql = 'SELECT * FROM users';
     $result = $conn->query($sql);
     if (!$result) {
        die ("Invalid Data !");
     }

     while ($row = $result->fetch_assoc()) {
            echo "
            <tr>
            <th>$row[id]</th>
            <th>$row[Nom]</th>
            <th>$row[francais]</th>
            <th>$row[arabe]</th>
            <th>$row[anglais]</th>
            

            <td>
          
            </td>
            </tr>

            ";
     }
     ?>
    </tbody>
  </table>
      </div>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>