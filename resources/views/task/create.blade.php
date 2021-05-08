@extends('layouts.master')
@section('title','اضافه کردن رویداد')
  @section('content')
    <div class="container">
        <div class="table-wrapper">
            <div class="p-3 bg-warning m-3 table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2 style="color:red">ایجاد <b>رویداد</b></h2>
                    </div>
                    <div class="col-sm-6">
						<a href="{{route('task.index')}}" class="btn btn-success" ><i class="material-icons">&#xf1e6;</i> <span>بازگشت</span></a>						
					</div>
                </div>
            </div>
@include('layouts.partials.error')
            <form action="{{route('task.store')}}" method="POST">
                @csrf
        		<div class="header-title">						
						<h4>اضافه کردن رویداد جدید</h4>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<strong>عنوان</strong>
							<input type="text" name="title" class="form-control" >
						</div>
					</div>
					<div class="modal-footer">
						<input type="reset" class="btn btn-danger" value="پاک کردن فرم">
						<input type="submit" class="btn btn-success" value="اضافه کردن">
					</div>
				</form>
        </div>
    </div>
@endsection