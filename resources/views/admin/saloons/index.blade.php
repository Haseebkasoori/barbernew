@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-center justify-content-md-end mb-3">
                        
                        <a href="{{ route('admin.saloon.create') }}" class="btn btn-rounded btn-primary mb-1"><i class="fa fa-plus"></i> @lang('app.createNew')</a>
                    </div>
                    <div class="table-responsive">
                        <table id="myTable" class="table w-100">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>@lang('app.name')</th>
                                <th>Manager's Name</th>
                                <th>E-mail</th>
                                <th>Contact Number</th>
                                <th>Postal Code</th>
                                <th>Status</th>
                                <th>@lang('app.action')</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($saloons as $saloon)
                            <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $saloon->name }}</td>
                                    <td>{{ $saloon->manager_name }}</td>
                                    <td>{{ $saloon->email }}</td>
                                    <td>{{ $saloon->contact }}</td>
                                    <td>{{ $saloon->postal_code}}</td>
                                    <td>{{ $saloon->status }}</td>

                                    <td>
                                    <a href="{{route('admin.saloon.edit', [$saloon->id])}}" class="btn btn-primary btn-circle" data-toggle="tooltip" data-original-title="'.__('app.edit').'"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <a href="javascript:;" class="btn btn-danger btn-circle delete-row" data-toggle="tooltip" data-row-id="{{$saloon->id}}" data-original-title="'.__('app.delete').'"><i class="fa fa-times" aria-hidden="true"></i></a>
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
                            var url = "{{ route('admin.saloon.destroy',':id') }}";
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
