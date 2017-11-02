@extends('layouts.app')

@section('content')
    <h1>Haveランキング</h1>
    @include('items.itemsn', ['items' => $items])
@endsection