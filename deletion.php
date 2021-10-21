<?php include('db.php');?>
<?php
session_start();
if(isset($_POST['b'])){
   $count = count($_POST);
   foreach($_POST['b'] as $id){
      //echo $id;
      $query = "delete from book where book_id='$id'";
      echo "<br/>";
      echo $query;
      $result = mysqli_query($connection,$query);
      if($result){
         header('location:./deleteform.php');
      }else{
         die("query failed " .mysqli_error($connection));
      }
   }
  
}else{
   $_SESSION['error']='must select at least on item';
   header('Location: ./deleteform.php');
}












?>