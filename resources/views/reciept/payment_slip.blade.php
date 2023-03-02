<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Payment Slip</title>
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
                <h3 align="center" style="text-align: center;margin-top: 10px">{{ $session->session }}/{{ $session->session+1 }} ACADEMIC SESSION</h3>
                <h2 align="center" style="text-align: center;margin-top: 10px; color:red">PAYMENT SLIP</h2>
            </td>
        </tr>
    </table>

    <br/>

    <table width="80%" align="center"  id="products" border="1">
        <tr>
            <td><b>First Name:</b></td>
            <td>{{ strtoupper($payment->surName) }} </td>
        </tr>
        <tr>
            <td><b>Last Name:</b></td>
            <td>{{ strtoupper($payment->firstName) }} </td>
        </tr>
        <tr>
            <td><b>Middle Name:</b></td>
            <td>{{ strtoupper($payment->lastName) }} </td>
        </tr>
        <tr>
            <td><b>Amount :</b></td>
            <td>N{{ number_format($payment->amount,2) }} </td>
        </tr>
        <tr>
            <td><b>Total Amount :</b></td>
            <td>N{{ number_format($payment->amount,2) }} </td>
        </tr>
        <tr style="text-align: left; background-color:#FF6;">
            <td><b>Transaction ID for Bank/Online Payment: </b></td>
            <td><span style="color: #F00; !important"><strong>{{ $payment->transactionId }}</strong></span></td>
        </tr>
        <!--
        <tr style="text-align: left;">
            <td colspan="2" style="text-align: center"><span style="color: #F00 !important; padding: 5px; text-align:center"><strong><i class="fa fa-info-circle fa-2x" style="vertical-align:middle"></i> You may proceed to pay by Card or Visit any Bank Branch with this slip to make payment to PAYCHOICE on <span class="red">PAYDIRECT</span>.</strong></span></td>
        </tr>
        -->
    </table>
</div>
</body>
</html>
