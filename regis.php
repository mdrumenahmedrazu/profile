<?php
session_start();
$con   = mysqli_connect("localhost","root","","scpsc");
if(isset($_POST['insert_data']))
{
    $name   =   $_POST['name'];
    $father   =   $_POST['father'];
    $mother   =   $_POST['mother'];
    $birthplace   =   $_POST['birthplace'];

    $query  =   "INSERT INTO staff (name,father,mother,birthplace) VALUES ('$name','$father','$mother','$birthplace')";
    $query_run = mysqli_query($con, $query);


    if($query_run)
    {
            $SESSION['status'] = "Inserted Succcessfully";
            header("Location: registration.php");
    }
    else
    {
        $SESSION['status'] = "Do not Inserted";
        header("Location: registration.php"); 
    }
}










if(isset($_POST['checking_viewbtn']))
{
    $staff_id = $_POST['staff_id'];
    // echo $return = $staff_id;


    $query ="SELECT * FROM `staff` WHERE id='$staff_id' ";
    $query_run = mysqli_query($con,$query);
    $check_staff = mysqli_num_rows($query_run) > 0;

    if($check_staff)
    { 
      while($row = mysqli_fetch_assoc($query_run))
      {
                echo $return ='










                <div class="container">
                <div class="main-body">
                
                      <div class="row gutters-sm">
                        <div class="col-md-4 mb-3">
                          <div class="card">
                            <div class="card-body">
                              <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                  <h4>'.$row['name'].'</h4>
                                  
                                  <p class="text-muted font-size-sm">'.$row['designation'].'</p>
                                  <p class="text-muted font-size-sm"><span>Joining Date</span> '.$row['join'].'</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="card mt-3">
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0">Mobile: </h6>
                                <span class="text-secondary">'.$row['mobile'].'</span>
                              </li>
                              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                              <h6 class="mb-0">NID: </h6>
                              <span class="text-secondary">'.$row['nid'].'</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0">Birth ID: </h6>
                            <span class="text-secondary">'.$row['birthcer'].'</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                          <h6 class="mb-0">Passport: </h6>
                          <span class="text-secondary">'.$row['passport'].'</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">Email: </h6>
                        <span class="text-secondary">'.$row['email'].'</span>
                      </li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="card mb-3">
                            <div class="card-body">
                            <div style="margin-top:10px;" class="alert alert-warning container d-flex justify-content-center" role="alert">Personal Information</div>
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                '.$row['name'].'
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Father</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                '.$row['father'].'
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Mother</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                '.$row['mother'].'
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">DOB</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                              '.$row['dob'].'
                              </div>
                            </div>
                            <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Birth Place</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                '.$row['birthplace'].'
                                </div>
                              </div>
                              <hr>

                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Present</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                '.$row['present'].'
                                </div>
                              </div>
                              <hr>

                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Permanent</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                '.$row['permanent'].'
                                </div>
                              </div>
                            </div>
                          </div>
            
                          <div class="row gutters-sm">
                            <div class="col-sm-12 mb-3">
                              <div class="card h-100">
                                <div class="card-body">
                                <div style="margin-top:10px;" class="alert alert-warning container justify-content-center d-flex" role="alert">SSC Info</div>
                                 

                                <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">School</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                '.$row['sscschool'].'
                                </div>
                                 </div>
                                 <hr>

                              <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Board</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                              '.$row['sscboard'].'
                              </div>
                              </div>
                            <hr>

                             <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Registration</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                '.$row['sscreg'].'
                                </div>
                              </div>
                             <hr>
                              <div class="row">
                                    <div class="col-sm-3">
                                      <h6 class="mb-0">Roll</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      '.$row['sscroll'].'
                                    </div>
                              </div>
                              <hr>

                              <div class="row">
                                    <div class="col-sm-3">
                                      <h6 class="mb-0">GPA</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                            '.$row['gpa'].'
                                    </div>
                              </div>

                             </div>
                            </div>
                           </div>
                          </div>
            
            
            
                          <div class="row gutters-sm">
                            <div class="col-sm-12 mb-3">
                              <div class="card h-100">
                                <div class="card-body">
                                <div style="margin-top:10px;" class="alert alert-warning container justify-content-center d-flex" role="alert">HSC Info</div>
                                 

                                <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">School</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                '.$row['hsccollege'].'
                                </div>
                                 </div>
                                 <hr>

                              <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Board</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                              '.$row['hscboard'].'
                              </div>
                              </div>
                            <hr>

                             <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Registration</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                '.$row['hscreg'].'
                                </div>
                              </div>
                             <hr>
                              <div class="row">
                                    <div class="col-sm-3">
                                      <h6 class="mb-0">Roll</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      '.$row['hscroll'].'
                                    </div>
                              </div>
                              <hr>

                              <div class="row">
                                    <div class="col-sm-3">
                                      <h6 class="mb-0">GPA</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                            '.$row['hscgpa'].'
                                    </div>
                              </div>

                             </div>
                            </div>
                           </div>
                          </div>






         
            
                          <div class="row gutters-sm">
                            <div class="col-sm-12 mb-3">
                              <div class="card h-100">
                                <div class="card-body">
                                <div style="margin-top:10px;" class="alert alert-warning container justify-content-center d-flex" role="alert">HSC Info</div>
                                 

                                <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">University</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                '.$row['honsuni'].'
                                </div>
                                 </div>
                                 <hr>

                              <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Dep/College</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                              '.$row['honsdep'].'
                              </div>
                              </div>
                            <hr>

                             <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Registration</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                '.$row['honsreg'].'
                                </div>
                              </div>
                             <hr>
                              <div class="row">
                                    <div class="col-sm-3">
                                      <h6 class="mb-0">Subject</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      '.$row['honssub'].'
                                    </div>
                              </div>
                              <hr>

                              <div class="row">
                                    <div class="col-sm-3">
                                      <h6 class="mb-0">CGPA</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                            '.$row['gpa'].'
                                    </div>
                              </div>

                             </div>
                            </div>
                           </div>
                          </div>





   
                          <div class="row gutters-sm">
                            <div class="col-sm-12 mb-3">
                              <div class="card h-100">
                                <div class="card-body">
                                <div style="margin-top:10px;" class="alert alert-warning container justify-content-center d-flex" role="alert">Masters Info</div>

                                <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">University</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                '.$row['mastersuni'].'
                                </div>
                                 </div>
                                 <hr>

                              <div class="row">
                              <div class="col-sm-3">
                                <h6 class="mb-0">Dep/College</h6>
                              </div>
                              <div class="col-sm-9 text-secondary">
                              '.$row['mastersdep'].'
                              </div>
                              </div>
                            <hr>

                             <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Registration</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                '.$row['mastersreg'].'
                                </div>
                              </div>
                             <hr>
                              <div class="row">
                                    <div class="col-sm-3">
                                      <h6 class="mb-0">Subject</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      '.$row['masterssub'].'
                                    </div>
                              </div>
                              <hr>

                              <div class="row">
                                    <div class="col-sm-3">
                                      <h6 class="mb-0">CGPA</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                            '.$row['mastersgpa'].'
                                    </div>
                                    
                              </div>

                             </div>
                            </div>
                           </div>
                          </div>




            
                        </div>
                      </div>
            
                    </div>
                </div>
            














                
                ';
    }
}
  else
  {
    echo $return = "No Teachers Found";
  }

}




?>