@extends('publishers.main')

@section('title')
	Xóa nhà phát hành
@stop

@section('content')
    <div class="row">
	    <ol class="breadcrumb">
	        <li><a href="{{asset('admin/home')}}"> Trang Chủ</a></li>
	        <li><a href="{{asset('publishers/index')}}"> Nhà phát hành</a></li>
	        @if(empty($publishercheck))
	            <li class="active"> Xóa nhà phát hành</li>
	        @else
	            <li><a href="{{asset('publishers/delete/0')}}"> Xóa nhà phát hành</a></li>
	            <li class="active">{{ $publishercheck->id }}</li>
	        @endif
	    </ol>
		<h2><img src="{{asset('assets/image/icon.png')}}" alt="icon"> Nhà phát hành</h2>
	</div>
	<div class="row"> 
	 	<div class="col-md-12">
			<ul class="nav nav-tabs">
				<li><a href="{{asset('publishers/index')}}">Nhà phát hành</a></li>
			    <li><a href="{{asset('publishers/create')}}">Thêm nhà phát hành</a></li>
				<li><a href="{{asset('publishers/edit/0')}}">Chỉnh sửa nhà phát hành</a></li>
		        <li class="active"><a href="{{asset('publishers/delete/0')}}">Xóa nhà phát hành</a></li>	   
			    <li><a href="{{asset('publishers/show')}}">Thông tin nhà phát hành</a></li>
			</ul>
			<br>
			<div class="panel panel-primary">
		        <div class="panel-heading">
		            <h3 class="panel-title">Xóa Nhà Phát Hành</h3>
		        </div>
				<div class="panel-body">
					<div class="alert alert-info alert-dismissable">
				        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				            <label>Điều khoản sử dụng</label>
				        <ol>
				        	<li>Chọn tên nhà phát hành muốn xóa</li>
				        </ol>     
		        	</div>
			        <div>
			        	<form class="well" href="{{asset('publishers/delete')}}" method="post"> 
							@if ($errors->any())
								<div class='alert alert-danger'>
									<ul>	
										{{ implode('', $errors->all('<li class="error">:message</li>')) }}
									</ul>
								</div>   
							@endif
							@if(Session::has('delete_success'))
					        	<div class="alert alert-success alert-dismissable">
									<label class="success"><span class="glyphicon glyphicon-ok"></span> {{Session::get('delete_success')}}</label>
									{{ Session::forget("delete_success") }}
								</div>
							@endif 
							@if(Session::has('fail'))
		                        <div class="alert alert-danger">
		                            <span class="glyphicon glyphicon-exclamation-sign" style="padding-left:40px"></span> {{Session::get('fail')}}
		                            {{ Session::forget("fail") }}
		                        </div>
		                    @endif 
						   <p>
		                        <label>Tên nhà phát hành</label>
		                        <select name='id' id='id' class='form-control'>
		                        	<option value="0">[ Chọn nhà phát hành ]</option>
		                            @foreach($publishername as $pub)
		                            <option value="{{$pub->id}}" <?php if(!empty($publishercheck)&&($pub->id == $publishercheck->id)) echo "selected='selected'"; ?>>ID: {{$pub->id}} - {{$pub->name}}</option>
		                            @endforeach
		                        </select>
		                    </p>
		                    <p><button class="btn btn-default">Xác nhận</button></p>
						</form>
					</div>
		        </div>
		    </div>
		</div>
	</div>
@stop