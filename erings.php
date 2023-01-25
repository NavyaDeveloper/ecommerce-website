<?php include("header.php")?>
<div class="container">
<?php 

include("connection.php");
 $query="SELECT * from ecart";
 $query_run=mysqli_query($connect,$query);
 if(mysqli_num_rows($query_run)> 0){

 ?>
  
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
        <?php
      while($row = mysqli_fetch_assoc($query_run)){
        ?>
    <div class="col text-center gallery">
     <figure><?php echo' <img src="data:image/jpeg;base64,'.base64_encode($row['image']) .'" class="img-thumbnail mt-4"  width="350px;" height="400px;">'?>
     <figcaption class="figure-caption" style="font-size:20px; color:black; text-align:center"><?php echo $row['name']?></br>Rs.<?php echo $row['price']?></figcaption></figure>
     <p><?php echo'<a href="eview.php?id='. $row['id'] .'" class="btn btn-outline-dark" >View Details</a>'?></p> 
    </div>
   
    <?php
 }
 ?>
    
    </div>
  <?php
}
 else{
   echo "No record found";
 }
?>
</div>




