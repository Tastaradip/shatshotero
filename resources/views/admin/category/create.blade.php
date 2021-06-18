@extends('admin.common.master')

@section('content-own')  
    <div class="row align-items-center bg-dark">
        <div class="col-md-12">
            <div class="container-fluid">
                <div class="page-title-box">
                    <h4 class="page-title">{{$title}}</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0);">Shat Shotero</a>
                        </li>
                        <li class="breadcrumb-item">
                                <a href="javascript:void(0);">{{$title}}</a>
                        </li>
                        <li class="breadcrumb-item active">Add</li>
                    </ol>
                </div>
            </div>
        </div>
    </div> 
    <div class="container-fluid">
        <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 col-lg-8 col-sm-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">Add Category</h4>
                            <br><br>
                            <form action="{{route($route.'store')}}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="name" id="example-text-input" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Role</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="role" id="role" required="required">
                                            <option>Select</option>
                                            <option value="main">Main Category</option>
                                            <option value="sub">Sub Category</option>
                                            <option value="child">Child Category</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row" id="main" style="display:none">
                                    <label class="col-sm-2 col-form-label">Main Category</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="mainid">
                                            @foreach($main_categories as $main_cat)
                                            <option value="{{$main_cat->id}}">{{$main_cat->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row" id="sub" style="display: none">
                                    <label class="col-sm-2 col-form-label">Sub Category</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="subid">
                                            @foreach($sub_categories as $sub_cat)
                                            <option value="{{$sub_cat->id}}">{{$sub_cat->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="status">
                                            <option value="1">Active</option>
                                            <option value="0">Inctive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Featured</label>
                                    <div class="col-sm-10" style="padding-top: 10px">
                                        <input type="radio" id="yes" name="featured" value="1">
                                        <label for="yes">Yes</label>
                                        <input type="radio" id="no" name="featured" value="0" style="margin-left: 12px;">
                                        <label for="no">No</label>
                                    </div>
                                </div>
                                <div class="button-items row" style="float:right">
                                    <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
                                    <button type="button" class="btn btn-light waves-effect waves-light">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
                <!-- end col -->
            </div>
            <!-- end row -->

        </div>
        <!-- end container-fluid -->
@endsection


@section('page-js')
<script>
$('#role').on('change',function(){
     var selection = $(this).val();
    switch(selection){
        case "main":
            $("#main").hide();
            $("#sub").hide();
            break;
        case "sub":
            $("#main").show();
            $("#sub").hide();
            break;
        case "child":
            $("#main").show();
            $("#sub").show(); 
            break;
    }
});
</script>
@endsection
