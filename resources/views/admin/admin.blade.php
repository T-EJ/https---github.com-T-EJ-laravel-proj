<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="st.css">
   
</head>
<body  style=" background-image: url('a6.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; ">
    <header>
        <nav>
       
 
            <div class="logo">
            <div class="content">
                <h2 class="text_shadows">Welcome</h2> 

            </div>
            </div>
            <ul class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Admin</a></li>
                <li><a href="/view">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div class="bar">
                <div class="bar-1"></div>
                <div class="bar-2"></div>
                <div class="bar-3"></div>
            </div>
        </nav>
    </header>
    
    <div class="banner">
        <div class="wrapper">
            <div class="content">
            <div class="waviy">
                    <span style="--i:1">H</span>
                    <span style="--i:2">O</span>
                    <span style="--i:3">M</span>
                    <span style="--i:4">K</span>
                    <span style="--i:5">A</span>
                    <span style="--i:6">R</span>
                    <span style="--i:7">T</span>
                    <span style="--i:8">.</span>
                    </div>
        <h1>
                    <span>BUY</span>
                    <span>LESS</span>
                    <span>CHOOSE </span>
                    <span>WELL</span>
                    <span>MAKE</span>
                    <span>IT</span>
                    <span>LAST</span>
                    <span>.</span>
                    
</h1>

                <div class="btn">
                    <a href="#">Learn More</a>
                    <a href="/asign">Sign up</a>
                </div>                  
            </div>
        </div>
    </div>
    
    
    <script>
        const X = () => {
            const menu = document.querySelector('.bar');
            const nav = document.querySelector('.menu');
            
            menu.addEventListener('click', () => {
               menu.classList.toggle('bar-active');
                nav.classList.toggle('nav-active');
            });
        }
        X();
    </script>
</body>
</html>
