/*  Passare come parametri GET name, mail e age 
e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto
e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/


    <?php
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $eta= $_GET['eta'];
    if(empty($nome) && empty($email) && empty($eta)){
        $messaggio= 'Inserisci Credenziali';
    }elseif (strlen($nome) > 3  && strpos($email,'@') !== false && strpos($email,'.') !== false && is_numeric($eta)){
        $messaggio='Accesso Consentito';
    }else{
        $messaggio='Accesso Negato!';
    };
    ?>
    <h1><?php echo $messaggio ?></h1>
