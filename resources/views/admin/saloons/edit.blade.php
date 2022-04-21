@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">@lang('app.edit') @lang('menu.saloon')</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form role="form" id="createForm"  class="ajax-form" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>@lang('app.name')</label>
                                    <input type="text" class="form-control form-control-lg" name="name" value="{{ ucwords($saloon->name) }}">
                                </div>
                                <div class="form-group">
                                    <label>@lang('app.saloon_manager')</label>
                                    <input type="text" class="form-control form-control-lg" name="manager_name" value="{{ $saloon->manager_name }}">
                                </div>
                                <!-- text input -->
                                <div class="form-group">
                                    <label>@lang('app.email')</label>
                                    <input type="email" class="form-control form-control-lg" name="email" value="{{ $saloon->email }}">
                                </div>
                                <div class="form-group">
                                    <label>@lang('app.contact_number')</label>
                                    <input type="text" class="form-control form-control-lg" name="contact" value="{{ $saloon->contact }}">
                                </div>
                                <div class="form-group">
                                    <label>@lang('app.postal_code')</label>
                                    <input type="text" class="form-control form-control-lg" name="postal_code" value="{{ $saloon->postal_code }}">
                                </div>

                                <div class="form-group">
                                    <button type="button" id="save-form" class="btn btn-success btn-light-round"><i
                                                class="fa fa-check"></i> @lang('app.save')</button>
                                </div>

                            </div>
                        </div>

                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection

@push('footer-js')

    <script>
        $('.dropify').dropify({
            messages: {
                default: '@lang("app.dragDrop")',
                replace: '@lang("app.dragDropReplace")',
                remove: '@lang("app.remove")',
                error: '@lang('app.largeFile')'
            }
        });
        $('#save-form').click(function () {

            $.easyAjax({
                url: '{{route('admin.saloon.update', $saloon->id)}}',
                container: '#createForm',
                type: "POST",
                redirect: true,
                file:true
            })
        });


    </script>

@endpush
