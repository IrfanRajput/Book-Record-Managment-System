<?php

session_start(); 
require_once('db.php');?>


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
                <?php if(isset($_SESSION['error'])){?>
                <center><p id="result" class="btn btn-success"><?=$_SESSION['error']?></p></center>
                <?php
                unset($_SESSION['error']);
                }
                ?>
                <div class="card p-5 mt-5">
                    <form action="deletion.php" method="post">
                        <input type="checkbox" name="checked"/> Delete all Records
                    <table class="table" align="center">
                        <thead>
                            <tr>
                                <th>S.no</th>
                                <th>Book Title</th>
                                <th>Book Price</th>
                                <th>Book Author</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php  
                                    for($i=1;$i<=$num;$i++){
                                        $row = mysqli_fetch_array($result);
                                  
                                
                                ?>
                                <tr>
                                    <td><input type="hidden" /><?=$row['book_id'];?></td>
                                    <td><?=$row['title'];?></td>
                                    <td><?=$row['price'];?></td>
                                    <td><?=$row['author'];?></td>
                                    
                                    <td><input type="checkbox" value="<?php echo $row['book_id'];?>"  name="b[]"/></td>
                                       
                                        
                                </tr>
                               <?php
                                      }
                               ?>
                            </tr>
                        </tbody>
                    </table>
                    <input type="submit" name="submit" class="btn btn-danger" value="Delete Record"/>
                    </form>
                </div>
            </div>
        </div>
        <a href="Home.php">Go to Home</a>
    </div>
</body>
</html>