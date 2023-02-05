<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Application Photocard #{{ $application->id }}</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            font-size: 9pt;
            background-color: #fff;
        }

        #products {
            width: 90%;
        }
        #products th, #products td {
            padding-top:5px;
            padding-bottom:5px;

        }
        #products tr td {
            font-size: 8pt;
        }

        #printbox {
            width: 98%;
            margin: 5pt;
            padding: 5px;
            margin: 0px auto;
            text-align: justify;
        }

        .inv_info tr td {
            padding-right: 10pt;
        }

        .product_row {
            margin: 15pt;
        }

        .stamp {
            margin: 5pt;
            padding: 3pt;
            border: 3pt solid #111;
            text-align: center;
            font-size: 20pt;
            color:#000;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>

<div id="printbox">
    <table width="80%" align="center">
        <tr>
            <td width="100%" valign="top" align="center">
                <img  src="{{ public_path("img/logo.png") }}" alt='Logo'>
            </td>
        </tr>
        <tr>
            <td width="100%" valign="top" align="center">
                <p>&nbsp;</p>
                <h1 align="center" style="text-align: center;margin-top: 40px" >COMMAND SECONDARY SCHOOLS ENTRANCE EXAMINATION PHOTOCARD</h1>
                <h2 align="center" style="text-align: center;margin-top: 10px">CANDIDATE'S PHOTOCARD</h2>
                <h3 align="center" style="text-align: center;margin-top: 10px">{{ $session->session }}/{{ $session->session+1 }} ACADEMIC SESSION</h3>
            </td>
        </tr>
    </table>

    <hr/>
    <h1 style="text-align: center">{{ strtoupper("Particulars of Candidate") }}</h1>
    <hr/>
    <table width="100%">
        <tr>
            <td width="70%">
                <table width="100%"  id="products" style=" font-size: 12pt;">
                    <tr>
                        <td colspan="2"><strong>Examination Number:</strong> {{ $application->exam_number }}</td>
                    </tr>
                    <tr>
                        <td><strong>Examination Date:</strong>  Not Set</td>
                        <td><strong>Examination Time:</strong> Not Set</td>
                    </tr>
                    <tr>
                        <td colspan="2"><strong>Examination Center:</strong> {{ $application->center->name }}</td>
                    </tr>
                    <tr>
                        <td colspan="2"><strong>Interview Date:</strong> Will Be Communicated</td>
                    </tr>
                    <tr>
                        <td colspan="2"><strong>Surname:</strong> {{  strtoupper($application->surname) }}</td>
                    </tr>
                    <tr>
                        <td><strong>First Name:</strong> {{ strtoupper($application->firstname) }}</td>
                        <td><strong>Other Names:</strong> {{ strtoupper($application->othernames) }}</td>
                    </tr>
                    <tr>
                        <td colspan="2"><strong>Gender:</strong> {{ $application->gender }}</td>
                    </tr>
                    <tr>
                        <td colspan="2"><strong>School - First Choice: </strong> {{ $application->school->name }}</td>
                    </tr>
                    <tr>
                        <td colspan="2"><strong>School - Second Choice: </strong> {{ $application->school2->name }}</td>
                    </tr>
                    <tr>
                        <td colspan="2"><strong>Parental Status: </strong> {{ $application->parental_status->name }}</td>
                    </tr>
                </table>
            </td>
            <td width="30%" align="center">
                <p>&nbsp;</p>
                <img style="width: 35%;" src="{{ public_path("passport/".$application->passport_path) }}" alt='Passport'>
            </td>
        </tr>
    </table>
</div>

</body>
</html>
