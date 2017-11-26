<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Angemeldete User</title>
</head>
<body>


<section>
    <h2> Benutzer-ID: {{$contact->id}}</h2>

    <table style='border: solid 1px black;'>

        <tr>
            <td>Name</td>
            <td>{{$contact->name}}</td>
        </tr>
        <tr>
            <td>E-Mail</td>
            <td>{{$contact->email}}</td>
        </tr>
        <tr>
            <td>Betreff</td>
            <td>{{$contact->betreff}}</td>
        </tr>

        <tr>
            <td>Nachricht</td>
            <td>{{$contact->nachricht}}</td>
        </tr>


    </table>
</section>


</body>
</html>
