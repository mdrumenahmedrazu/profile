<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Staff Info - SCPSC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="jquery-1.10.2.min.js"></script>
    <link href="bootstrap.min.css" rel="stylesheet">
	<script src="bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
    <div class="main-body">
    
<nav class="navbar breadcrumb justify-content-center">
  <div class="container justify-content-center">
  <img  src="logo.png"  width="40" height="40">   
  </div>
  <h2>SYLHET CANTONMENT PUBLIC SCHOOL AND COLLEGE</h2>
</nav>

          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">Office</a></li>
              <li class="breadcrumb-item active" aria-current="page">Staffs</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Designation</th>
      <th scope="col">View</th>
    </tr>
  </thead>
       <?php
        require 'admin/dbconfig.php';
      $query ="SELECT * FROM `staff`";
      $query_run = mysqli_query($connection,$query);
      $check_staff = mysqli_num_rows($query_run) > 0;

      if($check_staff)
      { 
        while($row = mysqli_fetch_assoc($query_run))
        {
          ?>
          <tbody>
            <tr>
              <th class="staff_id" scope="row"><?php echo $row['id']; ?></th>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['designation']; ?></td>
              <td><button type="button" class="btn btn-primary view-btn">
                    View 
                  </button>
                </td>
            </tr>

          </tbody>
<!-- Button trigger modal -->
<!-- Modal -->
                      <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="staffVIEWModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body alert-info">
      <div class="staff_viewing_data">

      </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

                    
            
                        <?php

                            
                          }
                        }
                          else
                          {
                            echo "No Teachers Found";
                          }



                        ?>


                  </table>


        </div>
    </div>

<style type="text/css">
body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}

</style>

<script type="text/javascript">

</script>


<script>
  $(document).ready(function () {
    
    $('.view-btn').click(function (e) { 
      e.preventDefault();
      
      var staff_id = $(this).closest('tr').find('.staff_id').text();
      //console.log(staff_id);

      $.ajax({
        type: "POST",
        url: "regis.php",
        data: {
          'checking_viewbtn': true,
          'staff_id': staff_id,
        },
        
        success: function (response) {
         // console.log(response);
         $('.staff_viewing_data').html(response);
         $('#staffVIEWModel').modal('show');
        }
      });
    });
  });
</script>
</body>
</html>









