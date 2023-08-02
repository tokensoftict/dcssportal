<table>
    <thead>
    <tr>
        <th>Surname</th>
        <th>First Name</th>
        <th>Other Names</th>
        <th>Exam Number</th>
        <th>Telephone</th>
        <th>Email Address</th>
        <th>Parental Status</th>
        <th>School Type First Choice</th>
        <th>School First Choice</th>


    </tr>
    </thead>
    <tbody>
    @foreach($applications as $application)
        <tr>
            <td>{{ strtoupper($application->surname) }}</td>
            <td>{{ strtoupper($application->firstname) }}</td>
            <td>{{ strtoupper($application->othernames) }}</td>
            <td>{{ strtoupper($application->exam_number) }}</td>
            <td>{{ $application->telephone }}</td>
            <td>{{ $application->email }}</td>
            <td>{{ $application->parental_status->name }}</td>
            <td>{{ $application->school_type->name }}</td>
            <td>{{ $application->school->name }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
