<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="header">
        <h1>Projet SNIR-DRAC</h1>
    </div>
    <nav class="side-nav">
        <h2><u>Services</u></h2>
            <p onclick="opentab('sensors')">Capteurs</p>
            <p onclick="opentab('historique')">Historique</p>
            <a href="http://192.168.112.12/nagios/" target="_blank">Nagios</a>
    </nav>
    <div class="footer">
        <form method='POST'>
            <button type='submit' name='logout' class='btnLogout'>Déconnexion<i class='fa-solid fa-right-from-bracket'></i></button>
        </form>
        <p>Par Quentin DELOS & Redwan AZARFANE</p>
    </div>
</body>
</html>
