<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Nom</th>
        </tr>
        @foreach ($posts as $post)
            <tr>
                <td>{{$post->text}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
