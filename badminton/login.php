<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
        <title>Moments - Log In</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <h3>Moments - Log In</h3>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <fieldset>
                <legend>Log In</legend>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" 
                    value="" /></br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" value="" /></br>
            </fieldset>
            <input type="submit" value="Log In" name="submit">
        </form>
    </body>
</html>
