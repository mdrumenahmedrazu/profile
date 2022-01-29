<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>
<body>
<center>
<div class="card-body">
    <form action="" method="POST" enctype="multipart/form-data">
        <lable> Choose a Profile Pic: </label><br>
        <input type="file" name="photo" id="photo" class="border border-secondary"/><br>

        <lable> Name </label><br>
        <input type="text" name="name" id="name"/> <br>
        
        <lable> Profession </label><br>
        <input type="text" name="profession" id="perofession"/> <br>
        
        <lable>Mobile No</label><br>
        <input type="text" name="mobile" id="mobile"/> <br>
        <input type="submit" name="upload" value="Upload Image/Data"/><br>
    
    </form>
    </div>
    </center>









    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <div>
                            <?php
                            $connection = mysqli_connect("localhost","root","","db_scpsc");
                            $query = "SELECT * FROM `teachers`";
                            $query_run = mysqli_query($connection, $query);
                            
            
                            ?>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                  <thead>
                                    <tr>
                                      <th scope="col">id</th>
                                      <th scope="col">Name</th>
                                      <th scope="col">Profession</th>
                                      <th scope="col">Mobile</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                    // echo"show";
                                    while($row = mysqli_fetch_array($query_run))
                                     {
                                    ?>
                                    <tr>
                                      <td><?php echo $row['id']; ?></td>
                                      <td><?php echo $row['name']; ?></td>
                                      <td><?php echo $row['profession']; ?></td>
                                      <td><?php echo $row['mobile']; ?></td>
                                    </tr>
                                    <?php
                                              }
                                             }
                                    else
                            {
                                ?>
                                <tr>
                                    <td colspan="4">
                                        No Record Found
                                        
                                    </td>
                                </tr>
                                <?php
                            }
                                    ?>
                                  </tbody>
                                </table>
                                
                            </div>
                            
                        </div>
                            
                        
                        
                    </div>

                    
                </div>
                
            </div>
            
        </div>
        
    </div>


















    
</body>
</html>
<?php

$connection = mysqli_connect("localhost","root","");
$dbconfig = mysqli_select_db($connection,'db_scpsc');

if(isset($_POST['upload']))
{
    $file = addslashes(file_get_contents($_FILES["photo"]["tmp_name"]));
    $name = $_POST['name'];
    $profession = $_POST['profession'];
    $mobile = $_POST['mobile'];

    $query = "INSERT INTO `teachers`(`photo`,`name`,`profession`,`mobile`) VALUES ('$file','$name','$profession','$mobile')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script type="text/javascript"> alert ("Image Profile Uploaded)</script>';
    }
    else {
        echo '<script type="text/javascript"> alert ("Image Profile Not Uploaded)</script>';
    }
}



?>