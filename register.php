<body>
    <div id="register_page">
        <form action="./index.php?content=register_script" method="post">
            <div class="form-group">
                <label for="inputEmail">Vul hier uw e-mailadres in:</label>
                <input name="email" type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" autofocus>

                <label for="inputfname">Voornaam</label>
                <input name="fname" type="text" class="form-control" id="inputfname" aria-describedby="fnameHelp" autofocus>

                <label for="inputinfix">Tussenvoegsel</label>
                <input name="infix" type="text" class="form-control" id="inputinfix" aria-describedby="infixHelp" autofocus>

                <label for="inputlname">Achternaam</label>
                <input name="lname" type="text" class="form-control" id="inputlname" aria-describedby="lnameHelp" autofocus>

                <label for="inputphonenumber">Telefoonnummer</label>
                <input name="phonenumber" type="tel" class="form-control" id="inputphonenumber" aria-describedby="phonenumberHelp" autofocus>
                <br>
                <input type="checkbox" name="privacy" id="privacy">
                <label for="privacy">Ik accepteer de privacy voorwaarden.</label>
            </div>

            <button type="submit" class="btn btn-secondary btn-lg btn-block">Registreer</button>
        </form>
    </div>
</body>
