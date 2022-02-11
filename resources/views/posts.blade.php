<!--/* when using layout not as a component
 @extends('layout')

@section ('content')
  <h1><a href="/posts">Hello</a></h1>
  @foreach ($posts as $post)
    <aricle class="{{ $loop->even ? 'foobar' : '' }}">
      <?= $post; ?>
    </article>
  @endforeach
@endsection */-->
<x-layout>
  <h1><a href="/posts">Hello</a></h1>
  @foreach ($posts as $post)
    <aricle class="{{ $loop->even ? 'foobar' : '' }}">
      <?= $post; ?>
    </article>
  @endforeach
  <!--/* <x-slot name="content">
  
  </x-slot> */-->
</x-layout>