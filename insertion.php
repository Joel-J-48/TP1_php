<?php
// insert data in database's table

require_once 'connexionPDO.php';

//insert into table "eleve"
$sql = "INSERT INTO eleve (nom, prenom, age, classe, etablissement)
            VALUES ('ABALO', 'Koami Samuel', 14, '2nde C', 'Lycée de Tokoin'),
                    ('MBAPPE', 'Killyan', 18, 'Tle A4', 'Lycée de Bondi'),
                    ('BELLINGHAM', 'Jude', 17, 'Tle C', 'London high school'),
                    ('ADEBAYOR', 'Emmanuel', 21, 'Tle D', 'Lycée de Lomé'),
                    ('Messi', 'Lionnel', 15, 'Tle C', 'Lycée de Rosario')";



?>