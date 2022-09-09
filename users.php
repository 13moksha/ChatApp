<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realtime Chat App</title>

    <link rel = "stylesheet" href = "style.css">    
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">-->
    <script src="https://kit.fontawesome.com/d583fb952c.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class ="wrapper">
        <section class ="users">
            <header> 
                <div class="content">
                    <img src="img.jpg" alt="">
                    <div class="details">
                        <span>Moksha Dave</span>
                        <p>Active Now</p>

                    </div>

                </div>
                <a href="#" class="logout">Logout</a>
            </header>
            <div class="search">
                <span class="text"> Select an user to start chat</span>
                <input type="text" placeholder="Enter name to search...">
                <button><i class = "fas fa-search"></i></button>
            </div>
            <div class="users-list">
            <a href="#">
                <div class="content">
                    <img src="img.jpg" alt="">
                    <div class="details">
                        <span>Mrunang Kothari</span>
                        <p>ATest Msg</p>
                    </div>
                </div>
                <div class="status-dot"><i class="fas fa-circle"></i>
                </div>
            </a>
            <a href="#">
                <div class="content">
                    <img src="img.jpg" alt="">
                    <div class="details">
                        <span>Drashti Dave</span>
                        <p>Test Msg</p>
                    </div>
                </div>
                <div class="status-dot"><i class="fas fa-circle"></i>
                </div>
            </a>
            <a href="#">
                <div class="content">
                    <img src="img.jpg" alt="">
                    <div class="details">
                        <span>Hetal Dave</span>
                        <p>Test Msg</p>
                    </div>
                </div>
                <div class="status-dot"><i class="fas fa-circle"></i>
                </div>
            </a>
            <a href="#">
                <div class="content">
                    <img src="img.jpg" alt="">
                    <div class="details">
                        <span>Dhrumil Upadhyaya</span>
                        <p>Test Msg</p>
                    </div>
                </div>
                <div class="status-dot"><i class="fas fa-circle"></i>
                </div>
            </a>
            <a href="#">
                <div class="content">
                    <img src="img.jpg" alt="">
                    <div class="details">
                        <span>Pratiti Patel</span>
                        <p>Test Msg</p>
                    </div>
                </div>
                <div class="status-dot"><i class="fas fa-circle"></i>
                </div>
            </a>
            <a href="#">
                <div class="content">
                    <img src="img.jpg" alt="">
                    <div class="details">
                        <span>Jay Patel</span>
                        <p>Test Msg</p>
                    </div>
                </div>
                <div class="status-dot"><i class="fas fa-circle"></i>
                </div>
            </a>
            <a href="#">
                <div class="content">
                    <img src="img.jpg" alt="">
                    <div class="details">
                        <span>Sunil Dave</span>
                        <p>Test Msg</p>
                    </div>
                </div>
                <div class="status-dot"><i class="fas fa-circle"></i>
                </div>
            </a>
            <a href="#">
                <div class="content">
                    <img src="img.jpg" alt="">
                    <div class="details">
                        <span>Khushi Dave</span>
                        <p>Test Msg</p>
                    </div>
                </div>
                <div class="status-dot"><i class="fas fa-circle"></i>
                </div>
            </a>            
            </div>
       
        </section>
        </div>
        <script src="javascript/users.js"></script>
    </body>
</html>