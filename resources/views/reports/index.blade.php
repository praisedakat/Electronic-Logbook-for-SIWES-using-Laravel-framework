 <x-layout> 
  <!--<h3>My Reports</h3>

    <ul style="list-style:none">
        @foreach ($reports as $report) 
            <div class="container">
                <div class="card">
                    <div class="card-header">{{ $report->report_date }}</div>
                    <div class="card-body">
                        <li><a class="students_show"
                                href="{{ route('reports.show', $report) }}">{{ $report->content }}</a></li>
                    </div>
                </div>
            </div><br>
        @endforeach
    </ul> -->

    <div>
        <h4>MY REPORTS</h4><br>
        <table class="table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Content</th>
                    <th>Week</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reports as $report)
                    <tr>
                        <td>{{ $report->day }}<br>
                            {{ $report->report_date }}
                        </td>
                        <td><a href="{{ route('reports.show', $report) }}" style="color: black">{{ $report->content }}</a></td>
                        <td>{{ $report->week}}</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <a href="/reports/{{$report->id}}/edit" class="btn btn-primary me-2">Edit</a>
                            
                            <form method="POST" action="/reports/{{$report->id}}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{$reports->links()}}

 </x-layout>