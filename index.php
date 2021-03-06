<?php include __DIR__.'/config.php'; ?>

<html>
<head>
    <title>Форма авторизации</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=0.9,user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="Favorit Lab - ништяк фирма">
    <link rel="stylesheet" href="./css/site.07c0212e8cca2.css" media="all">
    <link rel="stylesheet" href="./css/auth.07c0212e8cca2.css" media="all">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<body>
  <canvas id="starrysky"></canvas>
    <canvas id="twinkle"></canvas>
    <canvas id="shooting"></canvas>
    <!-- Login -->
    <div class="login signin">
	<div class="login_logo"></div>
	
    <?php if(AUTH) { //Если мы авторизированы ?>

    Привет, <?php echo $user['name']; ?>!
    <a href="login.php?logout">Выход</a>

<?php } else { //Если мы не авторизированы  ?>
        
	<form action="login.php" id="myform" method="post">
		<input id="login" class="anim" name="login" placeholder="Email or login" size="20" maxlength="30" value="" tabindex="101" autocapitalize="none" autocorrect="off" required="" autofocus="" type="text">
		<input id="password" class="anim" name="password" placeholder="Password" size="20" maxlength="60" value="" tabindex="102" autocapitalize="none" autocorrect="off" required="" type="password">
		<div id="recaptcha-signin" class="g-recaptcha" style="margin: auto; width: 65%; display: none;"><div style="width: 164px; height: 144px;"><div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Ldwng0TAAAAABBCsQx5eswEBBH-94W2_8FIoPJS&amp;co=aHR0cHM6Ly9pbm1hYy5vcmc6NDQz&amp;hl=ru&amp;type=image&amp;v=VZKEDW9wslPbEc9RmzMqaOAP&amp;theme=dark&amp;size=compact&amp;cb=scelj4hnf7f0" width="164" height="144" role="presentation" name="a-v0ats9uqad3c" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
		<div class="status-signin" style="color: #b7c0c5; /* font-size: 11px; */">You must enter the name and password</div>
            <?php if(!empty($message)) { ?>
    <p><?php echo $message; ?></p>
    <?php } ?>
        <ul class="login_buttons">
                    
			<li>
			<a href="" onclick="document.getElementById('myform').submit(); return false;" title="Log in" class="next anim fa fa-arrow-right"></a>
			
			</li>
		</ul>
	</form>
        
<?php } ?>
        
</div>

    <script src="./js/auth.07c0212e8cca2.js"></script>    
    
</body>
</html>




<html>
<head>
    <title>Пример авторизации на сайте</title>
</head>
<body>

<?php if(AUTH) { //Если мы авторизированы ?>

    Привет, <?php echo $user['name']; ?>!
    <a href="login.php?logout">Выход</a>

<?php } else { //Если мы не авторизированы  ?>

<form action="login.php" method="post">
    <p>Имя пользователя: <input type="text" name="login" /></p>
    <p>Пароль: <input type="password" name="password" /></p>
    <p>Запомнить меня: <input type="checkbox" name="remember" /></p>
    <?php if(!empty($message)) { ?>
    <p><?php echo $message; ?></p>
    <?php } ?>
    <p><input type="submit" value="Вход" /></p>
</form>

<?php } ?>

</body>
</html>