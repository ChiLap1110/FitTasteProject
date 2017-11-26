<!doctype html>

<html lang="{{ app()->getLocale() }}">
<head>
    @include('includes.head')
    <title>FitTaste - Die Rezeptplattform für eine gesunde Ernährung</title>
</head>
<body>
/*@include('includes.header')*/

<section>
    <h2>Folgende Nachrichten existieren in der Datenbank:</h2>

    <table style='border: solid 1px black; margin-left: 250px;'>
        <tr><th>ID</th><th>Name </th><th> E-Mail</th><th> Nachricht</th>

@foreach($contacts as $contact)

    <tr>
        <td>{{$contact->id}}|</td>
        <td>{{$contact->name}}| </td>
        <td>{{$contact->betreff}}</td>
        <td><a href="/showcontact/{{$contact->id}}">anschauen</a></td>
    </tr>
    @endforeach
    </table>
    </section>

</body>
</html>
