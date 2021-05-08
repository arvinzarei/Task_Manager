@extends('layouts.master')
  @section('content')
    <div class="container">
        <div class="table-wrapper">
            <div class="p-3 bg-warning m-3 table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2 style="color:red">لیست <b> رویدادها</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="{{route('task.create')}}" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span> رویداد جدید</span></a>						
					</div>
                </div>
            </div>
 @if($msg = Session::get('success'))
    <div class="alert alert-success">
        <h5 style="text-align: center";>{{ $msg }}</h5>
    </div>
@endif

@include('layouts.partials.error')
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ردیف</th>
                        <th>عنوان</th>
                        <th>تاریخ ایجاد</th>
                        <th>عملیات</th>
                         <th>
							<span class="custom-checkbox">
                                <!-- <input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label> -->
							</span>
						</th> 
                    </tr>
                </thead>
                <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <td>{{ $task['id'] }}</td>
                        <td>{{ $task['title'] }}</td>
                        <td>{{ $task['created_at'] }}</td>
                        <td>
                            <form action="{{route('task.destroy',$task->id)}}" method="POST">
                                <a href="{{route('task.edit',$task->id)}}" class="btn btn-success bg-white" ><i class="material-icons" data-toggle="tooltip" title="ویرایش">&#xe3c9;</i>ویرایش</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger "><i class="material-icons" data-toggle="tooltip" title="حذف">&#xe872;</i> حذف </button> 
                            </form>
                        </td>
                        <td>
							<span class="custom-checkbox">
								<!-- <input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label> -->
							</span>
						</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- End index Page -->
@endsection('content')