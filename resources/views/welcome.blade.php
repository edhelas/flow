@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach ($subjects as $subject)
            @include('partials.subject', ['subject' => $subject, 'auth' => false])
        @endforeach

        {{$subjects->links()}}
    </div>
@endsection
