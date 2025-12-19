@extends('template.default')

@section('title', 'my view')
@section('content')
<ul>
    <?php
    //$num = 2;
    for($i=1; $i<=12; $i++){
    ?>
        <li>
            {{ $num }} x {{ $i }}
            = {{$num * $i}}
        </li>
        <?php } ?>
</ul>
@endsection

