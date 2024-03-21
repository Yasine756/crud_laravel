<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TP QUESTION1 :</h1> 
    <form action="{{ route('Form')}} "method="post">
        @csrf
        <label >Choisissez votre DtaeTime:</label>
        <input type="datetime-local" name='yassine' required/>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>