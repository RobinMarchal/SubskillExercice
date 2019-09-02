<?php
if (isset($_POST['register'])) {

    $civility = htmlspecialchars($_POST['civility']);
	$name = htmlspecialchars($_POST['name']);
	$fname = htmlspecialchars($_POST['first_name']);
    $email = htmlspecialchars($_POST['email']);
    if(isset($_POST['month']))
    {
        $month = htmlentities($_POST['month']);
    }
    if(isset($_POST['year']))
    {
        $year = htmlentities($_POST['year']);
    }
    if(isset($_POST['day']))
    {
        $day = htmlentities($_POST['day']);
    }
	$zcode = htmlspecialchars($_POST['zip_code']);
    $pass = htmlspecialchars($_POST['password']);
    $confpass = htmlspecialchars($_POST['confirm_password']);

	if (!empty($_POST['name']) AND !empty($_POST['first_name']) AND !empty($_POST['email']) AND !empty($_POST['month']) AND !empty($_POST['year']) AND !empty($_POST['day']) AND !empty($_POST['zip_code']) AND !empty($_POST['password']) AND !empty($_POST['confirm_password'])) {

        $fnameLength = strlen($fname);
        $passLength = strlen($pass);

		if ($fnameLength <= 20 && $fnameLength >= 3) {

			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

                if ($zcode >= "01000" && $zcode <= "95880") {

                    if ($year == date("Y") - 5) {
                        if ($month < date("m")) {

                            if ($passLength >= 8) {
                                if ($pass == $confpass) {

                                    if (isset($_POST['CondG'])) {
                                        foreach($_POST['CondG'] as $condG)
                                            $good ="Félicitation ".$civility." ".$name." ! Vous êtes inscrit•e avec succès sur notre site ! Vous pouvez dès à présent accéder au contenu du site.";
                                    }
                                    else {
                                        $error = "Vous n'avez pas accepté les conditions générales de ventes.";
                                    }
                                }
                                else {
                                    $error = "Vos mots de passe ne correspondent pas !";
                                }
                            }
                            else {
                                $error = "Votre mot de passe doit faire minimum 8 caractères.";
                            }
                        }
                        else {
                            if ($month == date("m")) {
                                if ($day < date("j")) {
                                    if ($passLength >= 8) {
                                        if ($pass == $confpass) {
        
                                            if (isset($_POST['CondG'])) {
                                                foreach($_POST['CondG'] as $condG)
                                                    $good ="Félicitation ".$civility." ".$name." ! Vous êtes inscrit•e avec succès sur notre site ! Vous pouvez dès à présent accéder au contenu du site.";
                                            }
                                            else {
                                                $error = "Vous n'avez pas accepté les conditions générales de ventes.";
                                            }
                                        }
                                        else {
                                            $error = "Vos mots de passe ne correspondent pas !";
                                        }
                                    }
                                    else {
                                        $error = "Votre mot de passe doit faire minimum 8 caractères.";
                                    }
                                }
                                else {
                                    $error = "Votre date de naissance est invalide, vous ne pouvez pas avoir moins de 5 ans.";
                                }
                            }
                            else {
                                $error = "Votre date de naissance est invalide, vous ne pouvez pas avoir moins de 5 ans.";
                            }
                        }
                    }
                    else {
                        if ($year < date ("Y") - 5){
                            if ($passLength >= 8) {
                                if ($pass == $confpass) {

                                    if (isset($_POST['CondG'])) {
                                        foreach($_POST['CondG'] as $condG)
                                            $good ="Félicitation ".$civility." ".$name." ! Vous êtes inscrit•e avec succès sur notre site ! Vous pouvez dès à présent accéder au contenu du site.";
                                    }
                                    else {
                                        $error = "Vous n'avez pas accepté les conditions générales de ventes.";
                                    }
                                }
                                else {
                                    $error = "Vos mots de passe ne correspondent pas !";
                                }
                            }
                            else {
                                $error = "Votre mot de passe doit faire minimum 8 caractères.";
                            }
                        }
                        else {
                            $error = "Votre date de naissance est invalide, vous ne pouvez pas être nait en ".$year.".";
                        }
                    }
                }
                else {
                    $error = "Votre code postal doit être compris entre 01000 et 95880.";
                }
            }
		}
		else {
			$error = "Votre prénom doit être compris entre 3 et 20 caractéres !";
		}
	}
	else {
		$error = "Tous les champs doivent être complétés !";
	}
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <link rel="icon" href="https://www.subskill.com/assets/images/favicon_new/favicon.ico">
        <title>Créer un compte</title>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/materialize/materialize.min.css"  media="screen,projection"/>

        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
    </head>
    <body>
        <div class="row no-gutters">
                <div class="col s12 m4">
                <header>
                    <div class="container">
                        <div class="row">
                            <div class="col s1 m1 outline">
                                <div class="down">
                                    <a href="#">
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    
                        <div class="row ftco-animate">
                            <div class="col s10 m10 content">
                                <h1>Lorem ipsum dolores atum eramea</h1>
                                <strong>Rege Persarum bellis finitimis inigru</strong>
                                <p>Cras quis nulla commodo, aliquam lettus sed, blandit augue. Cras ullamcorer bibendum bibendum. Duis.</p>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
        
            <div class="col s12 m8">
                <section>
                    <div class="container">
                        <div class="row ">
                            <div class="col s12 m12">
                                <div id="map"></div>
                            </div>
                        </div>
                        <div class="row form ftco-animate">
                            <div class="col m12">
                                <h2>Créer un compte</h2>
                                <span>Veuillez renseigner les informations ci-dessous.</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col m12">
                               
                                <form method="POST" action="" class="left-align ftco-animate">
                                    <span>Vous êtes</span>

                                    <label>
                                        <input class="with-gap" name="civility" type="radio" value="Mr" checked />
                                        <span>Mr</span>
                                    </label>
                                    <label>
                                        <input class="with-gap" name="civility" type="radio" value="Mme" checked />
                                        <span>Mme</span>
                                    </label>
                                    <label>
                                        <input class="with-gap" name="civility" type="radio" value="Melle" checked />
                                        <span>Melle</span>
                                    </label>


                                    <div class="input-field ftco-animate col s12">
                                        <input id="name" name="name" type="text" class="validate">
                                        <label for="name">Nom</label>
                                    </div>
                                    <div class="input-field ftco-animate col s12">
                                        <input id="first_name" name="first_name" type="text" class="validate">
                                        <label for="first_name">Prénom</label>
                                    </div>
                                    <div class="input-field ftco-animate col s12">
                                        <input id="email" name="email" type="email" class="validate">
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="input-field ftco-animate col s5">
                                        <select id="month" name="month" class="browser-default">
                                            <option value="" disabled selected>Date de Naissance</option>
                                            <option value="01">Janvier</option>
                                            <option value="02">Février</option>
                                            <option value="03">Mars</option>
                                            <option value="04">Avril</option>
                                            <option value="05">Mai</option>
                                            <option value="06">Juin</option>
                                            <option value="07">Juillet</option>
                                            <option value="08">Aout</option>
                                            <option value="09">Septembre</option>
                                            <option value="10">Octobre</option>
                                            <option value="11">Novembre</option>
                                            <option value="12">Décembre</option>
                                        </select>
                                    </div>
                                    
                                    <div class="input-field ftco-animate col s3">
                                        <select id="day" name="day" class="browser-default">
                                            <option value="" disabled selected></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                    </div>
                                    <div class="input-field ftco-animate col s4">
                                        <select id="year" name="year" class="browser-default">
                                            <option value="" disabled selected></option>
                                            <option value="1980">1980</option>
                                            <option value="1981">1981</option>
                                            <option value="1982">1982</option>
                                            <option value="1983">1983</option>
                                            <option value="1984">1984</option>
                                            <option value="1985">1985</option>
                                            <option value="1986">1986</option>
                                            <option value="1987">1987</option>
                                            <option value="1988">1988</option>
                                            <option value="1989">1989</option>
                                            <option value="1990">1990</option>
                                            <option value="1991">1991</option>
                                            <option value="1992">1992</option>
                                            <option value="1993">1993</option>
                                            <option value="1994">1994</option>
                                            <option value="1995">1995</option>
                                            <option value="1996">1996</option>
                                            <option value="1997">1997</option>
                                            <option value="1998">1998</option>
                                            <option value="1999">1999</option>
                                            <option value="2000">2000</option>
                                            <option value="2001">2001</option>
                                            <option value="2002">2002</option>
                                            <option value="2003">2003</option>
                                            <option value="2004">2004</option>
                                            <option value="2005">2005</option>
                                            <option value="2006">2006</option>
                                            <option value="2007">2007</option>
                                            <option value="2008">2008</option>
                                            <option value="2009">2009</option>
                                            <option value="2010">2010</option>
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                        </select>
                                    </div>
                                    <div class="input-field ftco-animate col s12">
                                        <input id="zip_code" name="zip_code" type="number" class="validate">
                                        <label for="zip_code">Code Postal</label>
                                    </div>
                                    <div class="input-field ftco-animate col s12">
                                        <input id="password" name="password" type="password" class="validate">
                                        <label for="password">Mot de passe</label>
                                    </div>
                                    <div class="input-field ftco-animate col s12">
                                        <input id="confirm_password" name="confirm_password" type="password" class="validate">
                                        <label for="confirm_password">Confirmation mot de passe</label>
                                    </div>
                                    <p class="left-align">
                                    <label>
                                        <input type="checkbox" name="CondG[]" value="Cgv"/>
                                        <span>J'accepte les <a href="">conditions générales de ventes</a> et les respecterai sans conditions.</span>
                                    </label>
                                    </p>
                                    <?php
                                        if (isset($error)) {
                                            echo "<div class='alert alert-danger' role='alert'>
                                                    ".$error."
                                                </div>";
                                        }
                                        if (isset($good)) {
                                            echo "<div class='alert alert-success' role='alert'>".$good."<p><a href='#' class='alert-link'>Cliquez ici</a> pour revenir à la page d'accueil.</p></div>"; 
                                        }
                                    ?>
                                    <button class="btn waves-effect waves-light btn-large ftco-animate" type="submit" name="register">Créer un compte</button>
                                    <p class="center-align">Vous avez déjà un compte ? <a href="#">Connectez-vous.</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        
        
        <!-- JS -->
        <script src="js/jquery-3.3.1.min.js"></script> 
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/scrollax.min.js"></script>
        <script src="js/map.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap"
        async defer></script> 
        <script src="js/main.js"></script>
        
        

    
    </body>
</html>