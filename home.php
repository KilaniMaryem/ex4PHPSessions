<?php
    session_start();


    ?>
<html >
<head>
    <meta charset="UTF-8">
   
    <title>Notes</title>
</head>
<body>
    <h1 >Ajouter une note:</h1>
    
    <form action="notes.php" method="post">
        <label for="title">Title</label><br><br>
        <input type="text" name="title"><br><br>
        <textarea name="textarea"  cols="20" rows="20"></textarea><br><br>
        <input type="submit" value="Enregistrer"><br><br>
    </form>
    <h3>Pour voir vos notes cliquez <a href="notes.php">ici</a></h3>
</div>
    
</body>
</html>