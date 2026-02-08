<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Application Photocard #{{ $application->id }}</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 12px;
            color: #000;
        }

        .header {
            text-align: center;
            margin-bottom: 10px;
        }

        .logos img {
            height: 60px;
        }

        .title {
            font-size: 16px;
            font-weight: bold;
            margin-top: 5px;
        }

        .subtitle {
            font-size: 13px;
            margin-top: 3px;
        }

        .section-title {
            color: #d32f2f;
            font-weight: bold;
            text-align: center;
            margin: 15px 0 8px;
        }

        .divider {
            border-top: 1px solid #ccc;
            margin: 10px 0;
        }

        .photo {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 1px solid #ccc;
        }

        .label {
            font-weight: bold;
            color: #1a237e;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 6px 4px;
            vertical-align: top;
        }
    </style>
</head>
<body>

<!-- HEADER -->
<div class="header">
    <table class="logos">
        <tr>
            <td align="center">
                <img src="{{ public_path("img/logo.png") }}">
            </td>
        </tr>
    </table>
    <div class="title">
        COMMAND SECONDARY SCHOOLS ENTRANCE<br>
        EXAMINATION PHOTOCARD
    </div>

    <div class="subtitle">
        {{ $session->session }}/{{ $session->session+1 }} ACADEMIC SESSION
    </div>
</div>

<div class="section-title">PARTICULARS OF CANDIDATE</div>
<div class="divider"></div>

<!-- CANDIDATE DETAILS -->
<table>
    <tr>
        <td width="120">
            <img class="photo" src="{{ public_path($application->passport_path) }}">
        </td>

        <td>
            <table>
                <tr>
                    <td>
                        <span class="label">Surname:</span><br>
                        {{  strtoupper($application->surname) }}
                    </td>
                    <td>
                        <span class="label">First Name:</span><br>
                        {{ strtoupper($application->firstname) }}
                    </td>
                    <td>
                        <span class="label">Phone number:</span><br>
                        {{ strtoupper($application->telephone) }}
                    </td>
                </tr>

                <tr>
                    <td>
                        <span class="label">Other Names:</span><br>
                        {{ strtoupper($application->othernames) }}
                    </td>
                    <td>
                        <span class="label">Email Address:</span><br>
                        {{ $application->email }}
                    </td>
                    <td>
                        <span class="label">Gender:</span><br>
                        {{ $application->gender }}
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<div class="divider"></div>

<!-- EXAM DETAILS -->
<table>
    <tr>
        <td>
            <span class="label">Examination Number:</span><br>
            {{ $application->exam_number }}
        </td>
        <td>
            <span class="label">Entrance Examination Date:</span><br>
            Saturday,13th June 2026
        </td>
        <td>
            <span class="label">Entrance Examination Time:</span><br>
            8:00 AM
        </td>
    </tr>

    <tr>
        <td>
            <span class="label">School - First Choice:</span><br>
            {{ $application->school->name }}
        </td>
        <td>
            <span class="label">School - Second Choice:</span><br>
            {{ $application->school2->name }}
        </td>
        <td>
            <span class="label">Parent Status:</span><br>
            {{ $application->parental_status->name }}
        </td>
    </tr>

    <tr>
        <td colspan="2">
            <span class="label">Entrance Examination Center:</span><br>
            {{ $application->center->name }}
        </td>
        <td>
            <span class="label">Interview Date:</span><br>
            WILL BE COMMUNICATED
        </td>
    </tr>
</table>

</body>
</html>
