<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="script/jquery.js"></script>
    <script type="text/javascript" src="script/jquery-ui.js"></script>
    <script type="text/javascript" src="script/script.js"></script>

    <link rel="stylesheet" href="script/jquery-ui.css">
    <link rel="stylesheet" href="script/jquery-ui.structure.css">
    <link rel="stylesheet" href="script/jquery-ui.theme.css">
    <link rel="stylesheet" href="script/formulaire.css">
    <title>Formulaire</title>
</head>
<body>
    <form action="" method="post">
        <fieldset class="etat_civil">
            <legend>Etat Civil</legend>
            Nous sommes le <?php echo date("d/m/Y"); ?> <br>
            <p>
                <label for="nom">Nom :</label><input type="text" name="nom" id="nom">
                <label for="prenom">Prénom :</label><input type="text" name="prenom" id="prenom">
            </p>
            <p>
                <label for="age">Age :</label><input type="text" name="age" id="age">
                <label for="date_ naissance">Date de naissance</label><input type="date" name="date_naissance" id="date_naissance">
            </p>
            <p>
                <label for="nationalite">Nationalité</label><br>
                <input type="radio" name="situation_nationalite" value="fr" id="fr"><label for="situation_nationalite">Français</label>
                <input type="radio" name="situation_nationalite" value="lux" id="lux"><label for="situation_nationalite">Luxembourgeois</label>
                <input type="radio" name="situation_nationalite" value="autres" id="autres"><label for="situation_nationalite">Autres</label>
            </p>
            <div id="rest_etat_civil">
                <p>
                    <label for="Résidence fiscale">Résidence Fiscale</label><br/><textarea cols="20" name="adresse" id="adresse"></textarea><br>
                    <label for="cp">Code Postal</label><input type="text" name="cp" id="cp">
                    <label for="ville">Ville</label><input type="text" name="ville" id="ville">
                </p>
                <p>
                    <label for="mail">Adresse mail</label><input type="email" name="mail" id="mail">
                    <label for="tel_fixe">Téléphone fixe</label><input type="tel_fixe" name="tel_fixe" id="tel_fixe">
                    <label for="gsm">GSM</label><input type="tel" name="gsm" id="gsm">
                </p>
                <p>
                    <label for="profession">Profession</label><input type="text" name="profession" id="profession">
                    <label for="revenu">Revenus</label><input type="text" name="revenu" id="revenu">
                </p>
            </div>
            <fieldset class="situation_familial">
                <legend>Situation Familiale</legend>
                <input type="radio" name="situation_famille" value="celibataire" id="celibataire"><label for="">Celibataire</label>
                <input type="radio" name="situation_famille" value="marie" id="marie"><label for="">Marié</label>
                <input type="radio" name="situation_famille" value="concubinage" id="concubinage"><label for="">Concubinage</label>
                <input type="radio" name="situation_famille" value="veuf" id="veuf"><label for="">Veuf</label>
            </fieldset>
            <fieldset class="conjoint">
                <legend>Conjoint</legend>
                <p>
                    <label for="nom_c">Nom</label><input type="text" name="nom_c" id="nom_c">
                    <label for="prenom_c">Prénom</label><input type="text" name="prenom_c" id="prenom_c">
                </p>
                <p>
                    <label for="age_c">Age</label><input type="text" name="age_c" id="age_c">
                    <label for="date_naissance_c">Date de naissance</label><input type="date" name="date_naissance_c" id="date_naissance_c">
                </p>
                <p>
                    <label for="profession_c">Profession</label><input type="text" name="profession_c" id="profession_c">
                    <label for="revenu_c">Revenus</label><input type="number" name="revenu_c" id="revenu_c">&nbsp;€
                </p>
            </fieldset>
            <fieldset class="enfants">
               	<input type="hidden" name="nb_enfant" id="nb_enfant" value=1>
                <legend>Enfants</legend>
                <p>
                    <input type="radio" name="enfant" value="oui" id="enfant_o"><label for="enfant_o">Oui</label>
                    <input type="radio" name="enfant" value="non" id="enfant_n"><label for="enfant_n">Non</label>
                </p>
                <p class="modif_enf">
                    <a href="#" id="add_e"><img src="images/plus.png" alt="Ajout"></a>
                    <a href="#" id="less_e"><img src="images/moins.png" alt="Suppression"></a>
                </p>
                <div id="error_enfant"></div>
                <p class="enfants_p">
                    <label for="nom_e">Nom</label><input type="text" name="nom_e" id="nom_e">
                    <label for="prenom_e">Prénom</label><input type="text" name="prenom_e" id="prenom_e">
                    <label for="date_naissance_e">Date de naissance</label><input type="date" name="date_naissance_e" id="date_naissance_e">
                </p>
            </fieldset>
        </fieldset>
        <fieldset class="rbrique_fisc">
            <legend>Rubrique Fiscale</legend>
            <p>
                <label for="montant_impot">Montants Impots</label><input type="number" name="montant_impot" id="montant_impot"> &nbsp;€
            </p>
            <fieldset>
                <legend>Déclaration d'impôts ?</legend>
                <p>
                    <input type="radio" name="impot_dec" value="oui" id="impot_dec_o"><label for="impot_dec_o">Oui</label>
                    <input type="radio" name="impot_dec" value="non" id="impot_dec_n"><label for="impot_dec_n">Non</label>
                </p>
                <p id="dec_o">
                    <label for="deduction">Déductions</label><br>
                        <input type="checkbox" name="deduction" id="el" value="ELC">ELC
                        <input type="checkbox" name="deduction" id="a110" value="A110">A110
                        <input type="checkbox" name="deduction" id="a111" value="A111">A111
                        <input type="checkbox" name="deduction" id="111b" value="111B">111B
                        <input type="checkbox" name="deduction" id="srd" value="SRD">SRD
                </p>
                <p>
                    <label id="l_interesse" for="interesse">Etes-vous intéressé pour le faire ?</label>
                        <input type="radio" name="interesse" value="oui" id="interesse_o"><label for="interesse_o">Oui</label>
                        <input type="radio" name="interesse" value="non" id="interesse_n"><label for="interesse_n">Non</label>
                </p>
            </fieldset>
            <fieldset class="impot_c">
                <legend>Déclaration d'impôts conjoint ?</legend>
                <p>
                    <input type="radio" name="impot_dec_c" value="oui" id="impot_dec_o_c"><label for="impot_dec_o_c">Oui</label>
                    <input type="radio" name="impot_dec_c" value="non" id="impot_dec_n_c"><label for="impot_dec_n_c">Non</label>
                </p>
                <p id="dec_o_c">
                    <label for="deduction_c">Déductions conjoint</label><br/>
                        <input type="checkbox" name="deduction_c" id="el_c" value="ELC">ELC
                        <input type="checkbox" name="deduction_c" id="a110_c" value="A110">A110
                        <input type="checkbox" name="deduction_c" id="a111_c" value="A111">A111
                        <input type="checkbox" name="deduction_c" id="111b_c" value="111B">111B
                        <input type="checkbox" name="deduction_c" id="srd_c" value="SRD">SRD
                </p>
                <p>
                    <label id="l_interesse_c" for="interesse_c">Etes-vous intéressé pour le faire ?</label>
                    <input type="radio" name="interesse_c" value="oui" id="interesse_o_c"><label for="interesse_o_c">Oui</label>
                    <input type="radio" name="interesse_c" value="non" id="interesse_n_c"><label for="interesse_n_c">Non</label>
                </p>
            </fieldset>
        </fieldset>
        <fieldset class="rubrique_cred">
            <legend>Rubrique credits</legend>
            <input type="hidden" name="nb_cred" id="nb_cred" value=1>
            <p class="modif_cred">
                <a href="#" id="add_c"><img src="images/plus.png" alt="Ajout"></a>
                <a href="#" id="less_c"><img src="images/moins.png" alt="Suppression"></a>
            </p>
            <div class="emprunt">
                <div id="error_emprunt"> </div>
                <p>
                    <label for="nature_emprunt">Nature emprunt</label><input type="text" name="nature_emprunt" id="nature_emprunt">
                    <label for="montant_mens">Montant des mensualités</label><input type="number" name="montant_mens" id="montant_mens">
                </p>
                <p>
                    <label for="date_fin_remb">Date fin de remboursement</label><input type="date" name="date_fin_remb" id="date_fin_remb">
                    <label for="tx_cred">Taux de crédit</label><input type="number" name="tx_cred" id="tx_cred">&nbsp;%
                </p>
                <p>
                    <label for="capital_rest">Capital restant dû</label><input type="number" name="capital_rest" id="capital_rest">
                    <label for="capital_emp">Capital emprunté</label><input type="text" name="capital_emp" id="capital_emp">
                </p>
            </div>
        </fieldset>
    </form>
</body>
</html>