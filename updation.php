<?php include('db.php');?>
<?php
$count = count($_POST);
 $records =  $count/4;
for($i=1;$i<=$records;$i++){
    $index1="book_id".$i;
    $book_id[$i]=$_POST[$index1];
    $index2="title".$i;
    $title[$i]=$_POST[$index2];
    $index3="price".$i;
    $price[$i]=$_POST[$index3];
    $index4="author".$i;
    $author[$i]=$_POST[$index4];
}
for($i=1;$i<=$records;$i++){
    $query = "update book 
    set title='$title[$i]', price='$price[$i]',author='$author[$i],' where book_id=$book_id[$i]";
    if(mysqli_query($connection,$query)){
         header('location:./view.php');
        
       
    }else{
        die("query failed".mysqli_error($connection));    
    }


}







?>