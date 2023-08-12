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
            User Login
        </h2>
        <div class="row d-flex align-items-center justify-content-center mt-5">
            <div class="lg-12 col-xl-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <!-- username field -->
                    <div class="form-outline mb-4">
                        <label for="user_username" class="form-label">Username</label>
                        <input type="text" id="user_username" class="form-control" 
                        placeholder="Enter your username" autocomplete="off" required="required"
                        name="user_username"/>
                    </div>
                    <!-- Password field -->
                    <div class="form-outline mb-4   ">
                        <label for="user_password" class="form-label">Password</label>
                        <input type="text" id="user_password" class="form-control" 
                        placeholder="Enter your password" autocomplete="off" required="required"
                        name="user_password"/>
                    </div>

                    <!-- login button -->
                    <div class="mt-4 pt-2">
                        <input type="submit" value="Login" class="bg-info py-2 px-3 border-0" 
                        name="user_login">
                        <p class="fw-bold pt-1 mt-3 mb-0">Don't have an Account? 
                            <a href="users_area\user_registration.php"> &nbsp;Register</a></p>
                    </div>
                </form>
                 
            </div>
        </div>
    </div>
</body>
</html>