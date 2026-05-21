<x-layout>
    <div class="container">
        <h4>E-LOGBOOK ENTRY BY STUDENTS</h4><br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Student ID</th>
                    <th>Submitted by</th>
                    <th>Submitted on</th>
                    <th>Week</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reports as $report)
                    <tr>
                        <td>{{ $report->id }}</td>
                        <td>{{ $report->user->mat_number }}</td>
                        <td>{{ $report->user->name }}</td>
                        <td>{{ $report->report_date}}</td>
                        <td>{{ $report->week }}</td>
                        <td>
                            <a href="{{ route('supervisor.reports.show', $report) }}" class="btn btn-primary">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>