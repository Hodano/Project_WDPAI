<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="public/css/style-calender.css">
    <script src="https://kit.fontawesome.com/d10620c300.js" crossorigin="anonymous"></script>
    <script src="public/Js/scrypt-calendar.js"></script>
    <title> Calander Page </title>
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
                        <a href="/history" class="client-menu">History</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-sack-dollar"></i>
                        <a href="price-list" class="client-menu">Price list</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-gear"></i>
                        <a href="/index" class="client-menu">Log out</a>
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
                    <div class ="add-term">
                        <div class="nav-term" id="navTerm"><h1>Add a term</h1></div>
                            <div class = "form-term-hidden" class = "form-term" id ="formTerm">
	                            <form class = form-class id = "navForm" method="POST" action="calendar" >
		                            <div class = "first-form">
                                        <label>Data of event:</label>
                                        <input type="date" name="dateOfEvent" placeholder="date of event">
                                    </div>
		                            <div class = "second-form">
                                        <label>Description event:</label>
		                                <input type="text" name="event" placeholder="name">
                                        <button class="second-button-form" form="navForm" type="submit">add</button>
		                                
                                    </div>

		                
		                            
	                            </form>
                            </div>
                    </div>
                    <div class = "display-term">
                        <div class="terms" id = "term1">
                            <div class = "each-term">
                                <h1>Your Data:</h1>
                                <p><?=$calendar ->getDateOfEvent() ?></p>
                            </div>
                            <div class="each-price" >
                                <h1>Event:</h1>
                                <p><?=$calendar ->getEvent() ?></p>
                            </div>
                        </div>
                        <div class="terms" id = "term1">
                            <div class = "each-term">
                                <h1>Your Data:</h1>
                                <p>20.12.2014</p>
                            </div>
                            <div class="each-price" >
                                <h1>Event:</h1>
                                <p>You have to do evrything</p>
                            </div>
                        </div>
                        <div class="terms" id = "term1">
                            <div class = "each-term">
                                <h1>Your Data:</h1>
                                <p>20.12.2014</p>
                            </div>
                            <div class="each-price" >
                                <h1>Event:</h1>
                                <p>You have to do evrything</p>
                            </div>
                        </div>
                        <div class="terms" id = "term1">
                            <div class = "each-term">
                                <h1>Your Data:</h1>
                                <p>20.12.2014</p>
                            </div>
                            <div class="each-price" >
                                <h1>Event:</h1>
                                <p>You have to do evrything</p>
                            </div>
                        </div>
                        <div class="terms" id = "term1">
                            <div class = "each-term">
                                <h1>Your Data:</h1>
                                <p>20.12.2014</p>
                            </div>
                            <div class="each-price" >
                                <h1>Event:</h1>
                                <p>You have to do evrything dasdasdas a dasd as das da</p>
                            </div>
                        </div>
                        <div class="terms" id = "term1">
                            <div class = "each-term">
                                <h1>Your Data:</h1>
                                <p>20.12.2014</p>
                            </div>
                            <div class="each-price" >
                                <h1>Event:</h1>
                                <p>You have to do evrything</p>
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