<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Report</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/allassets/PDFstyles/style.css') }}">
    {{-- <style>
        :root {
            --M10: 10px;
            --M20: 20px;
            --M30: 30px;
            --M40: 40px;
            --M50: 50px;
            --MMax: 30px;
            --MLeft: 10px;
            --MRight: 10px;
            --PTop: 20px;
            --PMax: 40px;
            --ColHeight: 500px;
            --BGColor: rgb(74, 82, 74);
            --TextDark: black;
            --TextLight: White;

            text-align: center;
            box-sizing: border-box;
        }

        @page {
            size: A4;
            margin: 0;
            padding: 0;
            width: 790px;
            height: 1000px;
            display: block;
        }

        html,
        body {
            font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
            background-image: url("{{ asset('/allassets/images/background/fp12.jpg') }}");
            background-repeat: repeat-y;
            background-size: cover;
            background-position: fixed;
            margin: 0;
            padding: 0;
            justify-content: center;
            align-items: center;
            opacity: 0.8;
            box-sizing: border-box;
        }

        table::before,
        table::after,
        thead:before,
        thead:after,
        tbody:before,
        tbody:after,
        tfoot:before,
        tfoot:after {
            display: none;
        }

        .heading {
            margin-top: 10px;
            font-size: xx-small;
            margin: 0;
            padding: 0;
        }

        .hr {
            border-top: 3px solid red;
            margin: 0;
            padding: 0;
        }



        h4,
        h5,
        h6 {
            font-size: xx-small;
            text-align: center;
        }

        tr {
            font-size: x-small;
        }

        th {
            padding: 0;
        }

        td {
            text-align: center;
            font-size: xx-small;
            padding: 0;
        }


        table {
            border: 2px solid black;
            width: 100%;
            height: auto;
            table-layout: fixed;
            margin: 0;
            padding: 0;
            border-collapse: collapse;
            color: white;
        }

        .table,
        th,
        td {
            border: 1px solid;
            border-collapse: collapse;
        }

        .first-table {
            height: 150px;
            width: 90%;
            display: inline-block;
            padding: 0;
            margin: (10px 35px 10px 35px);
            background-color: rgb(88, 145, 103);
            border: 2px solid green;
        }

        .second-table {
            height: 150px;
            width: 90%;
            display: inline-block;
            padding: 0;
            margin: (10px 35px 10px 35px);
            background-color: rgb(91, 88, 145);
            border: 2px solid rgb(42, 18, 150);
}


        .third-table {
            height: 150px;
            width: 90%;
            display: inline-block;
            padding: 0;
            margin: (30px 35px 10px 35px);
            background-color: rgb(94, 155, 62);
            border: 2px solid rgb(43, 228, 10);
}
    </style> --}}
</head>

<body>

    <div class="heading">
        <h1 class="text-center" style="color: red;">FINAL REPORT</h1>
    </div>

    <hr class="hr">

    <div class="first-table">
        <h3 class="text-center text-light text-small mb-2">Disputer Info</h3>
        <table class="table table-small table-striped table-dark ml-0 mt-2">
            <tr class="center" style="width: 100%;">
                <td>
                    <h4>NAME</h4>
                </td>
                <td>
                    <h4>FATHER NAME</h4>
                </td>
                <td>
                    <h4>EMAIL </h4>
                </td>
                <td>
                    <h4>PHONE NO.</h4>
                </td>
                <td>
                    <h4>ADDRESS</h4>
                </td>
                <td>
                    <h4>LOCATION</h4>
                </td>
                <td>
                    <h4>LOCATION</h4>
                </td>
            </tr>

            <tr class="center" style="width: 100%;">

                <td>
                    Ashhar Ali
                </td>
                <td>
                    Muhammad Anwar
                </td>
                <td>
                    ashhar@gmail.com
                </td>
                <td>
                    +92 320 0482549
                </td>
                <td>
                    PSIC Society
                </td>
                <td>
                    Lahore
                </td>
                <td>
                    Lahore
                </td>
            </tr>
        </table>
    </div>



    <div class="second-table">

        <h3 class="text-center text-light text-small mb-2">Member Info</h3>

        <table class="table table-small table-striped table-dark ml-0">

            <tr class="center" style="width: 100%;">
                <td>
                    <h4>NAME</h4>
                </td>
                <td>
                    <h4>FATHER NAME</h4>
                </td>
                <td>
                    <h4>EMAIL </h4>
                </td>
                <td>
                    <h4>PHONE NO.</h4>
                </td>
                <td>
                    <h4>ADDRESS</h4>
                </td>
                <td>
                    <h4>LOCATION</h4>
                </td>
                <td>
                    <h4>LOCATION</h4>
                </td>
            </tr>



            <tr class="center" style="width: 100%;">

                <td>
                    Ashhar Ali
                </td>
                <td>
                    Muhammad Anwar
                </td>
                <td>
                    ashhar@gmail.com
                </td>
                <td>
                    +92 320 0482549
                </td>
                <td>
                    PSIC Society
                </td>
                <td>
                    Lahore
                </td>
                <td>
                    Lahore
                </td>

            </tr>

        </table>
    </div>



    <div class="third-table">

        <h3 class="text-center text-light text-small">Decision Comment</h3>

        <table class="table table-small table-striped table-dark ml-0">

            <tr class="center" style="width: 100%;">

                <td>
                    @foreach ($disputes as $disp)
                        <p>{{ $disp->final_review }}</p>
                    @endforeach
                </td>

            </tr>

        </table>
    </div>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

</body>

</html>
