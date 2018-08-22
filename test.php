<?php
/**
 * Desc
 *
 * @author Heiko Griga <h.griga@teilehaber.de>
 * @date   22.08.2018, 14:52
 */

include './vendor/autoload.php';

use BMI\BMI as BMI;

$bmi = new BMI();

$bmi->setHeight(1.85);
$bmi->setWeight(70.2);
echo $bmi->calculateBMI();