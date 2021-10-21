
<?php require_once('db.php');?>
<?php
if(isset($_POST['insert'])){
    $book_title = $_POST['title'];
    $book_price = $_POST['price'];
    $book_author = $_POST['author'];
   // echo $book_title."<br/>".$book_price."<br/>".$book_author;


    $query = "INSERT INTO book (title,price,author)VALUES('$book_title',$book_price,'$book_author')";
    $status = mysqli_query($connection,$query);
    mysqli_close($connection);
   

}

?>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<center><p class="btn btn-success mt-5"><?php if($status==1) echo "Record Inerted successfully";else echo "insertion failed";?></p></center>

Do you want to Insert More Record?<a href="insertform.php">Click Here</a>





