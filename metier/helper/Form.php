<?php
//Déclaration du namespace pour la class Form :
namespace PhpProjetAttestation\helper;

class Form {
    //Fonction simple qui retournera un champ de texte :
    static function Input($val=null){
    $style='border:solid 1px #ccc;width:50px;';
    return '<div style="'.$style.'"><input type="text" value="'.$val.'" /></div>';
    }
}