<form action="{{ route('manageuser.update') }}" method="post" id="editUser" enctype="multipart/form-data">
    @csrf
    <div class="card card-primary card-outline">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input name="id_edit" type="hidden" value="{{ $data->id }}" class="form-control"
                            id="id_edit">
                        <label for="email">Email<span class="text-danger">*</span></label>
                        <input name="email" type="email" class="form-control" value="{{ $data->email }}"
                            id="email" placeholder="Enter Email">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Name<span class="text-danger">*</span></label>
                        <input name="name" type="name" class="form-control" value="{{ $data->name }}"
                            id="name" placeholder="Enter Name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="phone">Phone No.<span class="text-danger">*</span></label>
                        <input name="phone" type="tel" class="form-control" id="phone"
                            value="{{ $data->phone }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password">Password<span class="text-danger">*</span></label>
                        <input name="password" type="password" class="form-control" id="password"
                            placeholder="Leave Blank For Old Password">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>User Type<span class="text-danger">*</span></label>
                        <select class="form-control select2bs4" style="width: 100%;" name="usertype" id="usertype">
                            <option value="1" {{ $data->usertype == 1 ? 'selected' : '' }}>Admin</option>
                            <option value="2" {{ $data->usertype == 2 ? 'selected' : '' }}>User</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="designation">Designation<span class="text-danger">*</span></label>
                        <input name="designation" type="text" class="form-control" id="designation"
                            value="{{ $data->designation }}">
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Pradesh<span class="text-danger">*</span></label>
                        <select class="form-control select2bs4" style="width: 100%;" name="pradesh" id="pradesh">
                            @foreach ($pradeshList as $pradeshOption)
                                <option value="{{ $pradeshOption }}" @if ($data->pradesh == $pradeshOption) selected @endif>
                                    {{ $pradeshOption }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Sambhag<span class="text-danger">*</span></label>
                        <select class="form-control select2bs4" style="width: 100%;" name="sambhag" id="sambhag">
                            @foreach ($sambhag as $sambhagOption)
                            <option value="{{ $sambhagOption }}" @if ($data->sambhag == $sambhagOption) selected @endif>
                                {{ $sambhagOption }}
                            </option>
                        @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Zila<span class="text-danger">*</span></label>
                        <select class="form-control select2bs4" style="width: 100%;" name="zila" id="zila">
                            @foreach ($zila as $zilaOption)
                            <option value="{{ $zilaOption }}" @if ($data->zila == $zilaOption) selected @endif>
                                {{ $zilaOption }}
                            </option>
                        @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="booth_no">Booth Number<span class="text-danger">*</span></label>
                        <select class="form-control select2bs4" style="width: 100%;" name="booth" id="booth">
                            @foreach ($booth as $boothOption)
                            <option value="{{ $boothOption }}" @if ($data->booth == $boothOption) selected @endif>
                                {{ $boothOption }}
                            </option>
                        @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Vidhan Sabha Name<span class="text-danger">*</span></label>
                        <select class="form-control select2bs4" style="width: 100%;" name="vidhan" id="vidhan">
                            @foreach ($vidhan as $vidhanOption)
                            <option value="{{ $vidhanOption }}" @if ($data->vidhan == $vidhanOption) selected @endif>
                                {{ $vidhanOption }}
                            </option>
                        @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Mandal Name<span class="text-danger">*</span></label>
                        <select class="form-control select2bs4" style="width: 100%;" name="mandal_name" id="mandal_name">
                            @foreach ($mandal as $mandalOption)
                            <option value="{{ $mandalOption }}" @if ($data->mandal_name == $mandalOption) selected @endif>
                                {{ $mandalOption }}
                            </option>
                        @endforeach
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
        $('#editUser').validate({
            rules: {
                email: {
                    required: true
                },
                name: {
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
                booth_no: {
                    required: true
                },
                mandal_name: {
                    required: true
                },
                vs_name: {
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
