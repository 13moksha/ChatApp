<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realtime Chat App</title>

    <link rel = "stylesheet" href = "style.css">
    <link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <div class ="wrapper">
        <section class ="form login">
        <header>Realtime Chat App</header>   
         <form action="#">
            <div class = "error-txt">This is error message!</div>
            
            <div class="field input">
                <label> Email Address</label>
                <input type="text" placeholder="Enter your email id">
            </div>
            <div class="field input">
                <label> Password</label>
                <input type="password" placeholder="Enter your password">
            <i class="fas fa-eye"></i>
            </div>
           
            <div class="field button">
                <input type="submit" value = "Continue to Chat">
            </div>
         </form>
         <div class="link">Not yet signed up?<a href="#"> Sign Up Now</a></div>
        </section>
        <script src="javascript/password.js"></script>
</body>
</html>