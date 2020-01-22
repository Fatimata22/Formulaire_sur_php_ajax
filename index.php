<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>

</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <!-- Première colonne formulaire -->
            <div class="col-md-6">
                <legend>Formulaire de contact</legend>
                <form action="" method="POST">
                    Prenom : <input type="text" name="Prenom_inp" id="prenom"><br><br>
                    Nom : <input type="text" name="nom_inp" id="nom"><br><br>
                    Email : <input type="email" name="email_inp" id="email"><br><br>
                    Message: <br><textarea name="message_inp" id="message" cols="30" rows="5"></textarea><br><br>
                    Homme <input type="radio" name="sexe_inp" id="sexe1" value="option1"><br>
                    Femme <input type="radio" name="sexe_inp" id="sexe2" value="option2"><br><br>


                    <button type="button" onclick="chargement(); return false;">Valider</button>
                    <button type="reset">Annuler</button>

                </form>
            </div>

            <!-- Deuxiéme colonne résultats -->
            <div class="col-md-6">

                <div id="result"> </div>

            </div>
        </div>

    </div>



    <script>
        function chargement() {
            //  on crée un objet formdata pour le remplire des valeurs du formulaire
            var formdata = new FormData();
            // append va nous servire à recuperé les valeurs en paramétres
            formdata.append("prenom", document.getElementById("prenom").value);
            formdata.append("nom", document.getElementById("nom").value);
            formdata.append("email", document.getElementById("email").value);
            formdata.append("message", document.getElementById("message").value);
            
            // on crée un objet XMLHttpRequest qui permet d'envoyer des requetes http
            // et qui contient le statut et la réponse
            var ajax = new XMLHttpRequest();
           ajax.open("POST", "traitement.php");
            ajax.onreadystatechange = function() {
                // onreadystatechange detecte les changements d'etats
                if (this.readyState == 4 && this.status == 200) {
                    // si le travail et que le statut renvoie ok
                    document.getElementById("result").innerHTML =
                        this.responseText;
                }
            };
            ajax.send(formdata);
        }
    </script>
</body>

</html>