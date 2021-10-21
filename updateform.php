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
            <h1 align="center">Update form</h1>
                <div class="card p-5 mt-5">
                    
                    <form action="updation.php" method="post">
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
                                    for($i=1;$i<=$num;$i++){
                                        $row = mysqli_fetch_array($result);
                                  
                                
                                ?>
                                <tr>
                                    <td><?=$i;?>
                                    <input type="hidden" name="book_id<?=$i?>" value="<?=$row['book_id'];?>"/></td>
                                    <td><input type="text" name="title<?=$i;?>" value="<?=$row['title'];?>"/></td>
                                    <td><input type="number" name="price<?=$i;?>" value="<?=$row['price'];?>"/></td>
                                    <td><input type="text" name="author<?=$i;?>" value="<?=$row['author'];?>"/></td>
                                   
                                </tr>
                               <?php
                                      }
                               ?>
                            </tr>
                        </tbody>
                    </table>
                    <input type="submit" name="submit" value="update"/>
                    </form>
                </div>
            </div>
        </div>
        <a href="Home.php">Go to Home</a>
    </div>
</body>
</html>