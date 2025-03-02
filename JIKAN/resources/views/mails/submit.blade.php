<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animes Online</title>
</head>

<body>
    <h1>Grazie per averci contattato</h1>
    <h2>Risponderemo il prima possibile</h2>
    <p>Se non hai richiesto un contatto ignora questa mail.</p>

    
    <p>Ecco un riepilogo dei tuoi dati:</p>
    <ul>
        <li>Nome e Cognome: {{$user_data['name']}}</li> 
        <li>La tua Mail: {{$user_data['email']}}</li>
        <li>Il tuo messaggio: {{$user_data['mess']}}</li>
    </ul>
</body>

</html>