<form class="" action="<?php echo ROOT ?>/tournooi/start" method="post">
    <?php
        for ($i=0; $i < $aantalSpelers; $i++) {
            echo "
                <select class='selectBoxesSetup' name='speler$i'>
                    <option value='speler$i'>speler$i</option>
                </select><br>
            ";
        }

     ?>
     <input type="hidden" name="aantal" value="<?php echo $aantalSpelers?>">
    <input type="submit" name="" value="start tournooi">
</form>
