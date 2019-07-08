@extends('layouts.app')

@section('content')
<div class="form-row">
    <div class="form-group col-md-6">
        <h2>Create</h2>
    </div>
</div>

<div class="clearfix pb-1">
    {!! Form::model($subject, [
        'action' => 'SubjectController@store'
    ]) !!}

    <div class="form-row">
        <div class="form-group col-md-8">
            {!! Form::label('topic', 'Topic') !!}
            {!! Form::textarea('topic', $subject->topic, ['class' => 'form-control', 'required', 'rows' => 2]); !!}
        </div>
    </div>

    {!! Form::submit('Create', ['class' => 'btn btn-primary float-right']); !!}

    {!! Form::close() !!}

</div>


@endsection
