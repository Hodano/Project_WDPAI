<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="public/css/style-client.css">
    <script src="https://kit.fontawesome.com/d10620c300.js" crossorigin="anonymous"></script>
    <script src="public/Js/scrypt-client.js"></script>
    <script type="text/javascript" src="./public/Js/scrypt-search-client.js" defer></script>
    <title> Clients Page </title>
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
                        <a href="/logout" class="client-menu">Log Out</a>
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
                    <li>
                        <?php if (isset($_SESSION['user']) && $_SESSION['user']->getRole() === 'admin'): ?>
                            <form method="POST" action="/deleteUserByEmail">
                                <input type="email" name="email">

                                <button type="submit" class="delete-button">Delete User</button>
                            </form>
                        <?php endif; ?>

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
                    <div class="search-client">

                            <input class="search-class" placeholder="search client">

                    </div>
                </header>
                <section class="client-section">
                    <?php foreach ($clients as $client):?>
                    <div class = "clientss" >
                        <div>
                            <h2>Name</h2>
                            <p class="name"><?=$client ->getNameAndSurname();?></p>
                        <img class="image-client" src="public/img/clients/client.svg">
                        </div>
                        <div class = "elo">
                            <div class = "data-class-grid">
                                <h4>Adress</h4>
                                <p class="address"><?=$client ->getAddress();?></p>
                                <h4>Phone-Number</h4>
                                <p class="phoneNumber"><?=$client ->getPhoneNumber()?></p>
                                <h4>Email</h4>
                                <p class="email"><?=$client ->getEmail();?></p>
                                <input type="hidden" name="id" value="<?=$client -> getId();?>">
                                <h4>Cars</h4>
                                <?php
                                foreach ($client->getCars() as $car):?>
                                <div style="border: 1px solid #775B5B; border-radius: 10%;">
                                    <p style="font-weight: bold; text-align: center"><?=$car ->getCarModel();?></p>
                                    <p style = "font-size: 8px; text-align: center;">Number VIN</p>
                                    <p style="font-weight: bold; text-align: center"><?=$car ->getNumberVIN();?></p>

                                </div>

                                <?php endforeach; ?>
                                <h4>
                                    <a href="addCar?clientId=<?=$client->getId();?>"</p> add car</a>
                                </h4>
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
<template id="client-template">
    <div class = "clientss" >
        <div>
            <h2>Name</h2>
            <p class="name"></p>
            <img class="image-client" src="public/img/clients/client.svg">
        </div>
        <div class = "elo">
            <div class = "data-class-grid">
                <h4>Adress</h4>
                <p class="address"></p>
                <h4>Phone-Number</h4>
                <p class="phoneNumber"></p>
                <h4>Email</h4>
                <p class="email"></p>
                <h4>Cars</h4>
                <p>Prawdopodobnie do wyjebania</p>
                <h4>
                    <a href="addCar.php"> add car</a>

                </h4>
            </div>
        </div>
    </div>
</template>
