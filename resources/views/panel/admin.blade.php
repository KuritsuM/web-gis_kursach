<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Подтвердить новые координаты</title>
</head>
<body>
    <div>
        <span>Точки для подтверждения: </span>
        @foreach($busStopToConfirm as $busStop)
            <div>
                <span>Имя: {{$busStop->name}}</span>
                <span>Долгота: {{$busStop->location->getLat()}}; Широта: {{$busStop->location->getLng()}}</span>
                <form action="{{ route('admin.confirm') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$busStop->id}}">
                    <input type="hidden" name="confirmation" value="1">
                    <button type="submit">Подтвердить</button>
                </form>
                <form action="{{ route('admin.confirm') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$busStop->id}}">
                    <input type="hidden" name="confirmation" value="0">
                    <button type="submit">Отклонить</button>
                </form>
            </div>
        @endforeach
    </div>
</body>
</html>
