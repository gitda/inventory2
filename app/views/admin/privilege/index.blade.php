@extends('templates.master')
@section('title','FAQ / คำถามที่พบบ่อย')

@section('content')

<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<ol class="breadcrumb">
			<li><a href="{{URL::to('admin')}}">Admin</a></li>
			<li><a href="{{URL::to('admin/privilege')}}">สิทธิ์การใช้งานระบบ</a></li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-file-o"></i>
					<span>content-view</span>
				</div>
				<div class="box-icons hide">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					<a class="close-link">
						<i class="fa fa-times"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content">

				<table class="table datatable">
					<tr>
						<td>
							1
						</td>
					</tr>
					<tr>
						<td>
							1
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	

</div>






@stop