<?php
include('../includes/connect.php'); 
if(isset($_POST['insert_brand'])){
   $brands_title=$_POST['brand_title'];

   //select data from database
   $select_query="select* from brands where brand_title='$brands_title'";
   $result_select=mysqli_query($con,$select_query);
   $number=mysqli_num_rows($result_select);
   if($number>0){
      echo"<script>alert('this brand is present inside the database')</script>";
   }else{
   $insert_query="insert into brands (brand_title) values ('$brands_title')";
   $result=mysqli_query($con,$insert_query);
   if($result){
      echo "<script>alert('brand has been inserted sucessfully')</script>";
   }
}
}
?>

<h2 class="text-center">Insert categories</h2>


<form action="" method="post" class="mb-2">
  <div class="input-group w-90 mb-2">
     <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-reciept"></i></span>
     <input type="text" class="form-control" name="brand_title"
     placeholder="Insert brands" 
     aria-label="Brands" 
     aria-describedby="basic-addon1">
  </div>
  <div class="input-group w-10 mb-2 m-auto">
     <input type="submit" class="bg-info b-0 p-2 my-3" name="insert_brand" vlaue="Insert Brands" >
  </div>
</form>