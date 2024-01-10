<?php function messaggioAlert($email_inviata)
{ ?>
    <?php if ($email_inviata === "") : ?>
        <div class="alert alert-info text-center" role="alert">
            Clicca il bottone iscriviti dopo aver inserito la mail
        </div>
    <?php elseif (strpos($email_inviata, "@") !== false && (strpos($email_inviata, ".") !== false)) : ?>
        <div class="alert alert-success text-center" role="alert">
            Iscrizione confermata!
        </div>
    <?php else : ?>
        <div class="alert alert-danger text-center" role="alert">
            Iscrizione non confermata! Inserisci un mail valida (con "@" e ".")
        </div>
    <?php endif; ?>
<?php }; ?>