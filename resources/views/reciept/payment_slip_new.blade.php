<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body {
            font-family: sans-serif;
            font-size: 12px;
            color: #000;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .logos img {
            height: 60px;
        }

        .title-red {
            color: #d32f2f;
            font-size: 16px;
            font-weight: bold;
        }

        .subtitle {
            font-size: 13px;
            margin-top: 3px;
        }

        .receipt-title {
            color: #d32f2f;
            font-size: 14px;
            font-weight: bold;
            text-decoration: underline;
            margin-top: 15px;
        }

        .section-header {
            background-color: #d32f2f;
            color: #fff;
            font-weight: bold;
            padding: 8px;
            font-size: 13px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        .label {
            color: #777;
            width: 30%;
        }

        .value {
            font-weight: bold;
        }
    </style>
</head>
<body>

<!-- HEADER -->
<div class="header">
    <table class="logos">
        <tr>
            <td align="center">
                <img  src="{{ public_path("img/logo.png") }}" alt='Logo'>
            </td>
        </tr>
    </table>

    <div class="title-red" style="color:#000; margin-top:10px;">
        COMMAND SECONDARY SCHOOLS
    </div>

    <div class="subtitle">
        {{ $session->session }}/{{ $session->session+1 }} ACADEMIC SESSION
    </div>

    <div class="receipt-title">
        PAYMENT RECEIPT
    </div>
</div>

<!-- PERSONAL DETAILS -->
<table>
    <tr>
        <td colspan="2" class="section-header">PERSONAL DETAILS</td>
    </tr>
    <tr>
        <td class="label">Name:</td>
        <td class="value">{{ strtoupper($payment->surName) }} {{ strtoupper($payment->firstName) }} {{ strtoupper($payment->lastName) }}</td>
    </tr>
    <tr>
        <td class="label">Phone Number:</td>
        <td class="value">{{ $payment->phoneNumber }}</td>
    </tr>
    <tr>
        <td class="label">Email Address:</td>
        <td class="value">{{ $payment->email }}</td>
    </tr>
</table>

<!-- PAYMENT DETAILS -->
<table>
    <tr>
        <td colspan="2" class="section-header">PAYMENT DETAILS</td>
    </tr>
    <tr>
        <td class="label">Payment:</td>
        <td class="value">Application Fee</td>
    </tr>
    <tr>
        <td class="label">Transaction ID:</td>
        <td class="value">{{ $payment->transactionId }}</td>
    </tr>
    <tr>
        <td class="label">Amount:</td>
        <td class="value">N{{ number_format($payment->amount,2) }}</td>
    </tr>
    <tr>
        <td class="label">Date:</td>
        <td class="value">{{ (new \Carbon\Carbon($payment->updated_at))->format("d/m/Y") }}</td>
    </tr>
</table>

</body>
</html>
