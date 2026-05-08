<!DOCTYPE html>
<html>
<head>
    <title>Education History</title>
</head>
<body>

<h1>Education History</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>School</th>
        <th>Degree</th>
        <th>Start Year</th>
        <th>End Year</th>
    </tr>

    @foreach ($educations as $edu)
        <tr>
            <td>{{ $edu->school_name }}</td>
            <td>{{ $edu->degree }}</td>
            <td>{{ $edu->start_year }}</td>
            <td>{{ $edu->end_year ?? '-' }}</td>
        </tr>
    @endforeach

</table>

</body>
</html>


    @foreach ($educations as $edu)
        <tr>
            <td>{{ $edu->school_name }}</td>
            <td>{{ $edu->degree }}</td>
            <td>{{ $edu->start_year }}</td>
            <td>{{ $edu->end_year ?? '-' }}</td>
        </tr>
    @endforeach

</table>

</body>
</html>
