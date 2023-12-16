@extends('include.master')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="container-fluid">
                        <br>
                        <form action="{{ route('daterange') }}" method="POST" id="daterange">
                            @csrf
                            <div class="col-md-12">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Date range:</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group" style="margin-left:20px;">
                                                    <label>Date range button:</label>
                                                    <input name="dateRangehid" type="hidden" id="dateRangehid">
                                                    <div class="input-group">
                                                        <button type="button" class="btn btn-default float-right"
                                                            id="reportrange">
                                                            <i class="far fa-calendar-alt"></i> <span></span>
                                                            <i class="fas fa-caret-down"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2" style="margin-top:5px;">
                                                <br>
                                                <div class="form-group">
                                                    <button onclick="" name="search" type="submit"
                                                        class="btn btn-primary">Search</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-12">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Datatable </h3>
                                    </div>
                                    <div class="card-body">
                                        <table id="reportwork" action="report.report" class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>S.No.</th>
                                                    <th>Status</th>
                                                    <th>Image</th>
                                                    <th>Govt. ID Type</th>
                                                    <th>Govt. ID Number</th>
                                                    <th>Name</th>
                                                    <th>DOB</th>
                                                    <th>Father's Name</th>
                                                    <th>Age</th>
                                                    <th>Sex</th>
                                                    <th>Email</th>
                                                    <th>Contact No</th>
                                                    <th>Vidhan Sabha</th>
                                                    <th>Address</th>
                                                    <th>District</th>
                                                    <th>State</th>
                                                    <th>Pincode</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (!empty($data))
                                                    @php $i = 1; @endphp
                                                    @foreach ($data as $result)
                                                        <tr>
                                                            <td>{{ $i }}</td>
                                                            <td>
                                                                @if ($result->status == 1)
                                                                    Voted
                                                                @elseif ($result->status == 0)
                                                                    Pending
                                                                @endif
                                                            </td>
                                                            <td>{{ $result->photo}}</td>
                                                            <td>{{ $result->gov_id_type}}</td>
                                                            <td>{{ $result->gov_id_no}}</td>
                                                            <td>{{ $result->name}}</td>
                                                            <td>{{ $result->dob}}</td>
                                                            <td>{{ $result->father_name}}</td>
                                                            <td>{{ $result->age}}</td>
                                                            <td>{{ $result->sex}}</td>
                                                            <td>{{ $result->email}}</td>
                                                            <td>{{ $result->phone}}</td>
                                                            <td>{{ $result->vidhan_sabha}}</td>
                                                            <td>{{ $result->address}}</td>
                                                            <td>{{ $result->district}}</td>
                                                            <td>{{ $result->state}}</td>
                                                            <td>{{ $result->pincode}}</td>
                                                        </tr>
                                                        @php $i++; @endphp
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(function() {
            var start = moment().subtract(0, 'days');
            var end = moment();

            function cb(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                $('#dateRangehid').val(start.format('YYYY-MM-DD') + '@' + end.format('YYYY-MM-DD'));
            }
            $('#reportrange').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                        'month').endOf('month')]
                }
            }, cb);
            cb(start, end);
        });
    </script>
    <script>
        $(function() {
            $("#reportwork").DataTable({
                "responsive": false,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["csv"],
                "scrollX": true // Add this option for side-scrolling
            }).buttons().container().appendTo('#reportwork_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection
