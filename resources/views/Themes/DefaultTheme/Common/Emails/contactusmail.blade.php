<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact US Email</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            margin-bottom: 20px;
        }

        table tr td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        table tr:last-child td {
            border-bottom: none;
        }

        p {
            text-align: justify;
            text-align: center;
            line-height: 1.6;
        }

        .container row {
            margin-bottom: 5px;

        }
        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <h1>Queries From DRC Users</h1>
        </div>
        <table>
            <tr>
                <td>First Name:</td>
                <td>{{ $contactMailData['fname'] }}</td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td>{{ $contactMailData['lname'] }}</td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>{{ $contactMailData['email'] }}</td>
            </tr>
            <tr>
                <td>Phone:</td>
                <td>{{ $contactMailData['phone'] }}</td>
            </tr>
        </table>
        <p>{{ $contactMailData['contact_text'] }}</p>
    </div>
</body>

</html>







{{-- 

First name: {{ $contactMailData['fname'] }}
Last Name: {{ $contactMailData['lname'] }}
Email: {{ $contactMailData['email'] }}
Phone: {{ $contactMailData['phone'] }}
Description Text: {{ $contactMailData['contact_text'] }}         

--}}
