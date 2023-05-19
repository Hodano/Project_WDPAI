<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="public/css/style-client.css">
    <script src="https://kit.fontawesome.com/d10620c300.js" crossorigin="anonymous"></script>
    <script src="public/Js/scrypt-client.js"></script>
    <title> Clients Page </title>
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
                        <a href="clients.html" class="client-menu">Client</a>
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
                            <input class="search-class" placeholder="search client">
                        </form>
                    </div>
                </header>
                <section class="client-section">
                    <div class = "clientss"  id = "client-1"> 
<!--                        <div>-->
<!--                            <h2>Name</h2>-->
<!--                            <p>Mariusz Hodana</p>-->
<!--                        <img class="image-client" src="public/img/clients/client.svg">-->
<!--                        </div>-->
<!--                        <div class = "elo">-->
<!--                            <div class = "data-class-grid">-->
<!--                                <h4>Adress</h4>-->
<!--                                <p>Myślenice</p>-->
<!--                                <h4>Phone-Number</h4>-->
<!--                                <p>1234567</p>-->
<!--                                <h4>Email</h4>-->
<!--                                <p>mariusz11@oent.pl</p>-->
<!--                                <h4>Cars</h4>-->
<!--                                <p>narazie String</p>-->
<!--                                <h4>-->
<!--                                    <a href="addCar.php"> add car</a>-->
<!--                                    -->
<!--                                </h4>-->
<!--                            </div>-->
<!--                        </div>-->
                        <div>
                                                        <h2>Name</h2>
                                                        <p><?=$client ->getNameAndSurname() ?></p>
                                                        <img class="image-client" src="public/img/clients/client.svg">
                                                    </div>
                                                    <div class = "elo">
                                                        <div class = "data-class-grid">
                                                            <h4>Adress</h4>
                                                            <p><?=$client ->getAddress() ?></p>
                                                            <h4>Phone-Number</h4>
                                                            <p><?=$client ->getPhoneNumber() ?></p>
                                                            <h4>Email</h4>
                                                            <p><?=$client ->getEmail() ?></p>
                                                            <h4>Cars</h4>
                                                            <p><?=$client ->getCars() ?></p>
                                                            <h4>
                                                                <a href="addCar.php"> add car</a>

                                                            </h4>
                                                        </div>
                                                    </div>
                    </div>
<!--
                    <div class = "clientss" id = "client-2">
                        <div>
                            <h2>Name</h2>
                            <p>Mariusz Hodana</p>
                        <img class="image-client" src="public/img/clients/client.svg">
                        </div>
                        <div class = "elo">
                            <div class = "data-class-grid">
                                <h4>Adress</h4>
                                <p>Myślenice</p>
                                <h4>Phone-Number</h4>
                                <p>321312321</p>
                                <h4>Email</h4>
                                <p>Mariuszelo@gmal.</p>
                                <h4>Cars</h4>
                                <p>Seat Leon</p>
                                <h4>
                                    <a href="addCar.php"> add car</a>
                                    
                                </h4>
                                
                            </div>
                        </div>
                    </div>
                    <div class = "clientss" id = "client-3">
                        <div>
                            <h2>Name</h2>
                            <p>Mariusz Hodana</p>
                        <img class="image-client" src="public/img/clients/client.svg">
                        </div>
                        <div class = "elo">
                            <div class = "data-class-grid">
                                <h4>Adress</h4>
                                <p>Myślenice</p>
                                <h4>Phone-Number</h4>
                                <p>321312321</p>
                                <h4>Email</h4>
                                <p>Mariuszelo@gmal.</p>
                                <h4>Cars</h4>
                                <p>Seat Leon</p>
                                <h4>
                                    <a href="addCar.php"> add car</a>
                                    
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class = "clientss" id = "client-4"> 
                        <div>
                            <h2>Name</h2>
                            <p>Mariusz Hodana</p>
                        <img class="image-client" src="public/img/clients/client.svg">
                        </div>
                        <div class = "elo">
                            <div class = "data-class-grid">
                                <h4>Adress</h4>
                                <p>Myślenice</p>
                                <h4>Phone-Number</h4>
                                <p>321312321</p>
                                <h4>Email</h4>
                                <p>Mariuszelo@gmal.</p>
                                <h4>Cars</h4>
                                <p>Seat Leon</p>
                                <h4>
                                    <a href="addCar.php"> add car</a>
                                    
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class = "clientss" id = "client-5"> 
                        <div>
                            <h2>Name</h2>
                            <p>Mariusz Hodana</p>
                        <img class="image-client" src="public/img/clients/client.svg">
                        </div>
                        <div class = "elo">
                            <div class = "data-class-grid">
                                <h4>Adress</h4>
                                <p>Myślenice</p>
                                <h4>Phone-Number</h4>
                                <p>321312321</p>
                                <h4>Email</h4>
                                <p>Mariuszelo@gmal.</p>
                                <h4>Cars</h4>
                                <p>Seat Leon</p>
                                <h4>
                                    <a href="addCar.php"> add car</a>
                                    
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class = "clientss" id = "client-6"> 
                        <div>
                            <h2>Name</h2>
                            <p>Mariusz Hodana</p>
                        <img class="image-client" src="public/img/clients/client.svg">
                        </div>
                        <div class = "elo">
                            <div class = "data-class-grid">
                                <h4>Adress</h4>
                                <p>Myślenice</p>
                                <h4>Phone-Number</h4>
                                <p>321312321</p>
                                <h4>Email</h4>
                                <p>Mariuszelo@gmal.</p>
                                <h4>Cars</h4>
                                <p>Seat Leon</p>
                                <h4>
                                    <a href="addCar.php"> add car</a>
                                    
                                </h4>
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