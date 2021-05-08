{{-- @extends('layouts.master')
  @section('content')
			<div class="modal-content">
            <div class="p-3 bg-warning m-3 table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2 style="color:red">ویرایش <b>اطلاعات</b></h2>
                    </div>
                    <div class="col-sm-6">
						<a href="{{route('task.index')}}" class="btn btn-success" ><i class="material-icons">&#xf1e6;</i> <span>بازگشت</span></a>						
					</div>
                </div>
            </div>
@include('layouts.partials.error')
				<form action="{{route('task.update',$task->id)}}" method="POST" class="edit-form">
                    @csrf
                    @method('PUT')
					<div class="modal-body">					
						<div class="form-group">
							<strong>عنوان</strong>
							<input type="text" name="title" class="form-control" value="{{$task->title}}" required>
						</div>
					</div>
					<div class="modal-footer">
						<input type="reset" class="btn btn-default" data-dismiss="modal" value="Reset">
						<input type="submit" class="btn btn-info" value="Update">
					</div>
				</form>
			</div>
@endsection --}}

@extends('layouts.master')
@section('title','edit tasks')
  @section('content')
    <div class="container">
        <div class="table-wrapper">
            <div class="p-3 bg-warning m-3 table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2 style="color:red">ویرایش <b>رویداد</b></h2>
                    </div>
                    <div class="col-sm-6">
						<a href="{{route('task.index')}}" class="btn btn-success" ><i class="material-icons">&#xf1e6;</i> <span>بازگشت</span></a>						
					</div>
                </div>
            </div>
@include('layouts.partials.error')
            <form action="{{route('task.update',$task->id)}}" method="POST" class="edit-form">
                @csrf
				@method('PUT')
        		<div class="header-title">						
						<h4>ویرایش رویداد های مورد نظر</h4>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<strong>عنوان</strong>
							<input type="text" name="title" class="form-control" value="{{$task->title}}" required>
						</div>
					</div>
					<div class="modal-footer">
						<input type="reset" class="btn btn-danger" value="پاک کردن فرم">
						<input type="submit" class="btn btn-success" value="ویرایش">
					</div>
				</form>
        </div>
    </div>
@endsection