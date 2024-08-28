<div class="container-fluid">

    <div class="col-12">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <!-- <div class="wrapper"> -->
                <div class="text-center mt-1 mb-4 name">
                    <h2>All Disputers</h2>
                </div>
                <table id="productDataTable" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>CNic</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->email }}</td>
                                <td>{{ $product->password }}</td>
                                <td>{{ $product->phone }}</td>
                                <td>{{ $product->address }}</td>
                                <td>{{ $product->cnic }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>CNic</th>
                        </tr>
                    </tfoot>
                </table>
                <!-- </div> -->
            </div>
            <div class="col-1"></div>
        </div>
    </div>



    <script>
        $(document).ready(function() {
            $('#productDataTable').DataTable();
        })
    </script>



</div> <!-- Closing Div for .container class -->