<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="public/css/style-history.css">
    <script src="https://kit.fontawesome.com/d10620c300.js" crossorigin="anonymous"></script>
    <script src="public/Js/scrypt-history.js"></script>
    <title> History Page </title>
</head>
<body>
    <div class="all-container">
        <div class="client-container">
            <nav>
            
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
                        <a href="history.html" class="client-menu">History</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-sack-dollar"></i>
                        <a href="priceList.php" class="client-menu">Price list</a>
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
                            <input class="search-class" placeholder="search car">
                        </form>
                    </div>
                </header>
                <section class="client-section">
                    <div class ="add-car">
                            <div class = "form-car-hidden" class = "form-car" id ="formCar">
	                            <form class = form-class id = "navFormCar" method="POST" action="history" >
		                            <div class = "second-form">
                                        <label>Description history:</label>
		                                <input type="text" name="descriptionHistory">
                                        <button class="second-button-form" type="submit">Add</button>
		                                
                                    </div>

		                
		                            
	                            </form>
                            </div>
                    </div>
                    <?php foreach ($cars as $car):?>
                    <div class = "display-car">
                        <div class="cars" >

                            <div class = "each-car">
                                <h1>Car Model:</h1>
                                <p><?=$car ->getCarModel();?></p>
                                <h1>Body type:</h1>
                                <p><?=$car ->getbodyType();?></p>
                                <h1>Productions:</h1>
                                <p><?=$car ->getYearOfProduction();?></p>
                                <h1>Client data</h1>
                                <p>Zobaczymy jeszcze, albo wypad albo nie wiem</p>


                            </div>
                            <div class="each-car">
                                <h1>Car mileage:</h1>
                                <p><?=$car ->getCarMileage();?></p>
                                <h1>Color:</h1>
                                <p><?=$car ->getColor();?></p>
                                <h1>Car history</h1>
                                <div class="nav-car" id="navCar"><h1>Add</h1></div>
                            </div>

                            <div class=" description">
                                <div>
                                    <h1>Car History</h1>
                                    <p>20.04.2010</p>
                                    <p>dsadasdsdsadsaddsas</p>
                                    <p>20.04.2010</p>
                                    <p>dsadasdsdsadsaddsas</p>
                                    <p>20.04.2010</p>
                                    <p>dsadasdsdsadsaddsas</p>
                                    <p>20.04.2010</p>
                                    <p>dsadasdsdsadsaddsas</p>
                                    <p>20.04.2010</p>
                                    <p>dsadasdsdsadsaddsas</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <?php endforeach; ?>
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