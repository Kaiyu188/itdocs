@extends('backend.master.master')
@section('title','Quản trị tin')
@section('main')
	{{-- <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main"> --}}
		<div class="main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Bài viết</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách bài viết</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{asset('admin/post/add')}}" class="btn btn-primary">Thêm bài viết</a>
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th width="2%">Id</th>
											<th width="15%">Tiêu đề</th>
											<th width="15%">Tóm tắt</th>
											<th width="15%">Ảnh bìa</th>
											<th width="5%">Tin nỗi bật/thường</th>
											<th width="7%">Ngày đăng</th>
											{{-- <th width="2%">Số lần xem</th> --}}
											<th width="17%">Nội dung</th>
											<th>Thuộc danh mục</th>
											<th>Thuộc thể loại</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
									@foreach ($newslist ?? '' as $news)
										<tr>
											<td>{{$news->news_id}}</td>
											<td>{{$news->news_title}}</td>
											<td>{{$news->news_summary}}</td>
											<td>
												<img width="200px" src="{{asset('libs/storage/app/avatar/'. $news->news_img)}}" class="thumbnail">
											</td>
											<td>{{$news->news_feature}}</td>
											<td>{{$news->news_date}}</td>
											{{-- <td>{{$news->news_solanxem}}</td> --}}
											<td>{!! $news->news_content !!}</td>
											{{-- <td>{{$news->type_name}}</td>
											<td>{{$news->cate_name}}</td> --}}
											<td>
												<a href="{{asset('admin/post/edit/'. $news->news_id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a href="{{asset('admin/post/delete/'. $news->news_id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>
										</tr>
									@endforeach
									</tbody>
								</table>							
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@endsection
	
