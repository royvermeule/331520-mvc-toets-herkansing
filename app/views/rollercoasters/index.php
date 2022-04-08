
<?php
        foreach ($data['rollercoaster'] as $rollercoaster);

        echo "RollerCoaster: " . $rollercoaster->nameRollerCoaster ;
            echo "<br>";
        echo "Park: " . $rollercoaster->NameAmusementPark;
            echo "<br>";
        echo "Country: " . $rollercoaster->country;
            echo "<br>";
        echo "Topspeed: " . $rollercoaster->topspeed;
            echo "<br>";
        echo "Height: " . $rollercoaster->height;
            echo "<br>";
            echo "<br>"

?>
<a href="<?=URLROOT;?>/pages/index">terug</a>
