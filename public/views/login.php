<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="public/css/style-login.css">
    <title> Login Page </title>
</head>
<body>
    <div class="container">
        <div class= " login-all">
            <div class="login-field-container">
            <form id="logInForm" class="form-class-with-field" action="login" method="POST">
                <div class="messages">
                    <?php if(isset($messages)){
                        foreach ($messages as $message) {
                            echo $message;
                        }
                    }
                    ?>
                </div>
                    <input class= "field-email" name="email" type="tex" placeholder="email@email.com">
                    <input class="field-password"  name="password" type="password" placeholder="password">
    
                </form>
            </div>
            <div class = "button-login-container">
                
                    <button class="button-log-in" type="submit" form="logInForm">Log in</button>
                    <button class="button-sign-up" type="button">
                        <a href="register">Sign Up</a>
                    </button>
                
                </div>
        </div>    
        <div class="logo">
            <img class="logo-img" src="public/img/logo.svg">
        </div>
    </div>
</body>