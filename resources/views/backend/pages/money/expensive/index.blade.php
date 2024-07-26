@extends('backend.master')
@section('title', 'Dashboard')
@section('content')
    <div class="content">
        <div class="card card-default border-0 bg-transparent">
            <div class="card-header align-items-center p-0">
                <h2>Expensive Money</h2>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#earn_modal">
                    <i class="mdi mdi-plus mr-1"></i> Add New
                </button>
            </div>
        </div>
        <div class="card card-default">
            <div class="card-header card-header-border-bottom d-flex justify-content-between align-items-center">
                <h2>How to use</h2>
            </div>
            <div class="card-body">
                <div class="mb-5">
                    <table class="table table-bordered table-hover" id="earning">
                        <thead>
                        <tr class="table-row text-center">
                            <th style="width: 80px">#</th>
                            <th>Purpose</th>
                            <th>To</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th style="width: 220px">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="modal fade" id="earn_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <form>
                        <div class="modal-header px-4">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Earning</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body px-4">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="purpose">Purpose</label>
                                        <select class="form-control" id="purpose" name="purpose">
                                            <option value="0" selected disabled>Select Purpose</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="start_date">Form</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                        <span class="input-group-text py-1">
                                            <i class="mdi mdi-pentagon-outline"></i>
                                        </span>
                                            </div>
                                            <input type="text" class="form-control date-range-lg" name="form"
                                                   value="" placeholder="Form" id="form"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="end_date">Date</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                        <span class="input-group-text py-1">
                                            <i class="mdi mdi-calendar-range"></i>
                                        </span>
                                            </div>
                                            <input type="date" class="form-control date-range-lg" name="date" value="" placeholder="Date" id="date"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="start_date">Amount</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend"><span class="input-group-text py-1"><i
                                                        class="mdi mdi-pentagon-outline"></i></span>
                                            </div>
                                            <input type="text" class="form-control date-range-lg" name="amount" value=""
                                                   placeholder="Amount" id="amount"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer border-top-0 px-4 pt-0">
                            <button type="button" class="btn btn-primary btn-pill m-0" id="add_earn">Creat Event</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{--        Edit Events--}}
    </div>
@endsection
@section('script')
    <script>
        toastr.options =
            {
                "closeButton"       : true,
                "newestOnTop"       : true,
                "progressBar"       : true,
                "positionClass"     : "toast-top-right",
                "preventDuplicates" : false,
                "showDuration"      : "900",
                "hideDuration"      : "1000",
                "timeOut"           : "5000",
                "extendedTimeOut"   : "1000",
                "showEasing"        : "swing",
                "hideEasing"        : "linear",
                "className"         : "custom-toastr", // Set your custom CSS class here
                "showMethod"        : "fadeIn",
                "hideMethod"        : "fadeOut"
            }
        $(document).ready(function () {
            tbody();
            add_earn();

            $('.delete').click(function() {
                alert('Test');
                Swal.fire({
                    title: "Are you sure?",
                    text: "You want to delete this record?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#006A50",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, cancel!",
                    allowOutsideClick: false,
                    allowEscapeKey: true,
                    allowEnterKey: true,
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('.delete-form').submit();
                    }
                });
            });

        });
        function add_earn()
        {
            $(document).on('click', '#add_earn', function ()
            {
                let purpose = $('#purpose').val();
                let form = $('#form').val();
                let date = $('#date').val();
                let amount = $('#amount').val();
                $.ajax({
                    url: '',
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        'purpose': purpose,
                        'form': form,
                        'date': date,
                        'amount': amount,
                    },
                    success: function (data)
                    {
                        console.log(data.massage);
                        tbody(); // Refresh the table data
                        clear(); // Clear the form fields
                        toastr.success(data.massage);
                    },
                    error: function (xhr, status, error) {
                        toastr.error(status+"<br>"+error);
                    }
                });
            });
        }
        function tbody() {
            $.ajax({
                url: '',
                type: 'GET',
                success: function (data) {
                    let tableBody = $('#earning tbody');
                    tableBody.empty(); // Clear any existing rows
                    let i = 1;
                    let totalAmount = 0; // Initialize total amount
                    if (data.data != '')
                    {
                        $.each(data.data, function (key, val) {
                            let amount = parseFloat(val.amount); // Parse the amount as a float
                            totalAmount += amount; // Add the current amount to the total

                            let purpose = '';
                            if (val.purpose == 1)
                            {
                                purpose = 'Salary';
                            }else if(val.purpose == 2)
                            {
                                purpose='Loan';
                            }

                            let row =
                                '<tr class="text-center">' +
                                '<td>' + i + '</td>' +
                                '<td>' + purpose + '</td>' +
                                '<td>' + val.form + '</td>' +
                                '<td>' + val.date + '</td>' +
                                '<td class="text-right">' + amount.toFixed(2) + '</td>' + // Format amount to 2 decimal places
                                '<td>' +
                                '<a class="btn btn-info p-2">' +
                                '<i class="mdi mdi-content-save-edit-outline"></i></a>&nbsp;||&nbsp;' +
                                '<a class="btn btn-danger delete p-2"><i class="mdi mdi-trash-can-outline"></i></a>' +
                                '</td>' +
                                '</tr>';
                            tableBody.append(row);
                            i++;
                        });
                    }else {
                        tableBody.append('<tr>'+
                            '<td colspan="6" class="text-center text-danger">No data found</td></tr>'
                        );
                    }

                    // Append the total amount row
                    tableBody.append(
                        '<tr>' +
                        '<td colspan="4" class="text-right text-black font-weight-bold">Total</td>' +
                        '<td class="text-right text-black font-weight-bold">' + totalAmount.toFixed(2) + '</td>' +
                        '<td>&nbsp;</td>' +
                        '</tr>'
                    );
                },
                error: function (xhr, status, error) {
                    console.error('Error:' + error);
                }
            }); //ajax end
        } //tbody function end

        function clear() {
            $('#purpose').val(0);
            $('#form').val('');
            $('#date').val('');
            $('#amount').val('');
        }
    </script>



@endsection
