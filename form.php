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

                <input type="email" name="email" id="emailaddres" class="form-shit" placeholder="email addres">
 
                <input type="text" name="text" id="subject" class="form-shit" placeholder="subject">
      
                <textarea id="mailtext" class="form-shit" placeholder="text" name="text" rows="14" cols="10" wrap="soft"></textarea>
                
            </div>

            <div >
                <input name="send" type="submit" value="send!" onclick="mail($emailaddres, $subject, $mailtext, $headers)">
            </div>
        </form>

        <?php

            
        ?>
    </main>
    
    <footer></footer>

</body>

</html>