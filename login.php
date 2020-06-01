<?php
    
    if ( isset( $_POST["login"] ) ) {
        
        // Function to validate data
        function validateFormData( $formData ) {
            $formData = trim( stripslashes( htmlspecialchars( $formData ) ) );
            return $formData;
        }
        
        // Create variables
        // Wrap data with function
        $formUser = validateFormData( $_POST["username"] );
        $formUser = validateFormData( $_POST["password"] );
        
        // Connect to database to make SQLquery
        include("connection.php");
        
        // Create SQL query
        $query = "SELECT username, email, password FROM users WHERE username='$formUser";
        
        // Store result
        $result = mysqli_query( $conn, $query );
        
        // Verify if result is returned; to check if data has already exist
        if ( mysqli_num_rows($result) > 0 ) {
            
            // Store basic user data in variables
            while( $row = mysqli_fetch_assoc($result) ) {
                $user       =   $row["username"];
                $email      =   $row["email"];
                $hashedPass =   $row["password"];
                
            }
        }
        
    }
?>


<!Doctype html>

<html>
   <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Login</title>
  </head>
    
    <body>
        <div class="container">
        <h1>Login</h1>
        <p class="lead">Use this form to log in to your account</p>
            
            <form class="form-inline" action="<? php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                
                <div class="form-group">
                    <label for="login-username" class="sr-only">Username</label>
                    <input type="text" class="form-control"  id="login-username" placeholder="username" name="username">
                </div>
                
                <div class="form-group">
                    <label for="login-password" class="sr-only">Password</label>
                    <input type="password" class="form-control"  id="login-password" placeholder="password" name="password">
                </div>
                    

                    <button type="submit" class="btn btn-primary" name="login">Log In</button>
                
                
                
            </form>
    <?php 
            
            
    ?>
          
        </div>
    
    
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>