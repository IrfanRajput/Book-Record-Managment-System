<?php require_once('db.php');?>
<?php
    $query = "SELECT * FROM book";
    $result = mysqli_query($connection,$query);
    $num = mysqli_num_rows($result);
    // if($row = mysqli_num_rows($result)){
    //    echo "<pre>";
    //    print_r($row);
    // }else{
    //    mysqli_connect_error($connection,$query);
    // }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card p-5 mt-5">
                    <table class="table" align="center">
                        <thead>
                            <tr>
                                <th>S.no</th>
                                <th>Book Title</th>
                                <th>Book Price</th>
                                <th>Book Author</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php  
                                    for($i=0;$i<$num;$i++){
                                        $row = mysqli_fetch_array($result);
                                  
                                
                                ?>
                                <tr>
                                    <td><?=$row['book_id'];?></td>
                                    <td><?=$row['title'];?></td>
                                    <td><?=$row['price'];?></td>
                                    <td><?=$row['author'];?></td>
                                </tr>
                               <?php
                                      }
                               ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <a href="Home.php">Go to Home</a>
    </div>
</body>
</html>