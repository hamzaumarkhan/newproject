<?php
      include('include/db.php');
      if(isset($_GET['action'])) {
        
        $sql="SELECT * FROM user ORDER BY id DESC";
        $run=mysqli_query($conn,$sql);
        while( $row = mysqli_fetch_assoc($run)) {
            echo' <tr>
            <td>'.$row['id'].'</td>
            <td>'.$row['name'].'</td>
            <td>'.$row['email'].'</td>
            <td>'.$row['phone'].'</td>
            <td>'.$row['password'].'</td>
            <td>
            <button class="btn btn-primary" onclick=" edit('.$row['id'].');"><i class="fa fa-edit"></i></button>
            <button class="btn btn-danger" onclick=" deldata('.$row['id'].');"><i class="fa fa-trash"></i></button>
            </td>
          </tr>';
        }
      }
      if(isset($_GET['id'])) {

        $sql="SELECT * FROM user WHERE id='$_GET[id]'";
        $run=mysqli_query($conn,$sql);
        while( $row= mysqli_fetch_assoc($run)) {
            echo '<form id="myeditform">
            <div class="form-group">
              <label for="name" class="col-form-label">Name:</label>
              <input type="text" name="name" class="form-control" value="'.$row['name'].'" >
            </div>
            <div class="form-group">
              <label for="email" class="col-form-label">Email:</label>
              <input type="email" name="email" class="form-control" value="'.$row['email'].'">
            </div>
            <div class="form-group">
              <label for="phone" class="col-form-label">Phone:</label>
              <input type="text" name="phone" class="form-control"  value="'.$row['phone'].'">
            </div>
            <div class="form-group">
              <label for="password" class="col-form-label">Password:</label>
              <input type="text" name="password" class="form-control" value="'.$row['password'].'">
            </div>
            <button type="submit" name="submit" class="btn btn-success" onclick="update();">Update</button>
       
          </form>';
        }
      }
?>
