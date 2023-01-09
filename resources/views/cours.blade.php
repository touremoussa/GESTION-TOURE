<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <table>
            <tbody>
                <tr>
                    <th><input type ="checkbox"name="" id=""></th>
                    <th>{{$cours[0]->id}}</th>
                    <th>{{$cours[0]->nom}}</th>
                    <th>{{$cours[0]->duree}}</th>
                </tr>
                <tr>
                    <th><input type ="checkbox"name="" id=""></th>
                    <th>{{$cours[1]->id}}</th>
                    <th>{{$cours[1]->nom}}</th>
                    <th>{{$cours[1]->duree}}</th>
                </tr>
                <tr>
                    <th><input type ="checkbox"name="" id=""></th>
                    <th>{{$cours[2]->id}}</th>
                    <th>{{$cours[2]->nom}}</th>
                    <th>{{$cours[2]->duree}}</th>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>