<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Admin Login</title>
</head>

<body>
   <div class="container my-5 py-5">
   <form method="post" action="" >
        <div class="mb-3">
            <label class="form-label" >Name</label>
            <input type="text" class="form-control" placeholder="Enter Your Name" autocomplete="off" name="name" required >
        </div>
       
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" placeholder="Enter Price Here" autocomplete="off" name="email" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="text" class="form-control" placeholder="Enter Password Here" autocomplete="off" name="password" required>
        </div>
        
        <button type="submit" class="btn btn-primary" name="login">Login</button>
    </form>
   </div>
   


</body>

</html>