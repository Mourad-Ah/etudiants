function getEtudiants(){

    var prenom=  document.getElementById("input").value;

    var	xhr	=	new	XMLHttpRequest();	

    xhr.onreadystatechange	=	function()	{	
             if	(xhr.readyState	==	4	&&	xhr.status	==	200)	{	
              
                var reponse = xhr.responseText;
                
                document.getElementById("Affichage").innerHTML = reponse;
             }	

 };	


 xhr.open('GET', 'http://192.168.33.14/etudiants/script-etudiants.php?prenom='+prenom);
 

 xhr.send();
  









}


