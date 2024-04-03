<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <title>Inquiry</title>
    
    <!-- Include necessary CSS files -->
    @include('inc.link')
    <link rel="stylesheet" href="{{ asset('path/to/font-awesome/css/font-awesome.min.css') }}">
    
    <!-- Data table css -->
    <link href="{{ asset('assets/plugins/datatables/DataTables/css/dataTables.bootstrap5.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/datatables/Buttons/css/buttons.bootstrap5.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/datatables/Responsive/css/responsive.bootstrap5.min.css') }}" rel="stylesheet" />
</head>
<body class="app sidebar-mini">
    <!-- Include Switcher -->
    @include('inc.setting')
    
    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{ asset('assets/images/svgs/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- Page -->
    <div class="page">
        <div class="page-main">
            <!-- Include sidebar -->
            @include('inc.sidebar')
            <!-- /aside -->

            <!-- App-Content -->
            <div class="app-content main-content">
                <div class="side-app">
                    <!-- Include app header -->
                    @include('inc.header')
                    <!-- /app header -->

                    <!-- Page header -->
                    <!-- End Page header -->

                    

                
                    <div class="row">
                        <div class="col-12">
                            @if(session('status'))
                                {{ session('status') }}
                            @endif
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title col-2">APPOINTMENTS</div>
                                    <a href="{{ url('/user')}}" class="btn btn-primary btn-sm float-end">Add User</a>

                                </div>
                                @php
                                    $enquiries = DB::table('enquiries')->get();
                                    $counter = 1;
                                @endphp
                                <div class="card-body">
                                    <!-- Buttons for exporting to PDF and CSV -->
                                    
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-nowrap" id="example">
                                            <thead>
                                                <tr>
                                                    <th class="wd-15p border-bottom-0">sr.no</th>
                                                    <th class="wd-15p border-bottom-0">Name</th>
                                                    <th class="wd-15p border-bottom-0">Email</th>
                                                    <th class="wd-15p border-bottom-0">Phone</th>
                                                    <th class="wd-25p border-bottom-0">Treatment</th>
                                                    <th class="wd-25p border-bottom-0">Message</th>
                                                    <th class="wd-25p border-bottom-0">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($enquiries as $enquiry)
                                                <tr>
                                                    <td>{{ $counter++ }}</td>
                                                    <td>{{ $enquiry->username }}</td>
                                                    <td>{{ $enquiry->email }}</td>
                                                    <td>{{ $enquiry->phone }}</td>
                                                    <td>{{ $enquiry->type }}</td>
                                                    <td>{{ $enquiry->contact_message }}</td>
                                                    <td>
                                                        <!-- Delete button -->
                                                        <form action="{{ route('enquiry.delete', $enquiry->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Row -->
                </div>
            </div>
        </div>

        <!-- Include Footer -->
        @include('inc.footer')
        <!-- End Footer -->
    </div>
    <!-- End Page -->

    <!-- JavaScript -->
    @include('inc.script')
   <script>
    new DataTable('#example', {
    layout: {
        topStart: {
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
        }
    }
});
    </script>
</body>
</html>
