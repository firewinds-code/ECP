@extends('include.master')
@section('title', 'Details')
@section('content')
    <div class="content-wrapper mobcss">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">

                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Data Report</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom: 18px;">
                                        <form id="myForm" method="post" enctype="multipart/form-data"
                                            action="{{ url('job-card-report-get') }}">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <div class="row">
                                                <div class="form-group col-md-4">
                                                    <label for="datefrom">Search Details</label>
                                                    <span style="color: red;">*</span>
                                                    <input type="text" name="job_card_number_search"
                                                        id="job_card_number_search" class="form-control"
                                                        placeholder="Enter Aadhar/PAN/Voter ID Card Number" required
                                                        style="background: rgb(255, 255, 255);" autocomplete="off">
                                                    <div id="suggesstion"></div>
                                                </div>
                                                <div class="form-group col-md-4" style="position: relative; top: 29px;">
                                                    <input type="submit" class="btn btn-primary rounded" name="submit"
                                                        value="Submit">
                                                </div>
                                                <div class="col-sm-4">
                                                    <ol class="breadcrumb float-sm-left">
                                                        <button type="button"
                                                            class="btn btn-block bg-gradient-primary text-white form-control"
                                                            style="position: relative; top: 29px;" data-inline="true"
                                                            data-toggle="modal" onclick="add()" data-target="#addModal"><i
                                                                class="fa fa-plus icon-white"></i> Add User </button>
                                                    </ol>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                                {{-- <p style="color: red;font-size: 18px;padding: 8px;">
                                    <img style="padding: 0 30px;position: relative;top: 29px;" id="image"
                                        src="@isset($records->photo){{ $records->photo }} @endisset"
                                        alt="image" width="50px" height="50px">
                                </p> --}}
                                <div class="col-md-12" style="border: 1px solid #ccc;" id="ticketDataPDf">

                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="addModal" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white ">
                    <h4 class="modal-title">Enter User Details Here:-</h4>
                    <button type="button" style="color: #ffffff" class="close" data-dismiss="modal"
                        aria-hidden="true">&times;</button>
                </div>
                <div class="card-body" id="addbody">

                </div>
            </div>
        </div>
    </div>


@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#job_card_number_search').on('keyup', function() {
            var gov_id_no = $(this).val();
            var url = "{{ url('suggestion?') }}" + gov_id_no;
            var blank = "Sorry Didn't find suggestions";
            if (gov_id_no != '') {
                $.get(url, function(response) {
                    if (response.success) {
                        $('#suggesstion').html(response.response);
                    } else {
                        var out = '<ul>';
                        out += "<li>" + blank + "</li>";
                        out += '</ul>';
                        $('#suggesstion').html(out);
                    }
                });
            } else {
                $('#suggesstion').html('');
            }
        });

        $('#myForm').on('submit', function(event) {
            event.preventDefault();
            var url = $(this).attr('action');
            var form = $(this).serialize();
            $.post(url, form, function(response) {
                if (response.success) {
                    $('#ticketDataPDf').html(response.response);
                } else {
                    var out = 'Sorry Person Not Found ! ';

                    $('#ticketDataPDf').html(out);
                }
            });
        });
    });

    function printDiv(divName, govId) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;

        window.addEventListener("click", function() {
            var url = "{{ url('update-status') }}" + '/' + govId;
            $.get(url, function(response) {
                if (response.success) {
                    toastr.success(response.message, "Success", {
                        toastClass: "toast-success",
                        progressBar: true
                    });

                } else {
                    toastr.error(response.message, "Error", {
                        toastClass: "toast-error",
                        progressBar: true
                    });
                }
            });
        });

    }

    function jobcard(jobcardno) {
        var job_card = jobcardno;
        $('#job_card_number_search').val(job_card);
        $('#suggesstion').html('');
    }
</script>

<script>
    function add(id) {
        $.ajax({
            type: "get",
            url: "{{ route('search.add') }}",
            data: {
                "id": id
            },
            success: function(data) {
                console.log(data.url);
                $("#addModal").modal('show');
                $('#addbody').html(data.html);
            }
        });
    };
</script>


