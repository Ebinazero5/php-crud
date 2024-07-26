<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student crud application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-md-9">
        <div class="card">
  
        <div class="card-header">
            <h1>Student crud application</h1>
        </div>

        <div class="card-body">
            <button class="btn btn-success"><a href="add.php" class="text-light">add new </a>  </button> 
            <br/>
            <br/>

            <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">adress</th>
                <th scope="col">mobile</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $connection = mysqli_connect("localhost:4306","root","","dbcrud");
                $sql ="select * from student";
                $run =mysqli_query($connection,$sql);
                $id= 1;
                while($row=mysqli_fetch_array($run)){
                    $uid = $row['id'];
                    $name= $row['name'];
                    $address = $row['address'];
                    $mobile = $row['mobile'];
                
                
                ?>
                <tr>
                
                <td><?php echo $uid ?></td>
                    <td> <?php echo $name ?></td>
                    <td><?php echo $address ?></td>
                    <td><?php echo $mobile ?></td>
                     
                    <td><button class="btn btn-success"> <a href='edit.php?edit=<?php echo $uid ?>' class="text-light"> Edit </a> </button></td> &nbsp;
                    <td><button class="btn btn-danger"><a href='delete.php?del=<?php echo $uid ?>' class="text-light"> Delete </a> </button></td>
                </tr>
                    <?php } ?>
                    

            </tbody>
        </table>
            
        </div>
        
        </div>

            </div>

        </div>

    </div>
</body>
</html>