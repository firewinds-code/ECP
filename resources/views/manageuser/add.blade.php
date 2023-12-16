<form action="{{ route('manageuser.postadd') }}" method="post" id="addUser" enctype="multipart/form-data">
    @csrf
    <div class="card card-primary card-outline">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email<span class="text-danger">*</span></label>
                        <input name="email" type="email" class="form-control" id="email"
                            placeholder="Enter Email">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Name<span class="text-danger">*</span></label>
                        <input name="name" type="name" class="form-control" id="name"
                            placeholder="Enter Name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="phone">Phone No.<span class="text-danger">*</span></label>
                        <input name="phone" type="tel" class="form-control" id="phone"
                            placeholder="Enter Phone Number">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password">Password<span class="text-danger">*</span></label>
                        <input name="password" type="password" class="form-control" id="password"
                            placeholder="Enter Password">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>User Type<span class="text-danger">*</span></label>
                        <select class="form-control select2bs4" style="width: 100%;" name="usertype" id="usertype">
                            <option value="">Select Your User Type</option>
                            <option value="1">Admin</option>
                            <option value="2">User</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="designation">Designation<span class="text-danger">*</span></label>
                        <input name="designation" type="text" class="form-control" id="designation"
                            placeholder="Enter Designation">
                    </div>
                </div>
               
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Pradesh<span class="text-danger">*</span></label>
                        <select class="form-control select2bs4" style="width: 100%;" id="pradesh" name="pradesh">
                            <option value="">Select Pradesh</option>
                            @if (isset($pradeshValues))
                                @foreach ($pradeshValues as $key => $list)
                                    <option value="{{ $list }}">
                                        {{ $list }}
                                    </option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Sambhag<span class="text-danger">*</span></label>
                        <select class="form-control select2bs4" style="width: 100%;" name="sambhag" id="sambhag">

                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Zila<span class="text-danger">*</span></label>
                        <select class="form-control select2bs4" style="width: 100%;" name="zila" id="zila">

                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="booth_no">Booth Number<span class="text-danger">*</span></label>
                            <select class="form-control select2bs4" style="width: 100%;" name="booth" id="booth">
                            </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Vidhan Sabha Name<span class="text-danger">*</span></label>
                        <select class="form-control select2bs4" style="width: 100%;" name="vidhan" id="vidhan">

                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Mandal Name<span class="text-danger">*</span></label>
                        <select class="form-control select2bs4" style="width: 100%;" name="mandal_name"
                            id="mandal_name">

                        </select>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button onclick="" name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</form>
<script>
    $(function() {
        $('#addUser').validate({
            rules: {
                email: {
                    required: true
                },
                name: {
                    required: true
                },
                password: {
                    required: true
                },
                usertype: {
                    required: true
                },
                phone: {
                    required: true
                },
                designation: {
                    required: true
                },
                booth: {
                    required: true
                },
                mandal_name: {
                    required: true
                },
                vidhan: {
                    required: true
                },
                zila: {
                    required: true
                },
                sambhag: {
                    required: true
                },
                pradesh: {
                    required: true
                },
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    });
</script>

<script>
    $(function() {
        $('.select2').select2()
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
        $('.select2bs4Edit').select2({
            theme: 'bootstrap4'
        })
        $('.select2bs4Create').select2({
            theme: 'bootstrap4'
        })
    });
</script>

<script>
    $("#pradesh").change(function() {
        var pradesh_val = $(this).val();
        pradesh_ajax(pradesh_val);

        function pradesh_ajax(pradesh_val) {
            $.ajax({
                url: "{{ route('sambhag') }}",
                type: "post",
                data: {
                    "_token": "{{ csrf_token() }}",
                    pradesh_val: pradesh_val,
                },
                success: function(response) {
                    $("#sambhag").empty();
                    $('#sambhag').append($('<option value="' + '">' +
                        ' Select Sambhag ' +
                        '</option>'));
                    for (val in response) {
                        var newOption = $('<option value="' + response[val]['sambhag'] + '">' +
                            response[val]['sambhag'] + '</option>');
                        $('#sambhag').append(newOption);
                    }
                },
            });
        }
    });
</script>

<script>
    $('#sambhag').on('change', function() {
        var sambhag_val = $(this).val();
        sambhag_ajax(sambhag_val);
    });

    function sambhag_ajax(sambhag_val) {
        $.ajax({
            url: "{{ route('zila') }}",
            type: "post",
            data: {
                "_token": "{{ csrf_token() }}",
                sambhag_val: sambhag_val,
            },
            success: function(response) {
                $("#zila").empty();
                $('#zila').append($('<option value="">Select Zila</option>'));
                for (var val in response) {
                    var newOption = $('<option value="' + response[val]['zila'] + '">' +
                        response[val]['zila'] + '</option>');
                    $('#zila').append(newOption);
                }
            },
        });
    }
</script>

<script>
    $('#zila').on('change', function() {
        var zila_val = $(this).val();
        zila_ajax(zila_val);
    });

    function zila_ajax(zila_val) {
        $.ajax({
            url: "{{ route('booth') }}",
            type: "post",
            data: {
                "_token": "{{ csrf_token() }}",
                zila_val: zila_val,
            },
            success: function(response) {
                $("#booth").empty();
                $('#booth').append($('<option value="">Select Booth No</option>'));
                for (var val in response) {
                    var newOption = $('<option value="' + response[val]['booth'] + '">' +
                        response[val]['booth'] + '</option>');
                    $('#booth').append(newOption);
                }
            },
        });
    }
</script>

<script>
    $('#booth').on('change', function() {
        var booth_val = $(this).val();
        booth_ajax(booth_val);
    });

    function booth_ajax(booth_val) {
        $.ajax({
            url: "{{ route('vidhan') }}",
            type: "post",
            data: {
                "_token": "{{ csrf_token() }}",
                booth_val: booth_val,
            },
            success: function(response) {
                $("#vidhan").empty();
                $('#vidhan').append($('<option value="">Select Vidhan Sabha</option>'));
                for (var val in response) {
                    var newOption = $('<option value="' + response[val]['vidhan'] + '">' +
                        response[val]['vidhan'] + '</option>');
                    $('#vidhan').append(newOption);
                }
            },
        });
    }
</script>

<script>
    $('#vidhan').on('change', function() {
        var vidhan_val = $(this).val();
        vidhan_ajax(vidhan_val);
    });

    function vidhan_ajax(vidhan_val) {
        $.ajax({
            url: "{{ route('mandal') }}",
            type: "post",
            data: {
                "_token": "{{ csrf_token() }}",
                vidhan_val: vidhan_val,
            },
            success: function(response) {
                $("#mandal_name").empty();
                $('#mandal_name').append($('<option value="">Select Mandal Name</option>'));
                for (var val in response) {
                    var newOption = $('<option value="' + response[val]['mandal_name'] + '">' +
                        response[val]['mandal_name'] + '</option>');
                    $('#mandal_name').append(newOption);
                }
            },
        });
    }
</script>
