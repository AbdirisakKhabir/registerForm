<?php

$host_name = "localhost";
$username = "root";
$password = "";
$dbname = "register_form";

// Create connection
$conn = new mysqli($host_name, $username, $password, $dbname);

// Query
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

?>

<!-- Bootstrap Links -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" ></script>

<!-- Table For Dsplaying Data -->
<div class="row">
    <div class="col-md-8 ">
        <table class="table" id="usersTable">
    
    <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    </tr>
  </thead>
  <tbody>
  <tbody>
    <?php
    foreach($result as $row){
        ?>
        <tr>
            <td> <?php echo $row['id'] ?></td>
            <td> <?php echo $row['name'] ?></td>
            <td> <?php echo $row['email'] ?></td>
            <td> <?php echo $row['phone'] ?></td>
            <td> 
                <div class="btn btn-warning">Edit</div>
                <div class="btn btn-danger">Delete</div>
            </td>
        
            
        </tr>
        
        <?php
            
    }
?>
</tbody>
  </tbody>
</table>
    </div>
</div>


<!-- Search Script -->
<script>

$(document).ready(function() {
$('#usersTable').DataTable();
});

</script>