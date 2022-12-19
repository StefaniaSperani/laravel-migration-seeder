<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel-Trains</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body class="bg-danger">
    <main>
        <div class="container">
            <h1 class="text-center py-4">Bacheca treni</h1>
                
            <table class="table table-dark table-striped"">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Azienda</th>
                    <th scope="col">Partenza</th>
                    <th scope="col">Arrivo</th>
                    <th scope="col">Ora Partenza</th>
                    <th scope="col">Ora Arrivo</th>
                    <th scope="col">Codice</th>
                    <th scope="col">Carrozze</th>
                    <th scope="col">In orario</th>
                    <th scope="col">Cancellato</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $train)
                  <tr>
                    <th scope="row">{{$train->id}}</th>
                    <td>{{$train->azienda}}</td>
                    <td>{{$train->stazione_partenza}}</td>
                    <td>{{$train->stazione_arrivo}}</td>
                    <td>{{$train->orario_partenza}}</td>
                    <td>{{$train->orario_arrivo}}</td>
                    <td>{{$train->codice_treno}}</td>
                    <td>{{$train->numero_carrozze}}</td>
                    <td>{{$train->in_orario}}</td>
                    <td>{{$train->cancellato}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

        </div>

    </main>
    
</body>

</html>
