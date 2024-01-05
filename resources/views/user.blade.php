{{$name}}<br>
{{$user->name}}<br>
{{$user->password}}<br>

{{date('d/m/y')}}
<br>


@php
    $total = 11;
@endphp
@if($total > 100)
    Muito caro isso daí
@elseif($total > 60)
Posso até pagar

@elseif($total >55)
abaixa mais ae
@else
good, good
@endif

{{$usuarios}}