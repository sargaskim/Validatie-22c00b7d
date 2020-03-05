<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Email</title>
</head>

<body>

    <header></header>

    <main>

        <form action="" method="get">
            
            <div id="inputs">

                <input type="text" name="email" id="email" class="form-shit" placeholder="email addres">
                
            </div>

            <div >
                <input id="send" name="send" type="submit" value="send!">
            </div>

        </form>

        <?php
                    if (filter_var($_GET["email"], FILTER_VALIDATE_EMAIL)) {
                        echo "<h1> Email is valid</h1>";
                    } 
                    else {
                        echo"<h1> Email is not valid</h1>";
                    }
        ?>

    </main>
    
    <footer></footer>

</body>

</html>