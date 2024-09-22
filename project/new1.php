<?PHP
$host_name = "localhost";
$user_name = "root";
$database = "index";
$password = "";
mysql_connect($host_name, $user_name, $password);
echo 'Connection opened';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial Aid & Bookkeeping</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./css/new1.css">
</head>
<body>

    <!-- Navbar Section -->
    <nav class="navbar">
        <div class="logo">
            <img src="./image/icon_04.png" alt="Logo">
        
        </div>
        <ul class="nav-links">
            <li style="background-color:#008CBA; padding:.2rem;border-radius:5px"><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">Services</a>
                <div class="dropdown-content">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                    
                </div>
            </li>
            <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">Case Studies</a>
                <div class="dropdown-content">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                    
                </div>
            </li>
            <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">Industries</a>
                <div class="dropdown-content">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                    
                </div>
            </li>
       
            <li><a href="#">Pages</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
       
        <a href="#" class="cta-btn">Sign in</a>
        <a href="new.html" class="cta-btn">login</a>


    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-text">
            <h1>Get the service of the best Financial Aid and Bookkeeping</h1>
            <p>Tax services customized to enhance your financial strategy and minimize tax liabilities. Trust us for tax preparation, planning, and filing needs.</p>
            <a href="tel:+3212345678" class="cta-call">
                <button>Schedule My Free Call</button>
            </a>
            <p class="phone-number">+ 250 321 234 5678</p>
        </div>
        <div class="hero-image">
            <img src="" alt="Professional Man">
        </div>
    </section>

</body>
</html>
