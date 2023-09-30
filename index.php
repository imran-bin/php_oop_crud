<?php

include_once './classes/register.php';

$re = new Register();
  if($_SERVER['REQUEST_METHOD']=='POST'){

    $register=$re->addRegister($_POST,$_FILES)
  }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PHP OOP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
</head>

<body>
    <br>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7">
                <div class="card shadow">
                    <div class="card-header">
                        <h1>Registration form</h1>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <label for="">Name</label>
                            <input type="text" name="name" placeholder="Enter your name" class="form-control">
                            <label for="">Email</label>
                            <input type="email" name="email" placeholder="Enter your email" class="form-control">
                            <label for="">Phone</label>
                            <input type="number" name="phone" placeholder="Enter your phone" class="form-control">
                            <label for="">Photo</label>
                            <input type="file" name="photo" placeholder="Enter your photo" class="form-control">
                            <label for="">Address</label>
                            <textarea name="address" class="form-control" id="" cols="30" rows="5"></textarea>
                            <br>
                            <input type="submit" value="Register" class="btn btn-success form-control">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>