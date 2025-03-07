<?php
function getOffreFormations(): array
{
   $tab = array (
         'mentions' => array(                       // tableau des mentions   -> $tab['mentions']
               'Info' => array(                     //     mention Info       -> $tab['mentions']['Info']
                     'nom' => 'Informatique',       //         nom            -> $tab['mentions']['Info']['nom']
                     'parcours' => array(           //         parcours       -> $tab['mentions']['Info']['parcours']
                           'Informatique',          //             1er        -> $tab['mentions']['Info']['parcours'][0]
                           'Image',                 //             2me        -> $tab['mentions']['Info']['parcours'][1]
                        ),                          //
                     'responsable' => 'XS',         //         responsable    -> $tab['mentions']['Info']['responsable']
                  ),
               'PC' => array(                       //     mention  PC        -> $tab['mentions']['PC']
                     'nom' => 'Physique-Chimie',    //         ...
                     'parcours' => array(
                           'Physique',
                           'Chimie minérale',
                        ),
                     'responsable' => 'GA',
                  ),
               'Bio' => array(                      //     mention  Bio       -> $tab['mentions']['Bio']
                     'nom' => 'Biologie',           //         ...
                     'parcours' => array(
                           'Géologie',
                           'Biologie végétale',
                           'Biologie animale',
                        ),
                     'responsable' => 'MN',
                  ),
            ),
         'ues' => array(                            // tableau des UEs        -> $tab['ues']
               array(                               //     1re UE             -> $tab['ues'][0]
                     'nom' => 'Algo 1',             //         nom            -> $tab['ues'][0]['nom']
                     'volume' => 54,                //         volume         -> $tab['ues'][0]['volume']
                  ),
               array(                               //     2me UE             -> $tab['ues'][1]
                     'nom' => 'Maths discrètes',    //         ...
                     'volume' => 40,
                  ),
               array(                               //     3me UE             -> $tab['ues'][2]
                     'nom' => 'Anglais S1',         //         ...
                     'volume' => 20,
                  ),
               array(                               //     4me UE             -> $tab['ues'][3]
                     'nom' => 'Anglais S2',         //         ...
                     'volume' => 20,
                  ),
               array(                               //     5me UE             -> $tab['ues'][4]
                     'nom' => 'Projet',             //         ...
                     'volume' => 70,
                  ),
            ),
      );
   return $tab;
}

print_r(getOffreFormations());
?>
