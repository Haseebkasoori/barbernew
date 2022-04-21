@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">@lang('app.add') @lang('menu.saloon')</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form role="form" id="createForm"  class="ajax-form" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>@lang('app.name')</label>
                                    <input type="text" class="form-control form-control-lg" name="name" value="">
                                </div>
                                <div class="form-group">
                                    <label>@lang('app.saloon_manager')</label>
                                    <input type="text" class="form-control form-control-lg" name="manager_name" value="">
                                </div>
                                <!-- text input -->
                                <div class="form-group">
                                    <label>@lang('app.email')</label>
                                    <input type="email" class="form-control form-control-lg" name="email" value="">
                                </div>
                                <div class="form-group">
                                    <label>@lang('app.password')</label>
                                    <input type="password" class="form-control form-control-lg" name="password" value="">
                                </div>
                                <div class="form-group">
                                    <label>@lang('app.city')</label>
                                    <input type="text" class="form-control form-control-lg" name="city" value="">
                                </div>
                                <div class="form-group">
                                    <label>@lang('app.contact')</label>
                                    <input type="text" class="form-control form-control-lg" name="contact" value="">
                                </div>
                                <div class="form-group">
                                    <label>@lang('app.postal_code')</label>
                                    <input type="text" class="form-control form-control-lg" name="postal_code" value="">
                                </div>
                                

                              </select>

                              <!-- <div class="btn-group" role="group" aria-label="Basic example"> -->
                              <!-- <div class="input-group-append"> -->
                                            <!-- <button class="btn btn-primary" id="add-group" type="button"><i class="fa fa-plus"></i> @lang('app.add')</button> -->
                                        <!-- </div> -->
  
                                        <!-- <div class="form-group"> -->
                                                <button type="button" id="save-form" class="btn btn-primary"><i
                                                class="fa fa-check"></i> @lang('app.save')</button>
                                        <!-- </div> -->
</div>
                                        <!-- <div class="input-group-append">
                                            <button class="btn btn-success" id="add-group" type="button"><i class="fa fa-plus"></i> @lang('app.add')</button>
                                        </div> -->
                                    <!-- </div> -->
                                <!-- </div> -->
<!-- 
                                <div class="form-group">
                                    <button type="button" id="save-form" class="btn btn-success btn-light-round"><i
                                                class="fa fa-check"></i> @lang('app.save')</button>
                                </div> -->

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
        $('#add-group').click(function () {
            window.location = '{{ route("admin.employee-group.create") }}';
        })
        $('#save-form').click(function () {

            $.easyAjax({
                url: '{{route('admin.saloon.store')}}',
                container: '#createForm',
                type: "POST",
                redirect: true,
                file:true
            })
        });

    </script>

@endpush
