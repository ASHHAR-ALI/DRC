<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Report</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/allassets/PDFstyles/style.css') }}">

</head>

<body>

    <div class="heading">
        <h1 class="text-center" style="color: red;">FINAL REPORT</h1>
    </div>

    <hr class="hr">

    {{-- Disputer Info --}}
    @if ($dispute->disputer)
        <div class="first-table">
            <h3 class="text-center text-light text-small mb-2">Disputer Info</h3>
            <table class="table table-small table-striped table-dark ml-0 mt-2">
                <tr class="center">
                    <td>
                        <h4>NAME</h4>
                    </td>
                    <td>
                        <h4>FATHER NAME</h4>
                    </td>
                    <td>
                        <h4>EMAIL</h4>
                    </td>
                    <td>
                        <h4>PHONE NO.</h4>
                    </td>
                    <td>
                        <h4>ADDRESS</h4>
                    </td>
                    <td>
                        <h4>CNIC</h4>
                    </td>
                    <td>
                        <h4>DISPUTE TYPE</h4>
                    </td>
                </tr>
                <tr class="center">
                    <td>{{ $dispute->disputer->name }}</td>
                    <td>{{ $dispute->disputer->fathername }}</td>
                    <td>{{ $dispute->disputer->email }}</td>
                    <td>{{ $dispute->disputer->contact }}</td>
                    <td>{{ $dispute->disputer->address }}</td>
                    <td>{{ $dispute->disputer->cnic }}</td>
                    <td>{{ $dispute->disputestype->dispute_type_name }}</td>
                </tr>
            </table>
        </div>
    @endif

    {{-- Members Info --}}
    @if ($dispute->members->isNotEmpty())
        <div class="second-table">
            <h3 class="text-center text-light text-small mb-2">Member Info</h3>
            <table class="table table-small table-striped table-dark ml-0">
                <tr class="center">
                    <td>
                        <h4>NAME</h4>
                    </td>
                    <td>
                        <h4>FATHER NAME</h4>
                    </td>
                    <td>
                        <h4>EMAIL</h4>
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
                        <h4>DISPUTE TYPE</h4>
                    </td>
                </tr>
                @foreach ($dispute->members as $member)
                    <tr class="center">
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->fathername }}</td>
                        <td>{{ $member->email }}</td>
                        <td>{{ $member->contactnumber }}</td>
                        <td>{{ $member->address }}</td>
                        <td>{{ $member->cnic }}</td>
                        <td>{{ $dispute->disputestype->dispute_type_name }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    @endif

    {{-- Dispute Person Info --}}
    <div class="third-table">
        <h3 class="text-center text-light text-small mb-2">Dispute Person Info</h3>
        <table class="table table-small table-striped table-dark ml-0">
            <tr class="center">
                <td>
                    <h4>NAME</h4>
                </td>
                <td>
                    <h4>FATHER NAME</h4>
                </td>
                <td>
                    <h4>EMAIL</h4>
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
                    <h4>DISPUTE TYPE</h4>
                </td>
            </tr>
            <tr class="center">
                <td>{{ $dispute->dispute_person_name }}</td>
                <td>{{ $dispute->dispute_person_father_name }}</td>
                <td>{{ $dispute->email }}</td>
                <td>{{ $dispute->dispute_person_contact_number }}</td>
                <td>{{ $dispute->dispute_person_address }}</td>
                <td>{{ $dispute->dispute_person_cnic }}</td>
                <td>{{ $dispute->disputestype->dispute_type_name }}</td>
            </tr>
        </table>
    </div>




    <div class="fourth-table">
        <h3 class="text-center text-light text-small mb-2">Final Decision</h3>
        <table class="table table-small table-striped table-dark ml-0">
            <tr class="center">
                <td>
                    <h4>{{ $dispute->final_review ?? 'No review available' }}</h4>
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
