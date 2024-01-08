@extends('layouts.default')

@section('title', 'Meu Pênis')

@section('sidebar-user')
    <div>
        <nav>
            teste
        </nav>
    </div>
@endsection


@section('content')
{{$name}}<br>
{{$user->name}}<br>
{{$user->password}}<br>

{{date('d/m/y')}}
<br>
@endsection
