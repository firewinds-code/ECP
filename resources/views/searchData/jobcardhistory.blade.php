<style>
    table {
        border-collapse: collapse;
    }

    .center-button {
        text-align: center;
    }
</style>

<meta name="csrf-token" content="{{ csrf_token() }}">

<p style="text-align: center; font-size: 18px; padding: 8px;">PERSON DETAILS : @isset($records->gov_id_no)
        {{ $records->gov_id_no }}
    @endisset
</p>
<form id="details" method="post" action="{{ url('saveDetails') }}">
    @csrf
    <table class="table">
        <tbody>
            <tr>
                <td><b>Govt. ID Type</b></td>
                <td>
                    @isset($records->gov_id_type)
                        {{ $records->gov_id_type }}
                    @endisset
                </td>
                <td><b>Govt. ID Number</b></td>
                <td> @isset($records->gov_id_no)
                        {{ $records->gov_id_no }}
                    @endisset
                </td>
            </tr>
            <tr>
                <td><b>Name</b></td>
                <td> @isset($records->name)
                        {{ $records->name }}
                    @endisset
                </td>
                <td><b>DOB</b></td>
                <td>
                    @isset($records->dob)
                        {{ $records->dob }}
                    @endisset
                </td>
            </tr>
            <tr>
                <td><b>Sex</b></td>
                <td> @isset($records->sex)
                        {{ $records->sex }}
                    @endisset
                </td>
                <td><b>Age</b></td>
                <td>
                    @isset($records->age)
                        {{ $records->age }}
                    @endisset
                </td>
            </tr>

            <tr>
                <td><b>Father's Name</b></td>
                <td>
                    @isset($records->father_name)
                        {{ $records->father_name }}
                    @endisset
                </td>
                <td><b>Mobile No.</b></td>
                <td>
                    @if (empty($records->phone))
                        <input type="text" name="phone" placeholder="Enter Mobile No.">
                    @else
                        <input type="text" name="phone" value="{{ $records->phone }}">
                    @endif
                </td>
            </tr>
            <tr>
                <td><b>Email</b></td>
                <td>
                    @if (empty($records->email))
                        <input type="email" name="email" placeholder="Enter Email">
                    @else
                        <input type="email" name="email" value="{{ $records->email }}">
                    @endif
                </td>
                <td><b>Vidhan Sabha</b></td>
                <td>
                    @isset($records->vidhan_sabha)
                        {{ $records->vidhan_sabha }}
                    @endisset
                </td>
            </tr>

            <tr>
                <td><b>Address</b></td>
                <td> @isset($records->address)
                        {{ $records->address }}
                    @endisset
                </td>
                <td><b>District</b></td>
                <td> @isset($records->district)
                        {{ $records->district }}
                    @endisset </td>
            </tr>
            <tr>
                <td><b>State</b></td>
                <td>
                    @isset($records->state)
                        {{ $records->state }}
                    @endisset
                </td>
                <td><b>Pincode</b></td>
                <td>
                    @isset($records->pincode)
                        {{ $records->pincode }}
                    @endisset
                </td>
            </tr>
        </tbody>
    </table>
    <div class="center-button">
        <button type="button" onclick="saveChanges('{{ $records->gov_id_no }}')" class="btn btn-primary rounded">Save
            Changes</button>
        <a href="#" onclick="printDiv('ticketDataPDf','{{ $records->gov_id_no }}')"
            class="btn btn-primary rounded">Print</a>
    </div>
</form>


<script>
    function saveChanges(govId) {
        var phoneValue = document.getElementsByName('phone')[0].value;
        var emailValue = document.getElementsByName('email')[0].value;

        // Fetch the CSRF token from the meta tag
        var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        $.ajax({
            type: "post",
            url: "{{ route('saveDetails') }}",
            data: {
                "_token": csrfToken,
                "govId": govId,
                "phoneValue": phoneValue,
                "emailValue": emailValue
            },
            success: function(response,message) {
                toastr.success(response.message, "Success", {
                    toastClass: "toast-success",
                    progressBar: true
                });
            },
            error: function(response, message) {
                toastr.error(response.message, "Error", {
                        toastClass: "toast-error",
                        progressBar: true
                    });
            }
        });
    }
</script>
