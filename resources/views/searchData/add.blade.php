<form action="{{ route('search.postadd') }}" method="post" id="addUser" enctype="multipart/form-data">
    @csrf
    <div class="card card-primary card-outline">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Name<span class="text-danger">*</span></label>
                        <input name="name" type="name" class="form-control" id="name"
                            placeholder="Enter Name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="father_name">Fathers Name<span class="text-danger">*</span></label>
                        <input name="father_name" type="name" class="form-control" id="father_name"
                            placeholder="Enter Father's Name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="age">Age<span class="text-danger">*</span></label>
                        <input name="age" type="name" class="form-control" id="age"
                            placeholder="Enter Age">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Sex<span class="text-danger">*</span></label>
                        <select class="form-control select2bs4" style="width: 100%;" name="sex" id="sex">
                            <option value="">Select Sex</option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>
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
                        <label for="email">Email</label>
                        <input name="email" type="email" class="form-control" id="email"
                            placeholder="Enter Email">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="dob">DOB<span class="text-danger">*</span></label>
                        <div class="input-group date"  data-target-input="nearest">
                            <input type="text" id="dob" name="dob" class="form-control datetimepicker-input" data-target="#dob"/>
                            <div class="input-group-append" data-target="#dob" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="address">Address<span class="text-danger">*</span></label>
                        <textarea name="address" row="1" type="text" class="form-control" id="address" placeholder="Enter Address"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">State<span class="text-danger">*</span></label>
                        <select class="form-control select2bs4" style="width: 100%;" id="pradesh" name="pradesh">
                            <option value="">Select State</option>
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
                        <label for="email">District<span class="text-danger">*</span></label>
                        <select class="form-control select2bs4" style="width: 100%;" name="zila" id="zila">
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pincode">Pincode<span class="text-danger">*</span></label>
                        <input name="pincode" type="text" class="form-control" id="pincode"
                            placeholder="Enter Pincode">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="gov_id_no">Govt. ID number<span class="text-danger">*</span></label>
                        <input name="gov_id_no" type="text" class="form-control" id="gov_id_no"
                            placeholder="Enter Govt. ID number">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Govt. ID Type<span class="text-danger">*</span></label>
                        <select class="form-control select2bs4" style="width: 100%;" name="gov_id_type" id="gov_id_type">
                            <option value="">Select User Govt. ID Type</option>
                            <option value="Voter ID">Voter ID</option>
                            <option value="Aadhar Card">Aadhar Card</option>
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
                name: {
                    required: true
                },
                father_name: {
                    required: true
                },
                sex: {
                    required: true
                },
                age: {
                    required: true
                },
                dob: {
                    required: true
                },
                address: {
                    required: true
                },
                pincode: {
                    required: true
                },
                gov_id_no: {
                    required: true
                },
                gov_id_type: {
                    required: true
                },
                zila: {
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
        $('#dob').datetimepicker({
        format: 'L'
    });
    });

</script>

<script>
    $("#pradesh").change(function() {
        var pradesh_val = $(this).val();
        pradesh_ajax(pradesh_val);

        function pradesh_ajax(pradesh_val) {
            $.ajax({
                url: "{{ route('district') }}",
                type: "post",
                data: {
                    "_token": "{{ csrf_token() }}",
                    pradesh_val: pradesh_val,
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
    });
</script>


