<!-- jQuery  -->
<script src="{{asset('admin/js/jquery.min.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin/js/metismenu.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('admin/js/waves.min.js')}}"></script>

<!-- Bootsrap Datepicker js-->
<script src="{{asset('admin/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>

<!-- App js -->
<script src="{{asset('admin/js/app.js')}}"></script>

<!-- Toaster -->
<script src="{{asset('backend/js/toastr.min.js')}}"></script>
{!! Toastr::message() !!}
<script type="text/javascript">
	@if($errors->any())
        @foreach($errors->all() as $error)
            toastr["error"]("{{ $error }}");
        @endforeach
    @endif
</script>


