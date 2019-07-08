<div class="card mb-1" style="width: 100%;">
    <div class="card-body">
        @if ($auth)
            <a href="{{ route('subjects.votes.down', $subject) }}" class="btn btn-info btn-sm float-right">Down ▼</a>
            <a href="{{ route('subjects.votes.up', $subject) }}" class="btn btn-info btn-sm float-right">Up ▲</a>
        @endif

        <h5 class="card-title">{{$subject->topic}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{$subject->user->name}}</h6>
        <p class="card-text">
            <small class="text-muted">
                {{$subject->ups()->count()}}▲
                {{$subject->downs()->count()}}▼
                -
                {{$subject->created_at}}
            </small>
        </p>
    </div>
</div>