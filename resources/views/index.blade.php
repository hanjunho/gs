@extends('master')

@section('content')


  @if($itemCount = count($items))
    <p>There are {{ $itemCount }} items !</p>
  @else
    <p>There is no item !</p>
  @endif


  <ul>
    @foreach($items as $item)
      <li>{{ $item }}</li>
    @endforeach
  </ul>


  @forelse($items as $item)
    <p>The item is {{ $item }}</p>
  @empty
    <p>There is no item !</p>
  @endforelse
@stop