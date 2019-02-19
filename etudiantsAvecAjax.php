<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <title>Document</title>
   <script src="getEtudiants.js"></script>

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
   
   <?php 
    
   if (!empty($students)){
   foreach($students as $key => $student): ?>
  
       <tr>
           
           <td>
               <?php  echo $student['prenom']; ?>
           </td>
       </tr>
   <?php endforeach;}?>
   </table>


<input id="input" type="text" style="border:solid 1px black; width:150px;" maxlength="10"
   onkeyup="getEtudiants();" />

<div id="Affichage" style="border:solid 1px black; width:200px; height:400px;">
</div> 


</body>



</html>


