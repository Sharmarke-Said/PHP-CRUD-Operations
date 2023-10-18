<?php 

include "connection.php";

if(isset($_POST['display'])){
    $table = '<table class="table table-primary table-hover mt-2">
    <thead class="thead-primary">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Class</th>
      <th scope="col">Opertions</th>
    </tr>
  </thead>';
    $query = "SELECT * FROM `studentstb`";
    $result = mysqli_query($con, $query);
    while($row = mysqli_fetch_array($result)){
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $address = $row['address'];
        $std_class = $row['std_class'];
        
        $table.= '<tbody>
         <tr>
        <td scope="row">'.$id.'</td>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$address.'</td>
        <td>'.$std_class.'</td>
        <td>
          <button class="btn btn-success">Update</button>
          <button class="btn btn-danger" onclick="deleteStudent('.$id.')">Delete</button>
        </td>
      </tr>';
    }
    $table.= '</tbody> </table>';
    echo $table;
    
}
?>