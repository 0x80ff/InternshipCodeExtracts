<?php
$numeroAppele=$numeroDist[$e];

//Requête préparée, insertion données dans la table COMMUNICATIONS
$requete = 'INSERT INTO communications (abonne_id,dateCommunication,
                                        numeroDistant,dureeCommunication,
                                        typeCommunication,etendueCommunication,
                                        montantCommunication)
            VALUES (:idabo,:datecom,:numdist,:duration,:typecom,:etend,:mont)';
            
$query = $this->db->prepare($requete);
$query->bindValue(':idabo', $ID, PDO::PARAM_INT);
$query->bindValue(':datecom', $date[$e], PDO::PARAM_INT);
$query->bindValue(':numdist', $numeroAppelé, PDO::PARAM_INT);
$query->bindValue(':duration', $durée[$e], PDO::PARAM_INT);
$query->bindValue(':typecom', $type, PDO::PARAM_INT);
$query->bindValue(':etend', $etendue, PDO::PARAM_INT);
$query->bindValue(':mont', $montant[$e], PDO::PARAM_INT);
$query->execute();
?>
