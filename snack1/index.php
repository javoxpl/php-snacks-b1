/*Creiamo un array contenente le partite di basket 
di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60*/


<?php 

$partita1 = [
"squadra uno - squadra due | 55-60", 
"squadra tre - squadra quattro | 55-60", 
"squadra cinque - squadra sei | 55-60", 
"squadra sette - squadra otto | 55-60", 
"squadra nove - squadra dieci | 55-60", 
"squadra undici - squadra dodici | 55-60", 
"squadra tredici - squadra quattordici | 55-60"
];

/*echo "le partite e i risultati sono: \n";
foreach($partita1 as $partite){
    echo $partite . "\n";
}*/
?>

<?php foreach($partita1 as $partite){ ?>
    <p><?php echo $partite . "\n"?></p>
<?php } ?>






