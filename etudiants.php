
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

  // $request = $connec->prepare("SELECT * FROM etudiants WHERE prenom LIKE '%".$_GET['prenom']."%';");
   $request = $connec->prepare("SELECT * FROM etudiants WHERE prenom LIKE '%".$prenom."%';");



   
   // Execute la requête SQL
   $request->execute();
   // Fin de la fonction SQL
   return $request->fetchAll(PDO::FETCH_ASSOC);
}


if (isset($_GET['prenom']))

{

    $prenom = $_GET['prenom'];                            
    
$students = allStudents($prenom);                                    ;
}
else{
    $prenom='';
}

// Fonction pour ce connecter





?>

<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <title>Document</title>
   <!--<script src="premiere_requete_ajax.js"></script>-->

   <style>
   tr, th, td {
        border:3px solid lightblue;
        padding:2px;
        border-radius:5px 5px 5px 5px;
   }
   </style>
</head>
<body>


<h3>Tableau étudiants</h3>
   <table>
   <tr>
   <th>Id</th>
   <th>Nom</th>
   <th>Prenom</th>
   </tr>




   <?php 
    
   if (!empty($students)){
   foreach($students as $key => $student): ?>
  
       <tr>
           <td>
               <?php  echo $student['id']; ?>
           </td>
           <td>
               <?php  echo $student['nom']; ?>
           </td>
           <td>
               <?php  echo $student['prenom']; ?>
           </td>
       </tr>
   <?php endforeach;}?>
   </table>

</body>

<form action="etudiants.php" method="GET">
<label for="title"</label>
        <input type="text" name="prenom" value="<?php echo $prenom ?>" >


                        <input type="submit" value="OK">
                    </form>
</html>




