<?php 
  // Stocker le nom du fichier dans une variable
  $file = 'avantproposESSA.pdf'; 
    
  // Type de contenu dd l'en-tête
  header('Content-type: application/pdf'); 
    
  header('Content-Disposition: inline; filename="' . $file . '"'); 
    
  header('Content-Transfer-Encoding: binary'); 
    
  header('Accept-Ranges: bytes'); 
    
  // Lire le fichier
  @readfile($file); 
?>