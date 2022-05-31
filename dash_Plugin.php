<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
  <link href="/assets/css/material-kit.css?v=2.0.4" rel="stylesheet" />
</head>

<body>

  <div class="container mt-5">
    <div class="row border-0 rounded shadow p-3">

      <button type="button" class="btn btn-primary">Primary</button>
      <table class="table table-hover ">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Subject</th>
            <th scope="col">Message</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

          <?php

          global $wpdb;

          $query = "SELECT * FROM `contact` order by id desc";
          $result = $wpdb->get_results($query);

          foreach ($result as $row) { ?>
            <tr>
              <td scope="col"><?php echo $row->name ?></td>
              <td scope="col"><?php echo $row->email ?></td>
              <td scope="col"><?php echo $row->subject ?></td>
              <td scope="col"><?php echo $row->message ?></td>
              <td scope="col">
                <a href="./admin.php?page=contact-dashbord&id='.$row['id'].'" class="btn btn-sm btn-danger px-3"><span class="dashicons dashicons-trash"></span></a>
              </td>
            </tr>
          <?php } ?>


          <?php
          global $wpdb;

          if (isset($_GET['id']) && !empty($_GET['id'])) {
            $connection = mysqli_connect('localhost', 'root', '');
            mysqli_select_db($connection, "plugin");
            $query = "DELETE FROM contact WHERE id=" . $_GET['id'];
            mysqli_query($connection, $query);
          }
          ?>

        </tbody>
      </table>
    </div>
  </div>


</body>

</html>