<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_Details</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    
    <script>
       // new DataTable('#table');
       $('table').DataTable();
    </script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
</head>
<body>

<style>
    body { 
    font-size: 140%; 
    background: #283c86;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #45a247, #283c86);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #45a247, #283c86); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  }
  table{
    background-image: transparent;
  }

    h2 {
      text-align: center;
      padding: 20px 0;
    }

    table caption {
      padding: .5em 0;
    }

    table.dataTable th,
    table.dataTable td {
      white-space: nowrap;
    }

    .p {
      text-align: center;
      padding-top: 140px;
      font-size: 14px;
    }
</style>
    

<?php

include 'connection.php';
$query_str = "select * from admin ";

$result = mysqli_query($connect,$query_str);

	echo '<br><br>';
?>
<h2>Admin Details</h2>

    <div class="container">
    <div class="row">
        <div class="col-xs-12">
        <table  style="border:5px ; border-radius:20px;" id="table"  class="table table-striped w-40">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>                                                                      
                    <th>email</th>                                                                      
                    <th>dob</th>                                                                      
                    <th>gender</th>                                                                      
                    <th>phone</th>                                                                      
                    <th>address</th>                                                        
                    <th>Organisation</th>                                                                       
                    <th>Collaborators Image</th>                                                                      
                              
                    <th>EDIT</th>                                                                      
                    <th>DELETE</th>                                                                      
                                                                                        
                    </tr>
            </thead>
            
<?php

	while($result_array_row = mysqli_fetch_array($result))
	{
    
        echo "<tr>";
        echo '<td>'.$result_array_row['id'].'</td>';
        echo '<td>'.$result_array_row['name'].'</td>';
        echo '<td>'.$result_array_row['email'].'</td>';
        echo '<td>'.$result_array_row['dob'].'</td>';
        echo '<td>'.$result_array_row['gender'].'</td>';
        echo '<td>'.$result_array_row['phone'].'</td>';
        echo '<td>'.$result_array_row['address'].'</td>';
        echo '<td>'.$result_array_row['organisation'].'</td>';

        echo '<td><img src="admin_image/'.$result_array_row['image'].'" width="100" height="80"></td>';
        echo '<td><a href="update.php?id='.$result_array_row['id'].'">edit</a></td>';
        echo '<td><a href="delete.php?id='.$result_array_row['id'].'">delete</a></td>';
		echo "</tr>";
    }
	?>
    <div style="border:5px ; border-radius:20px; display:flex; justify-content: space-around;">
        <button class="btn btn-primary" onclick="window.location.href = 'index.php' ">HOME</button>
        <button class="btn btn-primary" onclick="window.location.href = 'admin_details_view.php' ">Admin</button>
        <button class="btn btn-primary" onclick="window.location.href = 'collaborators_details_view.php' ">Collaborators</button>
        <button class="btn btn-primary" onclick="window.location.href = 'visitor_details_view.php' ">Visitors</button>
    </div>
    <br>


<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>