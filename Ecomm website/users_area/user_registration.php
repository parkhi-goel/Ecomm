<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid my-3">
        <h2 class="text-center">
            New user registration
        </h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="lg-12 col-xl-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <!-- username field -->
                    <div class="form-outline mb-4">
                        <label for="user_username" class="form-label">Username</label>
                        <input type="text" id="user_username" class="form-control" 
                        placeholder="Enter your username" autocomplete="off" required="required"
                        name="user_username"/>
                    </div>
                    <!-- email field -->
                    <div class="form-outline mb-4">
                        <label for="user_email" class="form-label">Email</label>
                        <input type="email" id="user_email" class="form-control" 
                        placeholder="Enter your email" autocomplete="off" required="required"
                        name="user_email"/>
                    </div>
                    <!-- image field -->
                    <div class="form-outline mb-4">
                        <label for="user_image" class="form-label">User Image</label>
                        <input type="file" id="user_image" class="form-control" 
                        required="required" name="user_image"/>
                    </div>
                    <!-- Password field -->
                    <div class="form-outline mb-4   ">
                        <label for="user_password" class="form-label">Password</label>
                        <input type="text" id="user_password" class="form-control" 
                        placeholder="Enter your password" autocomplete="off" required="required"
                        name="user_password"/>
                    </div>
                    <!--confirm Password field -->
                    <div class="form-outline mb-4   ">
                        <label for="conf_user_password" class="form-label">confirm Password</label>
                        <input type="text" id="conf_user_password" class="form-control" 
                        placeholder="Confirm password" autocomplete="off" required="required"
                        name="conf_user_password"/>
                    </div>
                    <!-- address field -->
                    <div class="form-outline mb-4">
                        <label for="user_address" class="form-label">Address</label>
                        <input type="text" id="user_address" class="form-control" 
                        placeholder="Enter your address" autocomplete="off" required="required"
                        name="user_address"/>
                    </div>
                    <!-- contact field -->
                    <div class="form-outline mb-4">
                        <label for="user_contact" class="form-label">Contact</label>
                        <input type="text" id="user_contact" class="form-control" 
                        placeholder="Enter your Mobile Number" autocomplete="off" required="required"
                        name="user_contact"/>
                    </div>
                    <div class="mt-4 pt-2">
                        <input type="submit" value="Register" class="bg-info py-2 px-3 border-0" 
                        name="user_register">
                        <p class="fw-bold pt-1 mt-3 mb-0">Already have an Account? 
                            <a href="user_login.php"> &nbsp;login</a></p>
                    </div>
                </form>
                 
            </div>
        </div>
    </div>
</body>
</html>