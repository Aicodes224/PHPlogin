<html>
<head>
      <title>User Sign Up</title>
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="mask d-flex align-items-center h-100 gradient-custom-3">
<div class="container h-100">
   <div class="col-12 col-md-9 col-lg-7 col-xl-6">
   <div class="row d-flex justify-content-center align-items-center h-100">
          
        <div class="card" style="border-radius:50px">
         <div class="card-body p-5">
     <h2 class="text-uppercase text-center mb-5"><b>SIGN UP</b></h2>
       <form action="registration.php" method="post" class="bg-info text-white p-5 rounded-lg">
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="user" class="form-control" required>
            </div>
            <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
            </div> 
            <button type="submit" class="btn btn-primary"> Register</button>

        </form>
    </div>
    </div>           
</div>
</div>
</div>
</div>

</body>
</html>