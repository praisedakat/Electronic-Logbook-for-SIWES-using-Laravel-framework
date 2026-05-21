<x-layout>

    <!--<div class="container">
        <div class="card">
            <div class="card-header">
                <p>Report for {{ $report->report_date }}</p>
            </div>
            <div class="card-body">
                <p>{{ $report->content }}</p>
            </div>
        </div>

        @foreach ($report->comments as $comment)
            <h4>SUPERVISOR COMMENTS</h4>
            <div class="card mb-2">
                <div class="card-body">
                    <p> {{ $comment->comment }} </p>
                    <p><small>By: {{ $comment->user->name }} on {{ $comment->created_at->format('d-m-Y H:i') }}
                        </small></p>
                </div>
            </div>
        @endforeach


        @can('comment', $report)
            <form method="POST" action="{{ route('comments.store', $report) }}">
                @csrf
                <label>Supervisors Comment:</label>
                <textarea name="comment" required></textarea>
                <button type="submit">Submit</button>
            @endcan
        </form>
    </div> -->





    <div class="container d-flex justify-content-center align-items-center" style="min-height: 50vh;">
        <div class="card shadow-sm" style="width: 100%; max-width: 700px;">
            <div class="card-body">
                <h2 class="card-title text-center">eLogbook</h2>
                <div class="text-muted text-center mb-3">
                    <p>{{ \Carbon\Carbon::parse($report->report_date)->format('l,F j,Y') }}</p>
                </div>
                <div class="mb-4">
                    <h5>Report Details:</h5>
                    <p>{{ $report->content }} </p>
                </div>
                <div class="mb-4">
                    <h5>Supervisor's Comment:</h5>
                    @if ($report->comments->isEmpty())
                        <p>No comments yet</p>
                    @else
                        <ul class="list-group">
                            @foreach ($report->comments as $comment)
                                <li class="list-group-item">
                                    <strong>{{ $comment->user->name }}</strong>
                                    <span class="text-muted"> on
                                        {{ \Carbon\Carbon::parse($comment->created_at)->format('l,F j,Y \a\t h:i A') }}</span>
                                    <p>{{ $comment->comment }}</p>
                                </li>
                            @endforeach
                            @can('comment', $report)
                                <form method="POST" action="{{ route('comments.store', $report) }}">
                                    @csrf
                                    <label>Supervisors Comment:</label>
                                    <textarea name="comment" required></textarea>
                                    <button type="submit">Submit</button>
                                @endcan
                            </form>
                        </ul>
                    @endif
                </div>
                <a href="{{ route('reports.index') }}" class="btn btn-primary">Back to Reports</a>

            </div>
        </div>
    </div>
</x-layout>
