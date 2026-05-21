<!--
    <div class="container">
        <h4>ENTRY DETAILS</h4>
        <div class="card">
            <div class="card-header">
                <h4>{{ $report->title }}</h4>
                <P>Student ID: {{$report->user->mat_number }}</P>
                <p>Submitted  By: {{ $report->user->name }}</p>
                <p>Submitted On: {{ $report->created_at->format('d-m-Y') }}</p>
            </div>
            <div class="card-body">
                <p>{{ $report->content }}</p>
            </div>
        </div>

        @foreach ($report->comments as $comment)
        <h4>COMMENT</h4>
        <div class="card mb-2">
            <div class="card-body">
                <p>{{ $comment->comment }}</p>
                <p><small>By: {{ $comment->user->name }} on {{ $comment->created_at->format('d-m-Y H:i') }}</small></p>
            </div>
        </div>
        @endforeach

        <form action="{{ route('supervisor.reports.comment', $report) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="comment">MAKE COMMENTS</label>
                <textarea name="comment" id="comment" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Comment</button>
        </form>
    </div> -->

    <x-layout>
        <div class="container d-flex justify-content-center align-items-center" style="min-height: 50vh;">
            <div class="card shadow-sm" style="width: 100%; max-width:700px;">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Report Details</h2>
                <div class="text-muted text-center mb-3">
                    <p>Submitted by <strong>{{ $report->user->name}}</strong> on {{ \Carbon\Carbon::parse($report->report_date)->format('l, F j, Y')}}</p>
                </div>

                <div class="mb-4">
                    <h5>Report Details:</h5>
                    <p>{{ $report->content }}</p>
                </div>

                <div class="mb-4">
                    <h5>Comments:</h5>
                    @if($report->comments->isEmpty())
                        <p>No comments yet.</p>
                    @else
                        <ul class="list-group">
                            @foreach ($report->comments as $comment)
                                <li class="list-group-item">
                                        <strong>{{ $comment->user->name}}</strong>
                                        <span class="text-muted">on {{ \Carbon\Carbon::parse($comment->created_at)->format('l, F j, Y \a\t h:i A') }}
                                        </span>
                                        <p>{{ $comment->comment }}</p>
                                </li>
                            @endforeach
                        </ul>
                        @endif
                </div> 
                <div class="mb-4">
                    <h5>Leave a Comment:</h5>
                    <form action="{{ route('supervisor.reports.comment', $report->id)}}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="comment">Your Comment</label>
                            <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Submit Comment</button>
                    </form>
                </div>
                <a href="{{ route('supervisor.reports.index') }}" class="btn btn-primary">Back to Reports</a>
                </div>
            </div>
        </div>
    </x-layout>