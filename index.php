<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realtime Chat App</title>

    <link rel = "stylesheet" href = "style.css">
    <!--<link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css.min.css"/>-->
    <script src="https://kit.fontawesome.com/d583fb952c.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class ="wrapper">
        <section class ="form signup">
        <header>Realtime Chat App</header>   
         <form action="#" enctype="multipart/form-data">
            <div class = "error-txt"> All fields are compulsory!</div>
            <div class="name-details">
            <div class="field input">
                <label> First Name</label>
                <input type="text" name="fname" placeholder="First Name" required>
            </div>
            <div class="field input">
                <label> Last Name</label>
                <input type="text" name="lname" placeholder="Last Name" required>
            </div>
        </div>
            <div class="field input">
                <label> Email Address</label>
                <input type="text" name="email" placeholder="Enter your email id" required>
            </div>
            <div class="field input">
                <label> Password</label>
                <input type="password" name="password" placeholder="Enter a new password" required>
            <i class="fas fa-eye"></i></div>
            <div class="field image">
                <label> Select Image</label>
                <input type="file" name="image">
            </div>
            <div class="field button">
                <input type="submit" value = "Continue to Chat">
            </div>
         </form>
         <div class="link">Already Signed up?<a href="#"> Login Now</a></div>
        </section>
    </div>
 
    <script src="javascript/password.js"></script>
    <script src="javascript/signup.js"></script>
</body>
</html>