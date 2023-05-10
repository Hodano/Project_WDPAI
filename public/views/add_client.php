<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="public/css/style-add-client.css">
    <script src="https://kit.fontawesome.com/d10620c300.js" crossorigin="anonymous"></script>
    <title> Add Client </title>
</head>
<body>
    <div class = "all-content">
        <div class ="add-client">
            <div class="add-client-nav">
                <button class="second-button-form" type="submit">Add Client</button>
            </div>
            <div  class ="form-add-client">
                <form class = form-class id = "navForm" method="POST" action="/dodaj_usluge" >
                    <div class = "first-form">
                        <label>Name and Surname:</label>
                         <input type="text" name="name_and_surname">
                    </div>
                    <div class = "first-form">
                        <label>Adress:</label>
                         <input type="text" name="adress">
                    </div>
                    <div class = "first-form">
                        <label>Phone-Number:</label>
                         <input type="number" name="phone-number">
                    </div>
                    <div class = "first-form">
                        <label>Email:</label>
                         <input type="email" name="email">
                    </div>
                    <div class = "first-form">
                        <label>Cars:</label>
                        <input type= "text" name="cars">    
                    </div>

            
                        
                    </form>
            </div>
            <div class="come-back-client-button">
                <a href="clients.php" class="client-menu">Client</a>
            </div>
        </div>
    </div>
</body>
