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
                                <th>Saloon Name</th>
                                <th>Manager's Name</th>
                                <th>service Name </th>
                                <th>Date</th>
                                <th>To time</th>
                                <th>From Time</th>
                                <!--<th>@lang('app.action')</th>-->
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($saloon_availability as $availability)
                            <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $availability->saloon->name }}</td>
                                    <td>{{ $availability->saloon->manager_name }}</td>
                                    <td>{{ $availability->service_name }}</td>
                                    <td>{{ $availability->date }}</td>
                                    <td>{{ $availability->to_time }}</td>
                                    <td>{{ $availability->from_time}}</td>
                                    <!--<td>-->
                                    <!--<a href="javascript:;" class="btn btn-danger btn-circle delete-row" data-toggle="tooltip" data-row-id="{{$availability->id}}" data-original-title="'.__('app.delete').'"><i class="fa fa-times" aria-hidden="true"></i></a>-->
                                    <!--</td>-->
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

        } );
    </script>
@endpush
