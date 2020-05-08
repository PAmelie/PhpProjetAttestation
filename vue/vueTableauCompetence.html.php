<?php 
require_once "../modele/authentification.inc.php";
include_once "../modele/mysql.php";
$result=readAll ("themes");
?>                                               
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de compétences</title>
 <!-------css -->
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="container-fluid banner">
        <div class="container-fluid">
                <div class="ban">
                    <img src="img/binary.jpg" alt="logo" class="img-responsive">
                </div>
        </div>
    </section>
    <section class="container-fluid about">
        <div class="container-fluid">
            <div class="row">
               <h1> Attestation de compétences</h1> 
               <h2> BTS SIO SLAM </h2>
               <h3> Cette attestation vise à expliciter, formaliser et valoriser les compétences développées à l'occasion d'un parcours de formation</h3>
            </div>
        </div>
    </section>
    <section class="container-fluid tableau">
        <div class="container_fluid">
            <table class="table table-bordered">
                <tbody>
                    <thead>
                      <?php 
                        while($row = $result->fetch_assoc()):
                        
                        ?>
                        <td style="width:70%; background-color: green; text-align: center; vertical-align:middle; color:white"><?php echo $row['nom'];?></td>;
                        <?php    
                          
                        endwhile;
                         ?> 
                             <th> Non Acquis</th>
                             <th> Partiellement Acquis</th>
                             <th> Acquis à un niveau suffisant</th>
                             <th> Dépassé </th>
                        </tr>
                        
                       
                     
                    </thead>
            </table>       
                        
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width:100%; background-color:forestgreen; text-align: center; vertical-align:middle; color:white"> Compétences générales </th>
                        </tr>
                    </thead>
            
                </table>
                <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Rechercher et apprécier la qualité d'une information de nature économique </th>
                                <th></th>
                                <th></th> 
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                </table> 
                <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Rechercher et apprécier la qualité d'une information de nature juridique </th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                </table> 
                <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Rechercher et apprécier la qualité d'une information de nature managériale </th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                </table>
                <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Exploiter une documentation de nature économique </th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                </table>        
                <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Exploiter une documentation de nature juridique </th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                </table>        
                <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Exploiter une documentation de nature managériale </th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                </table>        
                <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Synthétiser une documentation de nature juridique </th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                </table> 
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Synthétiser une documentation de nature managériale</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                </table>  
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Développer une argumentation cohérente et structurée </th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
               </table>
               <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width:100%; background-color:forestgreen; text-align: center; vertical-align:middle; color:white">EM1- Analyse structurelle du secteur informatique </th>
                        </tr>
                    </thead>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Analyser une demande : caractéristiques des acteurs économiques  </th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
               </table>
               <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Identifier et analyser les caractéristiques d'un marché </th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
               </table>
               <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Evaluer les caractéristiques économiques d'une solution </th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
               </table>
               <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Repérer les contraintes liées au coût dans la fixation des prix </th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
               </table>
               <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Analyser un contrat en termes d'information et de risques </th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
               </table>
               <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width:100%; background-color:forestgreen; text-align: center; vertical-align:middle; color:white">EM2- Analyse dynamique du secteur informatique </th>
                    </tr>
                </thead>
            </table>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Evaluer les caractéristiques économiqes de solutions </th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
               </table>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Repérer et expliquer les tendnaces du maché à partir d'une documentatin fournie</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
               </table>
               <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Evaluer les risques économiques associés à des solutions et des décisions </th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Analyser une demande et notamment décrire la contribution des TIC à la prise en compte de l'évolution des contraintes et des comportements économiques </th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                   </table>
                   <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Identifier les opportunités du marché lors de l'activité de veille technologique </th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                   </table>
                   <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width:100%; background-color:forestgreen; text-align: center; vertical-align:middle; color:white"> EM3 - Les principes de fonctionnement d'une organisation </th>
                        </tr>
                    </thead>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Situer une activité dans une organisation en en repérant les principales caractéristiques </th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                   </table>
                   <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Travailler en mode projet </th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                   </table>
                   <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Repérer les principes de spécialisation au sein de l'organisation </th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                   </table>
                   <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Repérer les mécanismes de coordination </th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                   </table>
                   <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Gérer les connaissances et les compétences </th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                   </table>
                   <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width:100%; background-color:forestgreen; text-align: center; vertical-align:middle; color:white">EM4 - Le SI et les processus de l'organisation (décisionnel, opérationnel)	</th>
                        </tr>
                    </thead>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Repérer et analyser les différents processes et flux d'information de l'organisation </th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                   </table>
                   <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Comprendre les rôles des différents acteurs au sein de ces processus </th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                   </table>
                   <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Analyser le niveau d'adéquation entre les choix du SI et les caractéristiques de l'organisation </th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                   </table>
                   <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Prendre en compte les caractéristiques structurelles et stratégique dans l'analyse du SI	 </th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                   </table>
                   <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width:100%; background-color:forestgreen; text-align: center; vertical-align:middle; color:white">D1 - Principes fondamentaux du droit et leur application au secteur informatique </th>
                        </tr>
                    </thead>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Appréhender l'existence du droit de l'informatique, dégager ses principes </th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table>
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Repérer les sources et leurs hiérarchie </th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table>
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Caractériser les personnes juridiques </th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table>
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Protéger une  identité numérique	 </th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table>
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Identifier et hiérarchiser les différentes juridictions nationales et/ou communautaires </th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table>
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Créer et mettre en œuvre des moyens de preuve appropriés </th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table>
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:100%; background-color:forestgreen; text-align: center; vertical-align:middle; color:white">D2- L'informaticien salarié et le droit du travail	</th>
                            </tr>
                        </thead>
                       </table>
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Identifier les différentes sources du droit du travail</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table>
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Hiérarchiser les règles, dégager leur complémentarité	</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table>
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Analyser une convention collective ou un accord d'entreprise </th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table>
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Analyser un contrat de travail et ses différentes clauses</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table>
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Identifier les principaux dispositifs de formation professionnelle et percevoir les enjeux de la formation</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table>
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Qualifier les modifications de la relation de travail et en déduire les conséquences juridiques</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table>
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Caractériser le rôle et le fonctionnement du conseil de prud'hommes</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table>
                       <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th style="width:100%; background-color:forestgreen; text-align: center; vertical-align:middle; color:white">D3 - L'environnement juridique de la production et de la fourniture de services</th>
                           </tr>
                       </thead>
                      </table> 
                      <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Identifier les conditions générales de formation et de validité d'un contrat</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table>
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Repérer les obligations et moyens d'action des parties et leur nature juridique</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table>
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Analyser des contrats relatifs au domaine de l'informatique et au réseau internet entre professionnels</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table>
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Identifier le champ d'application de la responsabilité professionnelle</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table>
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Contribuer au choix d'un nom de domaine et d'une extension en fonction de critères commerciaux et juridiques</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table>
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Identifier les caractéristiques des extensions les plus utilisées</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table>
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Accomplir les formalités d'enregistrement d'un nom de domaine auprès d'un organisme agréé</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table>
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Identifier les différentes procédures de règlement des conflits entre noms de domaine et entre nom de domaine et marques</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table>
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Gérer des noms de domaines en cas de changement d'hébergeur</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table>
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Respecter les obligations légales relatives à la création d'un site marchand</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table>
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Analyser un contrat électronique entre professionnels et non professionnels et entre professionnels</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table> 
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:100%; background-color:forestgreen; text-align: center; vertical-align:middle; color:white">D4 - La protection juridique des outils et des productions numériques</th>
                            </tr>
                        </thead>
                       </table>  
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Identifier les éléments protégés, les modes de protection et leurs limites</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table> 
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Identifier les titulaires des droits</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table> 
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Présenter les caractéristiques du droit d'auteur français	</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table> 
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Caractériser les licences d'exploitation des logiciels propriétaires et des logiciels libres en prenant en compte les modèles économiques correspondants</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table> 
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Analyser et caractériser les grandes catégories de licences régissant les logiciels libres</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table> 
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Analyser une licence d'exploitation de logiciels</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table> 
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Identifier et caractériser les divers modalités de protection d'une base de données</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table>
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:100%; background-color:forestgreen; text-align: center; vertical-align:middle; color:white">D5 - La sécurité des systèmes d'information</th>
                            </tr>
                        </thead>
                       </table>  
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Identifer les obligations légales qui s'imposent à un service informatique en matière d'archivage et de protection des données de l'entreprise afin d'organiser la collecte et la conservation de la preuve numérique	</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table>
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Respecter la législation en matière de collecte et la conservation des preuves numériques	</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table>
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Accomplir les formalités de déclaration de traitement des données à caractère personnel à la CNIL</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table>
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Identifier et respecter les droits des personnes sur leurs données</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table>
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Contribuer à l'information des salarié lors de la mise en œuvre d'une cybersurveillance</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table>
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Respecter les droits des salariés sur leur lieu de travail en matière de correspondancce électronique, de dossiers personnels, etc.</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table>
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Contribuer à définir les conditions d'utilisation des outils numériques à travers une charte</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table> 
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:100%; background-color:forestgreen; text-align: center; vertical-align:middle; color:white">D6 - La responsabilité des prestataires internes et externes</th>
                            </tr>
                        </thead>
                       </table>
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Identifier la notion de responsabilité, en repérer les fondements et leur évolution</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table> 
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Identifier les obligations légales des hébergeurs de contenu à accès public</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table> 
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Analyser un contrat de prestation où la responsabilité des prestataires externes est engagée</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table> 
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Repérer les obligation réciproques des parties</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table> 
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">En déduire la responsabilité des parties en cas de défaillances</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table> 
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Identifier et respecter les obligations légales des administrateurs systèmes</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table> 
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Situer les niveaux de responsabilité des différents acteurs</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table> 
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Identifier et respecter les obligations légales des concepteurs de solutions logicielles</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table> 
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Analyser un contrat de prestation de conception de solutions logicielles</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table> 
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">Repérer les obligations réciproques des parties au contrat de prestation de conception de solutions logicielles</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table> 
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:70%; text-align: right; vertical-align:middle; color: black">En déduire la responsabilité des parties en cas de défaillances</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       </table> 
                       <table class="table table-bordered">
                        
                            <thead>
                                <tr>
                                    <th style="width:70%; background-color: green; text-align: center; vertical-align:middle; color:white"> Enseignement Commun : Solutions informatiques</th>
                                    <th> Non Acquis</th>
                                    <th> Partiellement Acquis</th>
                                    <th> Acquis à un niveau suffisant</th>
                                    <th> Dépassé </th>
                                </tr>
                            </thead>
                    </table> 
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:100%; background-color:forestgreen; text-align: center; vertical-align:middle; color:white">SI1- Support système des accès utilisateurs</th>
                            </tr>
                        </thead>
                       </table>
                       <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Identifier le rôle et l'impact de l'ensemble des composants sur le système</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table> 
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Installer un composant d'unité de mémoire de masse et d'unité de mémoire centrale</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>   
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Justifier le choix d'une solution technique d'un ou plusieurs serveur(s)</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>   
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Installer, configurer, administrer le système d'exploitation d'une solution technique d'accès</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>   
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Comprendre l'architecture du système et sa virtualisation</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>   
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Paramétrer une solution de sauvegarde du système</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>   
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Exploiter un environnement de travail collaboratif</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>   
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Valider et documenter une solution technique d'accès</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table> 
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:100%; background-color:forestgreen; text-align: center; vertical-align:middle; color:white">SI2- Support réseau des accès utilisateurs	</th>
                                </tr>
                            </thead>
                           </table> 
                           <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Caractériser les éléments d'interconnexion d'un réseau</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table> 
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black"> installer et configurer un élément d'interconnexion</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table> 
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Exploiter un service de base</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table> 
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Connecter une solution technique d'accès au réseau</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table> 
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Valider et documenter une connexion réseau</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table> 
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black"> Analyser des unités de données de protocole</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:100%; background-color:forestgreen; text-align: center; vertical-align:middle; color:white">SI3- Exploitation des données</th>
                                </tr>
                            </thead>
                           </table>
                           <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Extraire et modifier les données d'une base de données</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Implémenter une base de données à partir d'un schéma existant</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Configurer les droits d'accès à une base de données</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Caractériser une solution d'implémentation des données</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:100%; background-color:forestgreen; text-align: center; vertical-align:middle; color:white">SI4- Base de la programmation</th>
                                </tr>
                            </thead>
                           </table> 
                           <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Programmer à l'aide d'un langage de programmation structurée</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Modéliser un programme en utilisant des classes d'objets</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Utiliser un environnement de développement</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Appliquer des normes de développement</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:100%; background-color:forestgreen; text-align: center; vertical-align:middle; color:white">SI5- Support des services et des serveurs</th>
                                </tr>
                            </thead>
                           </table>
                           <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Savoir ce qu'est un hyperviseur, l'installer et le paramétrer</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Installer une VM, paramétrer son accès sur le réseau</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">installer, configurer et administrer un système d'exploitation sous GNU/LINUX</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Exploiter les fonctions de base d'un langage de commandes et par extension d'un script</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Configurer, administrer, mettre à jour un serveur et un service à distance</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Installer, configurer et administrer une solution technique d'accès LAMP</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Configurer et sécuriser l'accès à distance des utilisateurs</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Mettre en œuvre un protocole sécurisé associé à un service</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Gérer les habilitations d'accès aux ressources d'un serveur et d'un service</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <<th style="width:70%; text-align: right; vertical-align:middle; color: black">Valider et documenter la mise en exploitation d'un serveur et d'un groupe de services</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:100%; background-color:forestgreen; text-align: center; vertical-align:middle; color:white">SI6- Développement d'applications</th>
                                </tr>
                            </thead>
                           </table> 
                           <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">concevoir une interface utilisateur</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">interpréter un schéma de base de données</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">développer et maintenir une application exploitant une base de données partagée</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">élaborer des jeux d'essais</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">valider et documenter une application</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">rédiger une documentation d'utilisation</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">utiliser des outils de travail collaboratif</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:100%; background-color:forestgreen; text-align: center; vertical-align:middle; color:white">SI7- Intégration et adaptation d'un service</th>
                                </tr>
                            </thead>
                           </table>
                           <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Déployer une solution de sauvegarde et de restauration des données</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Installer, configurer et administrer un système d'exploitation sous Windows Server</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Installer et paramétrer un hyperviseur de type 1</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Elaborer une stratégie d'accès et de service pour les utilisateurs</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Installer, configurer un domaine Active Directory associé a une stratégie de groupe</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Valider et documenter la mise en exploitation d'un service</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Installer, configurer et administrer un système d'exploitation sous DEBIAN</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Installer et configurer un outil d'inventaire de gestion des configurations</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <<th style="width:70%; text-align: right; vertical-align:middle; color: black">Automatiser et planifier l'installation à distance d'un service</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Installer et configurer un logiciel de gestion d'incidents</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Sauvegarder et restaurer une base de données</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Etablir un plan de formation à un nouveau service</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:100%; background-color:forestgreen; text-align: center; vertical-align:middle; color:white">SLAM1- Exploitation d'un schéma de données</th>
                                </tr>
                            </thead>
                           </table> 
                           <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">modifier un schéma de données et l'implantation de la base de données correspondante</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Vérifier la normalisation d'une base de données</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">adapter une application exploitant une base de données à l'évolution de son schéma</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table> 
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:100%; background-color:forestgreen; text-align: center; vertical-align:middle; color:white">SLAM2- Programmation objet	</th>
                                </tr>
                            </thead>
                           </table>
                           <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">programmer à l'aide d'un langage de programmation objet</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table> 
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">configurer et utiliser un environnement de développement</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table> 
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Modéliser un programme objet</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>  
                           <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:100%; background-color:forestgreen; text-align: center; vertical-align:middle; color:white">SLAM3- Conception et adaptation d'une base de données</th>
                                </tr>
                            </thead>
                           </table> 
                           <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">concevoir une base de données</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table> 
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">valider et normaliser un schéma de base de données</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table> 
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">programmer dans l'environnement de développement associé à un SGBD</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:100%; background-color:forestgreen; text-align: center; vertical-align:middle; color:white">SLAM4- Réalisation et maintenance de composants logiciels</th>
                                </tr>
                            </thead>
                           </table>
                           <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">programmer un composant logiciel</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">exploiter une bibliothèque de composants</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">adapter un composant logiciel</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">valider et documenter un composant logiciel</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">programme au sein d'un frame-work</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:100%; background-color:forestgreen; text-align: center; vertical-align:middle; color:white">SLAM5- conception et adaptation de solutions applicatives</th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">justifier le choix d'une architecture applicative</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">participer à un processus de production d'une solution applicative</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">gérer les versions d'une solution applicative</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">développer en équipe</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">valider et documenter une solution applicative</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">répondre à une demande d'assistance</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">résoudre un incident</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:100%; background-color:forestgreen; text-align: center; vertical-align:middle; color:white">MATHEMATIQUES pour l'informatique</th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Systèmes de numération</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Arithmétique</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Calcul booléen</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Langage ensembliste</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Calculs des propositions et des prédicats</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Suites numériques</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Relations binaires</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Matrices</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Graphes et ordonnancement</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:100%; background-color:forestgreen; text-align: center; vertical-align:middle; color:white">Algorithmique Appliquée</th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">compréhension d'une solution proposée</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">interprétation d'un algorithme</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">construction d'un programme conformes aux prescriptions mathématiques</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Commenter et documenter un algorithme</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Implémenter une fonction dans un langage informatique</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">mise au point et validation d'un algorithme</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:100%; background-color:forestgreen; text-align: center; vertical-align:middle; color:white">Expression et communication en langue anglaise	</th>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width:70%; text-align: right; vertical-align:middle; color: black">Activité langagière production orale en continu</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width:70%; text-align: right; vertical-align:middle; color: black">Présenter, l'orga dans laquelle on travaille, organigramme, activité, projet</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                            </table>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width:70%; text-align: right; vertical-align:middle; color: black">rendre compte d'un travail réalisé</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                </thead>
                            </table>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width:70%; text-align: right; vertical-align:middle; color: black">argumenter une décision, un choix , un point de vue dans son travail</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                    </tr>
                                </thead>
                            </table>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width:70%; text-align: right; vertical-align:middle; color: black">Justifier une façon de faire</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                    </tr>
                                </thead>
                            </table>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width:70%; text-align: right; vertical-align:middle; color: black">Expliquer à des collègues les raisons d'une décision</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                    </tr>
                                </thead>
                            </table> 
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width:70%; text-align: right; vertical-align:middle; color: black">Expliquer à des collègues les raisons d'une décision</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                    </tr>
                                </thead>
                            </table>  
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width:70%; text-align: right; vertical-align:middle; color: black">Expliquer à des collègues les raisons d'une décision</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                    </tr>
                                </thead>
                            </table> 
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width:70%; text-align: right; vertical-align:middle; color: black">Expliquer à des collègues les raisons d'une décision</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                            </table> 
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width:70%; text-align: right; vertical-align:middle; color: black">Expliquer à des collègues les raisons d'une décision</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                    </tr>
                                </thead>
                            </table> 
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width:70%; text-align: right; vertical-align:middle; color: black">Expliquer à des collègues les raisons d'une décision</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                    </tr>
                                </thead>
                            </table> 
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width:70%; text-align: right; vertical-align:middle; color: black">Expliquer à des collègues les raisons d'une décision</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                    </tr>
                                </thead>
                            </table> 
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width:70%; text-align: right; vertical-align:middle; color: black">Expliquer à des collègues les raisons d'une décision</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                    </tr>
                                </thead>
                            </table>
                            
                            
                                                                                                                                                                                             
            </tbody>                               
        </div>
        </section>

