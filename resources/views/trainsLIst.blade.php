

@extends('layouts.main')

@section('hero')
    <h1>Lista dei treni di oggi</h1>
@endsection

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Treni odierni</title>
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Azienda</th>
            <th scope="col">Stazione di partenza</th>
            <th scope="col">Stazione di arrivo</th>
            <th scope="col">Orario di partenza</th>
            <th scope="col">Orario di arrivo</th>
            <th scope="col">Codice treno</th>
            <th scope="col">Numero carrozze</th>
            <th scope="col">In orario</th>
            <th scope="col">Cancellato</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($trains as $train)
          <tr>
              <th scope="row"></th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
          </tr>
          @endforeach 
        </tbody>
      </table>
</body>
</html>

@endsection
