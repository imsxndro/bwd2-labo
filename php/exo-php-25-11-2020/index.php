<?php 

// Tableau d'élèves :
$eleves = array(
  array('nom'=>'DURANT','prenom'=>'Julien', 'email'=>'julien@mailinator.com','age'=>22),
  array('nom'=>'LADY','prenom'=>'Sophie', 'email'=>'sophie@mailinator.com','age'=>25),
  array('nom'=>'DULON','prenom'=>'Pierre', 'email'=>'pierre@mailinator.com','age'=>20),
);

function getStudents($eleves) {
  return $eleves;
}
var_dump (getStudents($eleves));
?>