@extends('layouts.app')

@section('content')
<a href="{{ route('subjects.create') }}" class="btn btn-success float-right">Create</a>
<h1>Subjects</h1>

<div class="row">
    @foreach ($subjects as $subject)
        @include('partials.subject', ['subject' => $subject, 'auth' => true])
    @endforeach

    {{$subjects->links()}}
</div>

@endsection