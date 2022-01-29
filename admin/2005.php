<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Registration</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <center><a href="https://alumni.jcpscaa.org">
  <img src="https://1.bp.blogspot.com/-RlKjHa82zag/X_SWjQ3vvvI/AAAAAAAAMag/Czpy0qr9AycIe93tjn89YUE924u_XPjvQCNcBGAsYHQ/s2032/Google-Play-Store.png" alt="HTML tutorial" style="width:30%;height:30%" >
</a></center>
                        <center><h4  class="card-title" style="padding-top: 20px;">
                            Batch 2005
                        </h4> </center>
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
        <center><button onClick="window.print()">Print</button></center>
        <center>Developed by <a href="https://rumenahmedrazu.com">JCPSCAA ICT Team</a></center>
        
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>