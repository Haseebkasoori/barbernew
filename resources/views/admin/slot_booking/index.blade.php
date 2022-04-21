@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="myTable" class="table w-100">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Service Name</th>
                                <th>Saloon Name</th>
                                <th>Manager's Name</th>
                                <th>Price</th>
                                <th>Payment of Status</th>
                                <th>Date</th>
                                <th>Booking Created</th>
                                <th>To time</th>
                                <th>From Time</th>
                                <th>@lang('app.action')</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($slot_booking as $Booking)

                            <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $Booking->availability->service_name }}</td>
                                    <td>{{ $Booking->saloon->name }}</td>
                                    <td>{{ $Booking->saloon->manager_name }}</td>
                                    <td>{{ $Booking->availability->price }}</td>
                                    <td>@if($Booking->payment == 1)<i class="fa fa-check-square-o"></i><span class="bg-success text-white"> Clear</span> @elseif($Booking->payment == 0)<i class ="fa fa-hourglass-1"></i>  <span class="bg-warning text-white"> Pending</span> @endif</td>
                                    <td>{{ $Booking->availability->date }}</td>
                                    <td>{{ $Booking->availability->created_at }}</td>
                                    <td>{{ $Booking->availability->to_time }}</td>
                                    <td>{{ $Booking->availability->from_time}}</td>
                                    <td>
                                    <a href="javascript:;" class="btn btn-danger btn-circle delete-row" data-toggle="tooltip" data-row-id="{{$Booking->id}}" data-original-title="'.__('app.delete').'"><i class="fa fa-times" aria-hidden="true"></i></a>
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
@endsection

@push('footer-js')
    <script>
        $(document).ready(function() {
            var table = $('#myTable').dataTable({
                // responsive: true,
                // processing: true,
                // serverSide: true,
                // ajax: '{!! route('admin.employee.index') !!}',
                // language: {
                //     "url": "<?php echo __("app.datatable") ?>"
                // },
                // "fnDrawCallback": function( oSettings ) {
                //     $("body").tooltip({
                //         selector: '[data-toggle="tooltip"]'
                //     });
                //     $('.role_id').select2({
                //         width: '100%'
                //     });
                // },
                // columns: [
                //     { data: 'DT_RowIndex'},
                //     { data: 'image', name: 'image' },
                //     { data: 'name', name: 'name' },
                //     { data: 'group_id', name: 'group_id' },
                //     { data: 'role_name', name: 'role_name' },
                //     { data: 'action', name: 'action', width: '20%' }
                // ]
            });
            // new $.fn.dataTable.FixedHeader( table );

            $('body').on('change', '.role_id', function () {
                const user_id = $(this).data('user-id');
                const role_id = $(this).val();

                $.easyAjax({
                    url: '{{ route('admin.employee.changeRole') }}',
                    type: 'POST',
                    data: { _token: '{{ csrf_token() }}', user_id, role_id },
                    container: '#myTable',
                    success: function (response) {
                        if (response.status === 'success') {
                            table.fnDraw();
                        }
                    }
                })
            })

            $('body').on('click', '.delete-row', function(){
                var id = $(this).data('row-id');
                // alert(id);
                swal({
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    title: "@lang('errors.areYouSure')",
                    text: "@lang('errors.deleteWarning')",
                })
                    .then((willDelete) => {
                        if (willDelete) {
                            var url = "{{ route('admin.slot_booking.destroy',':id') }}";
                            url = url.replace(':id', id);

                            var token = "{{ csrf_token() }}";

                            $.easyAjax({
                                type: 'POST',
                                url: url,
                                data: {'_token': token, '_method': 'DELETE'},
                                success: function (response) {
                                    if (response.status == "success") {
                                        $.unblockUI();
                                        // swal("Deleted!", response.message, "success");
                                        table._fnDraw();
                                        location.reload(true);
                                    }
                                }
                            });
                        }
                    });
            });
        } );
    </script>
@endpush
