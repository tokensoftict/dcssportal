<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Payment Receipt</title>
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
                <h1 align="center" style="text-align: center;margin-top: 40px" >COMMAND SECONDARY SCHOOLS</h1>
                <h2 align="center" style="text-align: center;margin-top: 10px">PAYMENT RECEIPT</h2>
                <h3 align="center" style="text-align: center;margin-top: 10px">{{ $session->session }}/{{ $session->session+1 }} ACADEMIC SESSION</h3>
            </td>
        </tr>
    </table>

    <br/>

    <table width="80%" align="center"  id="products" border="1">
        <tr>
            <td><b>NAME</b></td><td>{{ $payment->firstName }} {{ $payment->lastName }}</td>
        </tr>
        <tr>
            <td><b>PAYMENT FOR</b></td><td>APPLICATION FEE</td>
        </tr>
        <tr>
            <td><b>DATE</b></td><td>{{ $payment->created_at }}</td>
        </tr>
        <tr>
            <td><b>AMOUNT</b></td><td>{{ number_format($payment->amount,2) }}</td>
        </tr>
        <tr>
            <td><b>PHONE NUMBER</b></td><td>{{ $payment->phoneNumber }}</td>
        </tr>
        <tr>
            <td><b>EMAIL ADDRESS</b></td><td>{{ $payment->email }}</td>
        </tr>
    </table>
</div>
</body>
</html>
