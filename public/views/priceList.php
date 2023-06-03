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
                        <a href="clients" class="client-menu">Client</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-calendar-days"></i>
                        <a href="calendar" class="client-menu">Calender</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-clock-rotate-left"></i>
                        <a href="history" class="client-menu">History</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-sack-dollar"></i>
                        <a href="priceList" class="client-menu">Price list</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-gear"></i>
                        <a href="/logout" class="client-menu">Log out</a>
                    </li>
                    <li>
                        <p>
                            <?php
                            session_start();
                            if (isset($_SESSION['user'])) {
                                $user = $_SESSION['user'];
                                echo "Logged: {$user->getName()} {$user->getSurname()} <br>";

                                echo "{$user->getRole()}";
                            }
                            ?>
                        </p>
                    </li>
                </ul>

            
            </nav>
            <main class="main">
                <header class = "header">
                    <div class="add-client">
                        <a href="addClient">
                            <i class="fa-solid fa-plus"></i>
                            add client</a>
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
                            <?php foreach ($priceList as $price):?>
                            <div class="services" >
                                <div class="each-img">
                                    <img class="price-img"  src="public/img/Price-list/wrench.svg">
                                </div>
                                <div class = "each-service">
                                    <h1>Service:</h1>
                                    <p><?=$price ->getNameOfService();?></p>
                                </div>
                                <div class="each-price" >
                                    <h1>Price:</h1>
                                    <p><?=$price ->getPrices();?></p>
                                </div>
                            </div>
                            <?php endforeach; ?>
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