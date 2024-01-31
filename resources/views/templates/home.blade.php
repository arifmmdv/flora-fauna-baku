@extends('layouts.web')

@section('content')
    @foreach (json_decode(json_encode($page->content)) as $block)
        @include("blocks.$block->type", ['block' => $block->data])
    @endforeach
@endsection
