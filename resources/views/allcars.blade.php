<!DOCTYPE html>
<html>
    <head>
        <title>Car {{ $car->id }}</title>
    </head>
    <body>
        <h1> Car {{ $car->id }}</h1>
       <!-- <ul>
            <li>Make: {{ $car->make }}</li>
            <li>Model: {{ $car->model }}</li>
            <li>Produced On: {{ $car->produced_on}}</li>
        </ul> -->

        <table>
            <tr>
                <td>Car ID</td>
                <td>Make</td>
                <td>Model</td>
            </tr>
            @foreach($cars as car)
            <tr>
                <td>{{$car->id}}</td>
                <td>{{$car->make}}</td>
                <td>{{$car->model}}</td>
            </tr>
            @endforeach
        </table>

    </body>
</html>