<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    
    <!-- Title -->
    <title>Inquiry</title>

    <!-- Include CSS files -->
    @include('inc.link')
    <link rel="stylesheet" href="{{ asset('path/to/font-awesome/css/font-awesome.min.css') }}">
</head>
<body class="app sidebar-mini">

    <!-- Include Switcher -->
    @include('inc.setting')

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="https://php.spruko.com/azea/azea/assets/images/svgs/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- Page -->
    <div class="page">
        <div class="page-main">
            
            <!-- Include sidebar -->
            @include('inc.sidebar')

            <!-- App-Content -->
            <div class="app-content main-content">
                <div class="side-app">
                    
                    <!-- Include app header -->
                    @include('inc.header')
                    <!-- /app header -->

                    <!-- Page header -->
                    
                    <!-- End Page header -->

                    <!-- Row -->
                    <div class="row">
                        <div class="col-12">
                            @if(session('status'))
                                {{ session('status') }}
                            @endif

                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title col-2">APPOINTMENTS</div>
                                </div>
                                @php
                                    $result = \DB::table('ratings')->get();
                                    $counter = 1;
                                @endphp
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-nowrap" id="example">
                                            <thead>
                                                <tr>
                                                    <th class="wd-15p border-bottom-0">sr.no</th>
                                                    <th class="wd-15p border-bottom-0">Name</th>
                                                    <th class="wd-15p border-bottom-0">Rating</th>
                                                    <th class="wd-25p border-bottom-0">Message</th>
                                                    <th class="wd-25p border-bottom-0">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($result as $row)
                                                    <tr>
                                                        <td>{{ $counter++ }}</td>
                                                        <td>{{ $row->name }}</td>
                                                        <td>{{ $row->rate }}</td>
                                                        <td>{{ $row->message }}</td>
                                                      <td>
                                                        <!-- Delete button -->
                                                        <form action="{{ route('review.delete', $row->id) }}" method="POST">
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

    <!-- Include JavaScript -->
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
