@foreach ($datas as $data)
    <div>
        <h2>{{ $data['type'] }}</h2>
        <p> <b>{{ $data['task'] }}</b> {{ $data['content'] }}</p>
    </div>
@endforeach
