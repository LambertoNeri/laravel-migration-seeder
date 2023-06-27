<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        @foreach ($trains as $train)
            <div class="card">
                <div>
                    <div>Compagnia: {{$train['company']}}</div>
                    <div>in partenza da: {{$train['departure_station']}}</div>
                    <div>in arrivo a: {{$train['arrival_station']}}</div>
                    <div>
                        orario di partenza: {{$train['departure_time']}}
                        data di partenza: {{$train['departure_date']}}
                    </div>
                    <div>
                        orario di arrivo: {{$train['arrival_time']}}
                        data di arrivo: {{$train['arrival_date']}}
                    </div>
                    <div>Treno numero: {{$train['train_code']}}</div>
                    <div>numero carrozze{{$train['number_of_carriages']}}</div>
                    @if ($train['on_time'] == 1 ) 
                        <div>il treno è in orario</div>
                    @else
                        <div>il treno è in ritardo</div>
                    @endif

                    @if ($train['deleted'] == 1 ) 
                        <div>treno soppresso</div>
                    @endif

               
                </div>
            </div>
        @endforeach
    </body>
</html>
