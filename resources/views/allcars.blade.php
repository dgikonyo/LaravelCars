<!DOCTYPE html>
<html>
    <head>
       <title>All Cars</title>
    </head>
    <body>
       
    
        <table>
            <tr>
                <td>Car ID</td>
                <td>Make</td>
                <td>Car Model</td>
            </tr>
        @foreach ($cars as $car)
            <tr>
                <td>{{ $car ->id}}</td>
                <td>{{ $car ->make}}</td>
                <td>{{ $car ->model}}</td>
            </tr>
        @endforeach
        </table>

    </body>
</html>