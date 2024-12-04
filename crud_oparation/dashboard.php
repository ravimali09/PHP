<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="header bg-info text-center">
        <h1>Dashboard</h1>
        <?php
        if (isset($_SESSION['name'])) {
        ?>
            <h3>Welcome <?php echo $_SESSION['name']; ?></h3>
        <?php
        }
        ?>
    </div>
    <div class="container my-5">
        <div class="add bg">

            <a href="add_product" class="btn btn-warning m-1">Add Product</a>
            <a href="logout" class="btn btn-info" style="margin-left: 750px;">Logout</a>

        </div>
        <!-- <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>image</th>
                    <th>price</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>

                <?php

                foreach ($product_arr as $p) {

                ?>
                    <td><?php echo $p->id; ?></td>
                    <td><?php echo $p->name; ?></td>
                    <td><img src="image/<?php echo $p->image ?>" width="50px" height="30px" /></td>
                    <td><?php echo $p->price; ?></td>
                    <td><?php echo $p->description; ?></td>
                    <td>
                        <a href="edit?edit_product=<?php echo $p->id; ?>" class="btn btn-primary">Edit</a>
                        <a href="delete?del_product=<?php echo $p->id; ?>" class="btn btn-danger"> Delete</a>
                        <a href="#" class="btn btn-info">Status</a>
                    </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div> -->

        <main>
            <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;">
                <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
                    <?php
                    if (!empty($product_arr)) {
                        foreach ($product_arr as $p) {
                    ?>
                            <div class="col">
                                <div class="card h-100 shadow-sm"> <img src="image/<?php echo $p->image ?>" alt="product" height="200px" width="200px" class="my-4" style="margin:0 auto">
                                    <div class="card-body">
                                        <div class="clearfix mb-3"><?php echo $p->name; ?> </span>
                                            <span class="float-end price-hp">Rs. <?php echo $p->price; ?></span>
                                        </div>
                                        <p class="card-title"><?php echo $p->description; ?></p>
                                        <span class=" my-4 me-5"> <a href="edit_product?product=<?php echo $p->id; ?>" class="btn btn-success px-4">Edit</a> </span>
                                        <span class=" my-4"> <a href="delete?delete=<?php echo $p->id;?>" class="btn btn-danger px-4">Delete</a> </span>
                                    </div>

                                </div>
                            </div>
                        <?php
                        }
                    } else {
                        ?>
                        <tr>
                            <td align="center" colspan="5"> Data Not Found </td>
                        </tr>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </main>
</body>

</html>