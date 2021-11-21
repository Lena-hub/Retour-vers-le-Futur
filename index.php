<?php

$presentTime  = new DateTime;
$destinationTime = new DateTime('1991-05-24 8:00'); // Année - Mois - Jour - Heure

$interval = $presentTime->diff($destinationTime);

$minutes = ($interval->format('%y') * 24 * 60 * 365) + ($interval->format('%d') * 24 * 60) + ($interval->format('%h') * 60) + ($interval->format('%i'));

$conso = $minutes / 10000;

?>

<!DOCTYPE html>
<html lang="En">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Retour vers le futur</title>
</head>
<body>
    <div id="container">
        <form id="tableauDeBord" action="/private/connexion" method="POST">
            <div class = "affichageDateArrivee">
                <div class = "info month">
                    <label for="month"><b>MOIS</b></label>
                    <input class="infoDateArrivee" type="text" id="month" value = "<?php echo $destinationTime->format('M'); ?>" name="mouth" >
                </div>
                <div>
                    <label for="day"><b>DAY</b></label>
                    <input class="infoDateArrivee" type="text" id="day" value = "<?php echo $destinationTime->format('d'); ?>" name="day" >
                </div>
                <div>
                    <label for="year"><b>YEAR</b></label>
                    <input class="infoDateArrivee" type="text" id="year" value = "<?php echo $destinationTime->format('Y'); ?>" name="year" >
                </div>
                <div>
                    <label for="am/pm"><b>AM/PM</b></label>
                    <input class="infoDateArrivee" type="text" id="am/pm" value = "<?php echo $destinationTime->format('A'); ?>" name="am/pm" >
                </div>
                <div>
                    <label for="hour"><b>HOUR</b></label>
                    <input class="infoDateArrivee" type="text" id="hour" value = "<?php echo $destinationTime->format('h'); ?>" name="hour" >
                </div>
                    <label for="min"><b>MIN</b></label>
                    <input class="infoDateArrivee" type="text" id="min" value = "<?php echo $destinationTime->format('i'); ?>" name="min" >
                </div>
            </div>
            <p class ="dest">DESTINATION TIME</p>

                <div>
                    <label for="month"><b>MONTH</b></label>
                    <input class="infoDateDepart" type="text" id="month" value = "<?php echo $presentTime->format('M'); ?>" name="mouth" >
                </div>
                <div>
                    <label for="day"><b>DAY</b></label>
                    <input class="infoDateDepart" type="text" id="day" value = "<?php echo $presentTime->format('d'); ?>" name="day" >
                </div>
                <div>
                    <label for="year"><b>YEAR</b></label>
                    <input class="infoDateDepart" type="text" id="year" value = "<?php echo $presentTime->format('Y'); ?>" name="year" >
                </div>
                <div>
                    <label for="am/pm"><b>AM/PM</b></label>
                    <input class="infoDateDepart" type="text" id="am/pm" value = "<?php echo $presentTime->format('A'); ?>" name="am/pm" >
                </div>
                <div>
                    <label for="hour"><b>HOUR</b></label>
                    <input class="infoDateDepart" type="text" id="hour" value = "<?php echo $presentTime->format('h'); ?>" name="hour" >
                </div>

                <div>
                    <label for="min"><b>MIN</b></label>
                    <input class="infoDateDepart" type="text" id="min" value = "<?php echo $presentTime->format('i'); ?>" name="min" >
                </div>
            </div>
            <p class ="dest">PRESENT TIME</p>


            <div>
                <div>
                    <label for="month"><b>MONTH</b></label>
                    <input class="infoDateInterval" type="text" id="month" value = "<?php echo $interval->format('%m'); ?>" name="mouth" >
                </div>
                <div>
                    <label for="day"><b>DAY</b></label>
                    <input class="infoDateInterval" type="text" id="day" value = "<?php echo $interval->format('%d'); ?>" name="day" >
                </div>
                <div>
                    <label for="year"><b>YEAR</b></label>
                    <input class="infoDateInterval" type="text" id="year" value = "<?php echo $interval->format('%y'); ?>" name="year" >
                </div>
                <div>
                    <label for="hour"><b>HOUR</b></label>
                    <input class="infoDateInterval" type="text" id="hour" value = "<?php echo $interval->format('%h'); ?>" name="hour" >
                </div>

                <div>
                    <label for="min"><b>MIN</b></label>
                    <input class="infoDateInterval" type="text" id="min" value = "<?php echo $interval->format('%i'); ?>" name="min" >
                </div>

                <div class = "info sec">
                    <label for="sec"><b>SEC</b></label>
                    <input class="infoDateInterval" type="text" id="sec" value = "<?php echo $interval->format('%s'); ?>" name="sec" >
                </div>
            </div>
            <p class ="dest">INTERVAL TIME</p>


            <div>
                <label for="carbu"><b>QUANTITE DE CARBURANT NECESSAIRE</b></label>
                <input class="affichageCarbu" type="text" id="CARBU" value = "<?php echo $conso; ?>" name="CARBU" >
            </div>
        </form>
    </div>
</body>
</html>
