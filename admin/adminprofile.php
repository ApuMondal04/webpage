<?php
include('authentication.php');

include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');

include('config/dbconnection.php');
?>


<div class="content-wrapper">

<!--user Modal -->
<div class="modal fade" id="AddUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><u>Add Admin</u></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="adminCode.php" method="POST">
      <div class="modal-body">
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" placeholder="Name" name="name" >
        </div>
        <div class="form-group">
          <label>Email</label>
          <span class="email_error text-success ml-2"></span>
          <input type="email" class="form-control email_id" placeholder="Email id" name="email" >
        </div>
        <div class="form-group">
          <label>Phone No.</label>
          <input type="text" class="form-control" placeholder="Phone Number" name="mobile" >
        </div>
          <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
              </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                <label for="">Confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
              </div>
                </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="addAdmin" class="btn btn-primary">Submit</button>
      </div>
    </form>
    </div>
  </div>
</div>

<!-- Delete user -->
<!--user Modal -->
<div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><u>Delete User</u></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="adminCode.php" method="POST">
      <div class="modal-body">
        <input type="hidden" name="delete_id" class="delete_user_id">
        <p>Are you sure, you want to delete this data?</p>
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="DeleteUserbtn" class="btn btn-primary">Yes, Delete</button>
      </div>
    </form>
    </div>
  </div>
</div>

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Registered Admin</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.container header -->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
         
          <!-- message show -->
          <?php
            if (isset($_SESSION['status'])) {
              echo "<h4>".$_SESSION['status']."</h4>";
              unset($_SESSION['status']);
            }
          ?>
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Registered Admins

                </h3>
                <a href="#" data-toggle="modal" data-target="#AddUserModal" class="btn btn-primary btn-sm float-right">Add Admin</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile No.</th>
                    <th>password</th>
                    <th>Date/Time</th>
                    <th>Update</th>
                  </tr>
                  </thead>
<!-- Fetch data -->
                  <?php
                    $query= "SELECT * FROM admin_login";
                    $query_run=mysqli_query($con,$query);
                    if (mysqli_num_rows($query_run)>0) 
                    {
                      foreach ($query_run as $row) 
                      {
                        //echo $row['username'];
                    ?>

                    <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['mobile']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td><?php echo $row['date/time']; ?></td>
                    <td>
                      <a href="admin_edit.php?user_id=<?php echo $row['id']; ?>" class="btn btn-info btn-sm">Edit </a>
                      <button type="button" value="<?php echo $row['id']; ?>" class="btn btn-danger btn-sm deletebtn"> Delete </button>
                    </td>
                   
                  </tr>
                    <?php
                      }
                    }
                    else{
                     ?>
                     <tr>
                       <td>No Records Found!</td>
                     </tr>

                     <?php
                    }

                  ?>

                  <tbody>
                </tbody>
              </table>
            </div>
          </div>
      </div>        
    </div>
  </div>
</div>      

<?php include('includes/script.php'); ?>

<script >
   $(document).ready(function (){
    $('.email_id').keyup(function(e){
      var email=$('.email_id').val();

      $.ajax({
        type:"POST",
        url:"adminCode.php",
        data:{
          'check_Emailbtn':1,
          'email':email,
        },
        success: function(response){
          $('.email_error').text(response);
        }
      });
    });
   });
</script>

<script>
  $(document).ready(function (){
    $('.deletebtn').click(function (e){
      e.preventDefault();

      var user_id= $(this).val();
      //console.log(user_id);
      $('.delete_user_id').val(user_id);
      $('#DeleteModal').modal('show');
    });
  });
</script>

<?php include('includes/footer.php'); ?>

