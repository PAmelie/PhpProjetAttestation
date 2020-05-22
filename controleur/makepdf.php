<?php
/*require './vue/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();
$html2pdf->writeHTML('<h1>HelloWorld</h1>This is my first test');
ob_end_clean();
$html2pdf->output();*/

/*
require './metier/helper/Form.php';
use App\Helper\Form;
echo Form::Input('Hello World !');
 */
 
/*require dirname(__DIR__).'/vue/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
use PhpProjetAttestation\Metier\Helper\Form;
$myForm = '<h1>Formulaire de reservation</h1>';
$myForm .= 'Votre nom :';
$myForm .= Form::Input('Ici votre NOM');
$myForm .= '<br /><br />';
$myForm .= 'Votre prenom :';
$myForm .= Form::Input('Ici votre PRENOM');
$myForm .= '<br /><hr />';

$html2pdf = new Html2Pdf();
$html2pdf->writeHTML($myForm);
$html2pdf->output();*/