<html>
<head>
	<title>Grassroots</title>
	<link rel="stylesheet" type="text/css" href="CUStyle.css">
</head>
<body background="background.jpg">
	<header> 
		<h1>Grassroots</h1>
		<h2>Your home of soccer equipment<h2>
	</header>
	<nav>
	<ul>
			<li><a href="homepage.php">Home </a></li>
			<li><a href="custProducts.php">Products</a></li>
			<li><a href="CustLogin.php">Login</a></li>
			<li><a href="login.php">Staff Intranet</a></li>
			<li><a href="Branch.php">Contact Us</a></li>	
	</ul> 
</nav>
	<h1>About Us</h1>
	<h2>Grassroots is a ...</h2>
	
	<div class="grid">
 
					<img src = "image.jpg" alt="image" class="grid-item">
					<img src = "http://www.livescience.com/images/i/000/066/622/original/brazuca-soccer-ball-140529.jpg?interpolation=lanczos-none&fit=around%7C300:200&crop=300:200;*,*" alt="image" class="grid-item">
                    <img src = "http://www.livescience.com/images/i/000/066/622/original/brazuca-soccer-ball-140529.jpg?interpolation=lanczos-none&fit=around%7C300:200&crop=300:200;*,*" alt="image" class="grid-item">
                    <img src = "image.jpg" alt="image" class="grid-item">
					<img src = "boots.jpg" alt="image" class="grid-item">
                    </div>
                <script src ="FrontPage.js">
                    </script>
                   
                <script>
                    window.onload = () => {
                        let gridElement = document.querySelector(".grid");
                        window.ms = new Masonry(gridElement, {
                            "itemSelector": '.grid-item',
                            "percentPosition": true
                        })
                        ms.masonry();
                    };
                    </script>
	
	</body>
	</html>