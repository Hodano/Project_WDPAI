<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="public/css/style-price-list.css">

    <script src="https://kit.fontawesome.com/d10620c300.js" crossorigin="anonymous"></script>
    <script src="public/Js/scrypt-price_list.js"></script>
    <title> Price-list Page </title>
</head>
<body>
    <div class="all-container">
        <div class="client-container">
            <nav>
                 <!-- <a class="menu-small-window" href = "#">MENU      ^ </a> -->
                <div class="nav-title" id="navTitle">
                    <p class = "menu-icons-style"><i class="fa-solid fa-bars"></i></p>
                </div>
                <ul id="navUl" class="nav-ul-hidden">
                    <li>
                        <i class="fa-solid fa-user"></i>
                        <a href="clients.php" class="client-menu">Client</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-calendar-days"></i>
                        <a href="calender.html" class="client-menu">Calender</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-clock-rotate-left"></i>
                        <a href="history.php" class="client-menu">History</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-sack-dollar"></i>
                        <a href="price-list.html" class="client-menu">Price list</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-gear"></i>
                        <a href="login.php" class="client-menu">Log out</a>
                    </li>
                </ul>

            
            </nav>
            <main class="main">
                <header class = "header">
                    <div class="add-client">
                        <a href="addClient.php">
                            <i class="fa-solid fa-plus"></i>
                            add client</a>
                    </div>
                    <div class="search-client">
                        <form class="form-class1">
                            <input class="search-class" placeholder="search client">
                        </form>
                    </div>
                </header>
                <section class="client-section">
                    <div class ="add-service">
                        <div class="nav-service" id="navService"><h1>Add a service</h1></div>
                            <div class = "form-service-hidden" class = "form-serivce" id ="formService">
	                            <form class = form-class id = "navForm" method="POST" action="priceList" >
		                            <div class = "first-form">
                                        <label>Name of service:</label>
                                        <input type="text" name="nameOfService" placeholder="name of service">
                                    </div>
		                            <div class = "second-form">
                                        <label>Price:</label>
		                                <input type="number" name="prices" placeholder="prices">
                                        <button class="second-button-form" type="submit" form="navForm">Add</button>
		                                
                                    </div>

		                
		                            
	                            </form>
                            </div>
                    </div>
                    <div class = "display-service">
                        <div class="services" id = "service1">
                            <div class="each-img">
                                <img class="price-img"  src="public/img/Price-list/wrench.svg">
                            </div>
                            <div class = "each-service">
                                <h1>Service:</h1>
<!--                                <p>--><?php //=$priceList ->getNameOfService() ?><!--</p>-->
                                <p>wymiana opon</p>
                            </div>
                            <div class="each-price" >
                                <h1>Price:</h1>
<!--                                <p>--><?php //=$priceList ->getPrices() ?><!--</p>-->
                                <p>300</p>
                            </div>
                        </div>
                        <div class="services" id = "service2">
                            <div class="each-img">
                                <img class="price-img"  src="public/img/Price-list/wrench.svg">
                            </div>
                            <div class = "each-service">
                                <h1>Service:</h1>
                                <p>Wymiana kół</p>
                            </div>
                            <div class="each-price" >
                                <h1>Price:</h1>
                                <p>300</p>
                            </div>
                        </div>
                        <div class="services" id = "service3">
                            <div class="each-img">
                                <img class="price-img"  src="public/img/Price-list/wrench.svg">
                            </div>
                            <div class = "each-service">
                                <h1>Service:</h1>
                                <p>Wymiana kół</p>
                            </div>
                            <div class="each-price" >
                                <h1>Price:</h1>
                                <p>300</p>
                            </div>
                        </div>
                        <div class="services" id = "service4">
                            <div class="each-img">
                                <img class="price-img"  src="public/img/Price-list/wrench.svg">
                            </div>
                            <div class = "each-service">
                                <h1>Service:</h1>
                                <p>Wymiana kół</p>
                            </div>
                            <div class="each-price" >
                                <h1>Price:</h1>
                                <p>300</p>
                            </div>
                        </div>
                        <div class="services" id = "service5">
                            <div class="each-img">
                                <img class="price-img"  src="public/img/Price-list/wrench.svg">
                            </div>
                            <div class = "each-service">
                                <h1>Service:</h1>
                                <p>Wymiana kół</p>
                            </div>
                            <div class="each-price" >
                                <h1>Price:</h1>
                                <p>300</p>
                            </div>
                        </div>
                        <div class="services" id = "service6">
                            <div class="each-img">
                                <img class="price-img"  src="public/img/Price-list/wrench.svg">
                            </div>
                            <div class = "each-service">
                                <h1>Service:</h1>
                                <p>Wymiana kół</p>
                            </div>
                            <div class="each-price" >
                                <h1>Price:</h1>
                                <p>300</p>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
        <div class="footer">
            <div class = "facebook">
                <img class="facebook-img" src="public/img/facebook.svg">
                <a href="Do Facebooka"></a>
            </div>
            <img class="logo-img2" src="public/img/logo2.svg">
            
            
        </div>
    </div>
</body>