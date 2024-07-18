<?php
// insert data in database's table

require_once 'connexionPDO.php'; //include database connection's code

//insert into table "eleve"
try {
        //insertion prepared request
        $sql = "INSERT INTO eleve (nom, prenom, age, classe, etablissement) 
                        VALUES (:valeur1, :valeur2, :valeur3, :valeur4, :valeur5)";
        $stmt = $conn->prepare($sql);

        //table of data to insert
        $data = [
                ['ABALO', 'Koami Samuel', 14, '2nde C', 'Lycée de Tokoin'],
                ['MBAPPE', 'Killyan', 18, 'Tle A4', 'Lycée de Bondi'],
                ['BELLINGHAM', 'Jude', 17, 'Tle C', 'London high school'],
                ['ADEBAYOR', 'Emmanuel', 21, 'Tle D', 'Lycée de Lomé'],
                ['Messi', 'Lionnel', 15, 'Tle C', 'Lycée de Rosario']
        ];

        foreach ($data as $row) {
                //link values foreach row
                $stmt->bindParam(':valeur1', $row[0]);
                $stmt->bindParam(':valeur2', $row[1]);
                $stmt->bindParam(':valeur3', $row[2]);
                $stmt->bindParam(':valeur4', $row[3]);
                $stmt->bindParam(':valeur5', $row[4]);
        }

        //execute request for each row
        $stmt->execute();

        echo "data inserted in table 'eleve' with success. ";
        echo "<br>";

} catch (PDOException $e) {
        //throw $e;
        echo "Error of data insertion in table 'eleve'. ";
        echo "<br>";
}

//insert into table "enseignant"
try {
        //insertion prepared request
        $sql = "INSERT INTO enseignant (nomEnseignant, prenomEnseignant, ageEnseignant, telephone) 
                        VALUES (:valeur1, :valeur2, :valeur3, :valeur4)";
        $stmt = $conn->prepare($sql);

        //table of data to insert
        $data = [
                ['INIESTA', 'Andres', 44, '90010203'],
                ['RONALDO', 'NASARIO', 52, '91010203'],
                ['ZIDANE', 'Yazid Zinedine', 53, '22010203'],
                ['OKOCHA', 'Jay Jay', 55, '99010203']
                
        ];

        foreach ($data as $row) {
                //link values foreach row
                $stmt->bindParam(':valeur1', $row[0]);
                $stmt->bindParam(':valeur2', $row[1]);
                $stmt->bindParam(':valeur3', $row[2]);
                $stmt->bindParam(':valeur4', $row[3]);
                
        }

        //execute request for each row
        $stmt->execute();

        echo "data inserted in table 'enseignant' with success. ";
        echo "<br>";

} catch (PDOException $e) {
        //throw $e;
        echo "Error of data insertion in table 'enseignant'. ";
        echo "<br>";
}

//insert into table "matiere"
try {
        //insertion prepared request
        $sql = "INSERT INTO matiere (intituleMatiere, coeficient, volumeHoraire, idEnseignant) 
                        VALUES (:valeur1, :valeur2, :valeur3, :valeur4)";
        $stmt = $conn->prepare($sql);

        //table of data to insert
        $data = [
                ['Base de donnees relationnelles', 4, 35, 2],
                ['P.O.O', 5, 40, 1],
                ['Langage C', 5, 40, 3],
                ['Algorithmique', 4, 35, 4]
                
        ];

        foreach ($data as $row) {
                //link values foreach row
                $stmt->bindParam(':valeur1', $row[0]);
                $stmt->bindParam(':valeur2', $row[1]);
                $stmt->bindParam(':valeur3', $row[2]);
                $stmt->bindParam(':valeur4', $row[3]);
                
        }

        //execute request for each row
        $stmt->execute();

        echo "data inserted in table 'enseignant' with success. ";
        echo "<br>";

} catch (PDOException $e) {
        //throw $e;
        echo "Error of data insertion in table 'matiere'. ";
        echo "<br>";
}

//insert into table "dispenser"
try {
        //insertion prepared request
        $sql = "INSERT INTO dispenser (id_Eleve, id_Enseignant, dateCours, heureDebutCours, heureFinCours) 
                        VALUES (:valeur1, :valeur2, :valeur3, :valeur4, :valeur5)";
        $stmt = $conn->prepare($sql);

        //table of data to insert
        $data = [
                [1, 4, '2024-02-15', '08:30:00', '10:30:00'],
                [1, 2, '2024-02-15', '14:00:00', '16:00:00'],
                [2, 4, '2024-02-16', '07:30:00', '09:30:00'],
                [3, 1, '2024-02-16', '10:00:00', '12:00:00'],
                [3, 3, '2024-02-16', '14:00:00', '16:00:00'],
                
        ];

        foreach ($data as $row) {
                //link values foreach row
                $stmt->bindParam(':valeur1', $row[0]);
                $stmt->bindParam(':valeur2', $row[1]);
                $stmt->bindParam(':valeur3', $row[2]);
                $stmt->bindParam(':valeur4', $row[3]);
                $stmt->bindParam(':valeur4', $row[4]);
        }

        //execute request for each row
        $stmt->execute();

        echo "data inserted in table 'enseignant' with success. ";
        echo "<br>";

} catch (PDOException $e) {
        //throw $e;
        echo "Error of data insertion in table 'dispenser'. ";
        echo "<br>";
}


?>