<?php
// define variables and set as empty
$imie = $email = $telefon = $wiadomosc = '';
$err_imie = $err_email = $err_telefon = $err_wiadomosc = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // check if field is empty
    if(empty($_POST["imie"])){
        $err_imie = "Imie jest wymagane";
    }else{
        $imie = walidacja_danych($_POST["imie"]);
    }
    if(empty($_POST["email"])){
        $err_email = "Email jest wymagany";
    }else{
        $email = walidacja_danych($_POST["email"]);
        $email_sanitized = filter_var($email, FILTER_SANITIZE_EMAIL);
        // check if valid email format
        if (!filter_var($email_sanitized, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Nieprawidłowy format emaila";
          }
    }
    if(empty($_POST["telefon"])){
        $err_telefon = "Telefon jest wymagany";
    }else{
        $telefon = walidacja_danych($_POST["telefon"]);
    }
    if(empty($_POST["wiadomosc"])){
        $err_wiadomosc = "Wiadomość jest wymagana";
    }else{
        $wiadomosc = walidacja_danych($_POST["wiadomosc"]);
    }
}
    //funkcja do oczysczenia danych wprowadzony przez uzytkownika
    function walidacja_danych($dane){
        $dane = trim($dane);
        $dane = stripslashes($dane);
        $dane = htmlspecialchars($dane);
        return $dane;
    }
// show confirmation message after successuflly sbmitted email form
if(isset($_POST['submit']) && empty($err_imie) && empty( $err_email) && empty($err_telefon) &&empty($err_wiadomosc)){

    $to = "testowy359@gmail.com";
    $replyTo = walidacja_danych($_POST['email']);
    $subject = "wiadomosc ze Strony Langlo";
    $wiadomosc = walidacja_danych($_POST['wiadomosc']);
    $headers = array('From' => $replyTo,
                      'X-Mailer' => 'PHP/' . phpversion()
                    );
    mail($to , $subject , $wiadomosc , $headers);
    ?>

        <div class="alert alert-primary" role="alert" id="sentMsgAlert">
                <h4>Dzięki <?php echo htmlspecialchars($_POST['imie']) ?> za wiadomość<br>
                Odpowiem tak szybko jak to możliwe na podany email: 
                <?php echo htmlspecialchars($_POST['email']) ?>
                </h4>
                <p>Tekst wiadomości: <?php echo htmlspecialchars($_POST['wiadomosc']) ?></p>
        </div>

<?php 
}    
?>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]); ?>">
    <div class="form-group">
        <div class="row">
            <div class="col-12 col-md-2 formularz_label">
                <label for="imie" class="formLabelStyle"><p>IMIĘ:</p></label>
            </div>
            <div class="col-12 col-md-10">
                    <input type="text" class="form-control" id="InputImie" name="imie">
                    <span style="color:black;"><p><?php echo $err_imie ;?></p></span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-12 col-md-2 formularz_label">
                <label for="email" class="formLabelStyle"><p>EMAIL:</p></label>
            </div>
            <div class="col-12 col-md-10">
                <input type="email" class="form-control" id="InputEmail" name="email" aria-describedby="emailHelp">   
                <span style="color:black;"><p><?php echo $err_email ;?></p></span>
            </div>
            
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-12 col-md-3 formularz_label">
                <label for="telefon" class="formLabelStyle"><p>TELEFON:</p></label>
            </div>
            <div class="col-12 col-md-9">
                <input type="text" maxlength="9" class="form-control" id="InputTelefon" name="telefon">
                <span style="color:black;"><p><?php echo $err_telefon ;?></p></span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
                <div class="col-12 col-md-5 formularz_label">
                    <label for="wiadomosc" class="formLabelStyle"><p>WIADOMOŚĆ:</p></label>
                </div>
                <div class="col-12 col-md-7">
                    <textarea class="form-control" id="InputWiadomosc" name="wiadomosc" rows="3">
                        <?php echo $wiadomosc; ?>
                    </textarea>
                    <span style="color:black;"><p><?php echo $err_wiadomosc ;?></p></span>
                </div>
            </div>
    </div>
    <!--<p class="form_pola_wymagane">Wypełnij proszę wszystkie pola formularza.</p>-->
    <input type="submit" name="submit" value="WYSYŁAM" class="btn btn-secondary btn-block mt-2 form_button">
    <!--<button type="submit" name="submit" class="btn btn-secondary btn-block mt-2"><span class="form_button">WYŚLIJ</span></button>-->
</form>