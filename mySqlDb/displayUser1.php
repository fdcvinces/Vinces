<!doctype html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <title>Database User Datas</title>
    </head>
    <body>

<?php
      $username = "root";
      $password = "admin123";
      $host = "localhost";


      $connector = mysqli_connect($host,$username,$password)
          or die("Unable to connect");
        //echo "Connections are made successfully::";
      $selected = mysqli_select_db($connector,"my_db")
        or die("Unable to connect");


  //execute the SQL query and return records
  //$result = mysqli_query($connector, "SELECT * FROM users ");  
  $result = mysqli_query($connector,"SELECT id, first_name, last_name FROM users")
     // $result = mysqli_query("SELECT * FROM users "); 
      ?>
      <table class="table table-hover" >
      <thead>
        <tr>
          <th>ID</th>
          <th>Firstname</th>
          <th>Lastname</th>
        </tr>
      </thead>
      <tbody>
        <?php
        
          while( $row = mysqli_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>{$row['id']}</td>
              <td>{$row['first_name']}</td>
              <td>{$row['last_name']}</td>
            </tr>\n";
           }

        ?>
      </tbody>
    </table>
    <?php mysqli_close($connector); ?>

    

    </body>
    </html>
     
