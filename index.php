<?php
$submit = filter_input(INPUT_POST, 'submit');
$dough = filter_input(INPUT_POST, 'dough');
$ham = filter_input(INPUT_POST, 'ham');
$fefe = filter_input(INPUT_POST, 'fefe');
$fich = filter_input(INPUT_POST, 'fish');
$cheese = filter_input(INPUT_POST, 'cheese');
var_dump($submit);
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($submit)) { ?>
        Děkujeme za objednávku </br>
        Vaše pizza bude s:

        <p><?= $dough ?> těsto</p>
        <?php 
        if(isset($cheese)) { ?>
            <p>se sýrem</p>
        <?php } 
        if(isset($ham)) { ?>
            <p>se šunkou</p>
        <?php } 
          
        if(isset($fefe)) { ?>
            <p>s feferonkami</p>
        <?php }
        if(isset($fish)) { ?>
            <p>s rybištou</p>
        <?php }



        }   else { ?>
            
            <form action="index.php">
        <h2>Typ těsta</h2>
        <input type="radio" name="dough" id="normal" value="normal">
        <label for="normal">Normální</label></br>
        
        <input type="radio" name="dough" id="glutenfree" value="glutenfree">
        <label for="glutenfree">Bezlepkové</label></br>
        
        <h2>Maso</h2>
                
        <input type="checkbox" name="ham" id="ham">
        <label for="ham">Šunka</label></br>
        
        <input type="checkbox" name="fefe" id="fefe">
        <label for="fefe">Feferonky</label></br>        
        
        <input type="checkbox" name="fish" id="fish">
        <label for="fish">Rybišty</label></br>       
        
        <input type="checkbox" name="cheese" id="cheese">
        <label for="cheese">Sýr</label></br>

        <input type="submit" name="submit" value="Odeslat">
    </form>
      <?php  }    
    ?>
    

</body>
</html>