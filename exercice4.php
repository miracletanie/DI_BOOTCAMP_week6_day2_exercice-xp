<?php

switch ($jour) {
    case 1:
      $jour = 'lundi';  
      break;
    case 2:
        $jour = "mardi";
      break;
    case 3:
        $jour = "mercredi";
      break;
      case 4:
        $jour = "jeudi";
      break;   
      
      case 5:
        $jour = "vendredi";
      break; 

      case 5:
        $jour = "samedi";
      break; 
    default:
      $jour ="dimanche";
  }
  echo'$jour';
