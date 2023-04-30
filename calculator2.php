<?php
   

    if (isset($_POST['calculeaza'])) {
      $primul_numar = $_POST['primul_numar'];
      $numarul_doi = $_POST['numarul_doi'];
      $operatii = $_POST['operatii'];
      $rezultat = 0;

      switch ($operatii) {
        case 'adunare':
          $rezultat = $primul_numar + $numarul_doi;
          break;
        case 'scadere':
          $rezultat = $primul_numar - $numarul_doi;
          break;
        case 'inmultire':
           $rezultat = $primul_numar * $numarul_doi;
           break;
        case 'impartire':
           $rezultat = $primul_numar / $numarul_doi;
           break;
      }
      if ($rezultat < 0) {
        echo "WARNING!!! Rezultatul este < 0!";
      } else if (!empty($rezultat)) {
        echo "<div id='rez'>Rezultatul calculului este: $rezultat</div>";
      }
      

    }



  ?>