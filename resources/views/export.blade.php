<table>
    <thead>
    <tr>
        <th>Surname</th>
        <th>First Name</th>
        <th>Other Names</th>
        <th>Exam Number</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Telephone</th>
        <th>Email Address</th>
        <th>Address</th>
        <th>Parental Status</th>
        <th>Parent Names</th>
        <th>Rank</th>
        <th>SVC</th>
        <th>SVC Number</th>
        <th>Retired</th>
        <th>Retired Number</th>
        <th>Date of Birth</th>
        <th>Unit Information</th>
        <th>School Type First Choice</th>
        <th>School First Choice</th>
        <th>School Type Second Choice</th>
        <th>School Second Choice</th>
        <th>State of Origin</th>
        <th>Exam State</th>
        <th>Exam Center</th>

    </tr>
    </thead>
    <tbody>
    @foreach($applications as $application)
        <tr>
            <td>{{ strtoupper($application->surname) }}</td>
            <td>{{ strtoupper($application->firstname) }}</td>
            <td>{{ strtoupper($application->othernames) }}</td>
            <td>{{ strtoupper($application->exam_number) }}</td>
            <td>{{ $application->gender }}</td>
            <td>{{ $application->age }}</td>
            <td>{{ $application->telephone }}</td>
            <td>{{ $application->email }}</td>
            <td>{{ $application->address }}</td>
            <td>{{ $application->parental_status->name ?? "" }}</td>
            <td>{{ $application->parent_names }}</td>
            <td>{{ $application->rank }}</td>
            <td>{{ $application->svc }}</td>
            <td>{{ $application->svc_number }}</td>
            <td>{{ $application->retired ? "YES" : "NO" }}</td>
            <td>{{ $application->retired_number }}</td>
            <td>{{ $application->dob }}</td>
            <td>{{ $application->unitFormation }}</td>
            <td>{{ $application->school_type->name ?? "" }}</td>
            <td>{{ $application->school->name ?? "" }}</td>
            <td>{{ $application->school_type2->name ?? "" }}</td>
            <td>{{ $application->school->name ?? "" }}</td>
            <td>{{ $application->state->name ??  "" }}</td>
            <td>{{ $application->examState->name ?? "" }}</td>
            <td>{{ $application->center->name ?? "" }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
