<!doctype html>

<html lang="{{ app()->getLocale() }}">
<head>
    @include('includes.head')
    <title>FitTaste - Die Rezeptplattform für eine gesunde Ernährung</title>
</head>
<body>
@include('includes.header')


<h4 style="margin-top: 100px">Willkommen {{$contact->name}}. Vielen Dank für ihre Nachricht,
    sie erhalten in kürze eine Antwort von uns!</h4>

</body>
</html>