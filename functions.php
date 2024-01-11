<?php
session_start();

$_SESSION["email"] = $email;
?>

<!-- verifica se la mail inserita contiene i caratteri "@" e " . " -->
<?php function verificaMail($email)
{
    if (strpos($email, "@") !== false && (strpos($email, ".") !== false)) { //se i caretteri sono contenuti nella mail
        header('Location: ./thankyou.php'); // redirect nella thankyou page
        return true; // restituisci vero
    } else {
        return false; // restituisci falso
    };
}
?>

<!-- stampa dinamica classi e messaggio per alert -->
<!-- se verifica = true (alert-success)(Iscrizione confermata) / se verifica = false (alert-warning)(Inserisci una mail valida) -->
<?php function messaggioAlert($verifica)
{ ?>
    <div class="text-center alert <?php echo $verifica === true ? 'alert-success ' : 'alert-danger' ?>">
        <?php echo $verifica === true ? 'Iscrizione confermata!' : 'Inserisci una mail valida (con "@" e " . ")' ?>
    </div>
<?php }; ?>