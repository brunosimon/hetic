<?php 

class Category_Model
{
 function __construct($pdo)
 {
  $this->pdo = $pdo;
 }

 function get()
 {
  $prepare = $this->pdo->prepare('
   SELECT
    *
   FROM
    categories 
   ORDER BY
    id DESC
  ');
  $prepare->execute();
  $results = $prepare->fetchAll();

  return $results;
 }
}

?>