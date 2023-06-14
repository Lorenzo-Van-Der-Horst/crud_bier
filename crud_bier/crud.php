<?php
// functie: CRUD Systeem
// auteur: Lorenzo van der Horst

// Initialisatie
include 'functions.php';

// Main
echo "<h1>CRUD BIEREN</h1>";

echo "<form method='post' action='insert_bier.php'> 
      <button name='btn_insert'>Insert New Bier</button></form>";

// Print Crud Bieren
CrudBieren();

?>