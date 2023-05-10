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
                        <a href="price-list.php" class="client-menu">Price list</a>
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
                        <a href="add_client.php">
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
	                            <form class = form-class id = "navFormCar" method="POST" action="history.html" >
		                            <div class = "first-form">
                                        <label>Data of event:</label>
                                        <input type="date" name="data-event">
                                    </div>
		                            <div class = "second-form">
                                        <label>Description event:</label>
		                                <input type="text" name="event">
                                        <button class="second-button-form" type="submit">Add</button>
		                                
                                    </div>

		                
		                            
	                            </form>
                            </div>
                    </div>
                    <div class = "display-car">
                        <div class="cars" id = "car1">
                            <div class = "each-car">
                                <h1>Car Model:</h1>
                                <p>Seat Leon</p>
                                <h1>Body type:</h1>
                                <p>hatchback</p>
                                <h1>Productions:</h1>
                                <p>1993</p>
                                <h1>Client data</h1>
                                <p>Mariusz</p>
                                
                                
                            </div>
                            <div class="each-car">
                                <h1>Car mileage:</h1>
                                <p>1993</p>
                                <h1>Color:</h1>
                                <p>red</p>
                                <h1>Car history</h1>
                                <div class="nav-car" id="navCar"><h1>Add</h1></div>
                            </div>
                            <div class=" description">
                                <div>
                                    <h1>Car History</h1>
                                    <p>20.04.2010</p>
                                    <p>dsadasdsdsadsaddasdasdasdasdsadadsadsadasdsadasdsadsadsadsadasdsadsasdasdasdsadasdasdasdsadsadsadsadasdsadsadaassdasdasdasdasdasdsadasdsaddasdasdsadsadsadassas</p>
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
                        <div class="cars" id = "car1">
                            <div class = "each-car">
                                <h1>Car Model:</h1>
                                <p>Seat Leon</p>
                                <h1>Body type:</h1>
                                <p>hatchback</p>
                                <h1>Productions:</h1>
                                <p>1993</p>
                                <h1>Client data</h1>
                                <p>Mariusz</p>
                                
                                
                            </div>
                            <div class="each-car">
                                <h1>Car mileage:</h1>
                                <p>1993</p>
                                <h1>Color:</h1>
                                <p>red</p>
                                <h1>Car history</h1>
                                <div class="nav-car" id="navCar"><h1>Add</h1></div>
                            </div>
                            <div class=" description">
                                <div>
                                    <h1>Car History</h1>
                                    <p>20.04.2010</p>
                                    <p>dsadasdsdsadsaddasdasdasdasdsadadsadsadasdsadasdsadsadsadsadasdsadsasdasdasdsadasdasdasdsadsadsadsadasdsadsadaassdasdasdasdasdasdsadasdsaddasdasdsadsadsadassas</p>
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
                        <div class="cars" id = "car1">
                            <div class = "each-car">
                                <h1>Car Model:</h1>
                                <p>Seat Leon</p>
                                <h1>Body type:</h1>
                                <p>hatchback</p>
                                <h1>Productions:</h1>
                                <p>1993</p>
                                <h1>Client data</h1>
                                <p>Mariusz</p>
                                
                                
                            </div>
                            <div class="each-car">
                                <h1>Car mileage:</h1>
                                <p>1993</p>
                                <h1>Color:</h1>
                                <p>red</p>
                                <h1>Car history</h1>
                                <div class="nav-car" id="navCar"><h1>Add</h1></div>
                                
                            </div>
                            <div class=" description">
                                <div>
                                    <h1>Car History</h1>
                                    <p>20.04.2010</p>
                                    <p>dsadasdsdsadsaddasdasdasdasdsadadsadsadasdsadasdsadsadsadsadasdsadsasdasdasdsadasdasdasdsadsadsadsadasdsadsadaassdasdasdasdasdasdsadasdsaddasdasdsadsadsadassas</p>
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
                        <div class="cars" id = "car1">
                            <div class = "each-car">
                                <h1>Car Model:</h1>
                                <p>Seat Leon</p>
                                <h1>Body type:</h1>
                                <p>hatchback</p>
                                <h1>Productions:</h1>
                                <p>1993</p>
                                <h1>Client data</h1>
                                <p>Mariusz</p>
                                
                                
                            </div>
                            <div class="each-car">
                                <h1>Car mileage:</h1>
                                <p>1993</p>
                                <h1>Color:</h1>
                                <p>red</p>
                                <h1>Car history</h1>
                                <div class="nav-car" id="navCar"><h1>Add</h1></div>
                            </div>
                            <div class=" description">
                                <div>
                                    <h1>Car History</h1>
                                    <p>20.04.2010</p>
                                    <p>dsadasdsdsadsaddasdasdasdasdsadadsadsadasdsadasdsadsadsadsadasdsadsasdasdasdsadasdasdasdsadsadsadsadasdsadsadaassdasdasdasdasdasdsadasdsaddasdasdsadsadsadassas</p>
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
                        <div class="cars" id = "car1">
                            <div class = "each-car">
                                <h1>Car Model:</h1>
                                <p>Seat Leon</p>
                                <h1>Body type:</h1>
                                <p>hatchback</p>
                                <h1>Productions:</h1>
                                <p>1993</p>
                                <h1>Client data</h1>
                                <p>Mariusz</p>
                                
                                
                            </div>
                            <div class="each-car">
                                <h1>Car mileage:</h1>
                                <p>1993</p>
                                <h1>Color:</h1>
                                <p>red</p>
                                <h1>Car history</h1>
                                <div class="nav-car" id="navCar"><h1>Add</h1></div>
                            </div>
                            <div class=" description">
                                <div>
                                    <h1>Car History</h1>
                                    <p>20.04.2010</p>
                                    <p>dsadasdsdsadsaddasdasdasdasdsadadsadsadasdsadasdsadsadsadsadasdsadsasdasdasdsadasdasdasdsadsadsadsadasdsadsadaassdasdasdasdasdasdsadasdsaddasdasdsadsadsadassas</p>
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
                        <div class="cars" id = "car1">
                            <div class = "each-car">
                                <h1>Car Model:</h1>
                                <p>Seat Leon</p>
                                <h1>Body type:</h1>
                                <p>hatchback</p>
                                <h1>Productions:</h1>
                                <p>1993</p>
                                <h1>Client data</h1>
                                <p>Mariusz</p>
                                
                                
                            </div>
                            <div class="each-car">
                                <h1>Car mileage:</h1>
                                <p>1993</p>
                                <h1>Color:</h1>
                                <p>red</p>
                                <h1>Car history</h1>
                                <div class="nav-car" id="navCar"><h1>Add</h1></div>
                            </div>
                            <div class=" description">
                                <div>
                                    
                                </div>
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