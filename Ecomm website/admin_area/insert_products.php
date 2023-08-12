<?php
include('../includes/connect.php');
if(isset($_POST['insert_product'])){
     
    $product_title=$_POST['product_title'];
    $description=$_POST['description'];
    $product_keyword=$_POST['product_keyword'];
    $product_categories=$_POST['product_categories'];
    $product_brands=$_POST['product_brands'];
    $product_price=$_POST['product_price'];
    $product_status='true';

    //accesing images
    $product_image1=$_FILES['product_image1']['name'];
    $product_image2=$_FILES['product_image2']['name'];
    $product_image3=$_FILES['product_image3']['name'];


    //imaage temp name
    $temp_image1=$_FILES['product_image1']['tmp_name'];
    $temp_image2=$_FILES['product_image2']['tmp_name'];
    $temp_image3=$_FILES['product_image3']['tmp_name'];
    
    // chekcing empty conditions
    if($product_title== '' or $description=='' or $product_keyword=='' or $product_categories=='' 
    or $product_brands=='' or $product_price=='' or $product_image1=='' or $product_image2=='' 
    or$product_image3==''){
        echo "<script>alert('Please fill all the required fields')</script>";
        exit();
    }else{
        move_uploaded_file($temp_image1,"./product_images/$product_image1");
        move_uploaded_file($temp_image2,"./product_images/$product_image2");
        move_uploaded_file($temp_image3,"./product_images/$product_image3");

        //inserting query
        $insert_products="insert into products(product_title,product_description,product_keywords,category_id,
        brand_id,product_image1,product_image2,product_image3,product_price,date,status)values('$product_title',
        '$description','$product_keyword','$product_categories','$product_brands','$product_image1','$product_image2',
        '$product_image3','$product_price',NOW(),'$product_status')"; 

        $result_query=mysqli_query($con,$insert_products);
        if($result_query){
            echo "<script>alert('Product Sucessfully inserted')</script>";
        }
    }

} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products-Admin</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" 
        crossorigin="anonymous">
    <!--link for stylesheet  -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    
       <!--link font awesome  -->
       <link rel="stylesheet" href="href://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
       integrity="sha512-9usAa10IRO0HhonpyAIpjrylPvoDwiPUiKdWk5t3py01Y1cOd4DSE0Ga+ri4uTroPR5aQvXU9xC6q0PnzFeg=="
       crossorigin="anonymous"
       referrerpolicy="no-referrer"/>
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>
        <!-- form -->
        <form action="" method="post" enctype="multipart/form-data">
            <!-- Title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">
                    Product Title
                </label>
                <input type="text" name="product_title" id="product_title" clas="form-control"
                 placeholder="Enter Product Title" autocomplete="off" required="required">
            </div>

            <!-- description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">
                    Description
                </label>
                <input type="text" name="description" id="description" clas="form-control"
                 placeholder="Enter Description" autocomplete="off" required="required">
            </div>
            <!-- Product keywords -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keyword" class="form-label">
                    Product keywords
                </label>
                <input type="text" name="product_keyword" id="product_keyword" clas="form-control"
                 placeholder="Enter Product keywords" autocomplete="off" required="required">
            </div>
            <!-- Select category -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_categories" id="" class="form-select">
                    <option value="">Select category</option>
                    <?php
                       $select_query="Select * from categories";
                       $result_query=mysqli_query($con,$select_query);
                          while($row=mysqli_fetch_assoc($result_query)){
                             $category_title=$row['category_title'];
                             $category_id=$row['category_id'];
                             echo "<option value='$category_id'>$category_title </option>";
                            }

                    
                    ?>
                    <option value="">Select okie</option>

                </select>
            </div>
            <!-- Select brands -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_brands" id="" class="form-select">
                    <option value="">Select brand</option>
                    <?php
                       $select_query="Select * from brands";
                       $result_query=mysqli_query($con,$select_query);
                          while($row=mysqli_fetch_assoc($result_query)){
                             $brand_title=$row['brand_title'];
                             $brand_id=$row['brand_id'];
                             echo "<option value='$brand_id'>$brand_title </option>";
                            }

                    
                    ?>
                    <option value="">Select okie</option>

                </select>
            </div>
            <!-- product image 1 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">
                    Product image 1
                </label>
                <input type="file" name="product_image1" id="product_image1" clas="form-control"
                required="required">
            </div>
            <!-- product image 1 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">
                    Product image 2
                </label>
                <input type="file" name="product_image2" id="product_image2" clas="form-control"
                required="required">
            </div>
            <!-- product image 3 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label">
                    Product image 3
                </label>
                <input type="file" name="product_image3" id="product_image3" clas="form-control"
                required="required">
            </div>
            <!-- Product price -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">
                    Product keywords
                </label>
                <input type="text" name="product_price" id="product_price" clas="form-control"
                 placeholder="Enter the Price of Product " autocomplete="off" required="required">
            </div>
            <!-- submit button -->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class= "btn btn-info mb-3 px-3" value="Insert Products">
                 
            </div>
        </form>
    </div>
    
</body>
</html>