<?php


function allStudents($prenom)
{    // Variable pour ce connecter
   // Pour identifier la base de donnée visée
   $connec = new PDO('mysql:dbname=ajax', 'root', '0000');
   // Pour identifier les erreurs
   $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // Prepare une requête
   //$prenom = ['prenom'];

  // echo "SELECT * FROM etudiants WHERE prenom LIKE '%".$_GET['prenom']."%';";

   $request = $connec->prepare("SELECT * FROM etudiants WHERE prenom LIKE '%".$_GET['prenom']."%';");
   //$request = $connec->prepare("SELECT * FROM etudiants WHERE prenom LIKE '%".$prenom."%';");



   
   // Execute la requête SQL
   $request->execute();
   // Fin de la fonction SQL
   return $request->fetchAll(PDO::FETCH_ASSOC);
}


if (isset($_GET['prenom']))

{

    $prenom = $_GET['prenom'];                            
    
$students = allStudents($prenom);                                    ;
foreach ($students as $key => $student) {
   echo $student['prenom'].'<br>';
}
}
else{
    $prenom='';
}
?>
