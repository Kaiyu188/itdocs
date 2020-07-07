@extends('backend.master.master')
@section('title','Chỉnh sửa tin')
@section('main')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Bài viết</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Sửa bài viết</div>
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Tiêu đề</label>
										<input required type="text" name="title" class="form-control" value="{{$news->news_title}}">
									</div>
									<div class="form-group" >
										<label>Tóm tắt</label>
										<input required type="text" name="summary" class="form-control" value="{{$news->news_summary}}">
									</div>
									<div class="form-group" >
										<label>Ảnh bìa</label>
										<input id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="{{asset('libs/storage/app/avatar/'. $news->news_img)}}">
									</div>
									<div class="form-group" >
										<label>Miêu tả</label>
										<textarea id="full-featured-non-premium" required name="content">{{$news->news_content}}</textarea>
										<script type="text/javascript">
    
											tinymce.init({
											  selector: 'textarea#full-featured-non-premium',
											  plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
											  imagetools_cors_hosts: ['picsum.photos'],
											  menubar: 'file edit view insert format tools table help',
											  toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
											  toolbar_sticky: true,
											  autosave_ask_before_unload: true,
											  autosave_interval: "30s",
											  autosave_prefix: "{path}{query}-{id}-",
											  autosave_restore_when_empty: false,
											  autosave_retention: "2m",
											  image_advtab: true,
											//   content_css: '//www.tiny.cloud/css/codepen.min.css',
											//   link_list: [
											//     { title: 'My page 1', value: 'http://www.tinymce.com' },
											//     { title: 'My page 2', value: 'http://www.moxiecode.com' }
											//   ],
											//   image_list: [
											//     { title: 'My page 1', value: 'http://www.tinymce.com' },
											//     { title: 'My page 2', value: 'http://www.moxiecode.com' }
											//   ],
											//   image_class_list: [
											//     { title: 'None', value: '' },
											//     { title: 'Some class', value: 'class-name' }
											//   ],
											  importcss_append: true,
											  height: 400,
											//   file_picker_callback: function (callback, value, meta) {
											//     /* Provide file and text for the link dialog */
											//     if (meta.filetype === 'file') {
											//       callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
											//     }
											
											//     /* Provide image and alt text for the image dialog */
											//     if (meta.filetype === 'image') {
											//       callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
											//     }
											
											//     /* Provide alternative source and posted for the media dialog */
											//     if (meta.filetype === 'media') {
											//       callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
											//     }
											//   },
											  templates: [
													{ title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
												{ title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
												{ title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
											  ],
											  template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
											  template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
											  height: 600,
											  image_caption: true,
											  quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
											  noneditable_noneditable_class: "mceNonEditable",
											  toolbar_mode: 'sliding',
											  contextmenu: "link image imagetools table",
											 });
											
											
											  </script>
									</div>
									<div class="form-group" >
										<label>Danh mục</label>
										<select required name="type" class="form-control">
											@foreach ($newstypelist as $type)
												<option value="{{$type->type_id}}" @if ($news->news_type == $type->type_id)
													selected
												@endif>{{$type->type_name}}</option>
											@endforeach
					                    </select>
									</div>
									<div class="form-group" >
										<label>Tin nỗi bật/thường</label><br>
										Thường: <input type="radio" name="featured" value="1" @if ($news->news_feature == 1)
											checked
										@endif>
										Nỗi bật: <input type="radio" name="featured" value="0" @if ($news->news_feature == 0)
											checked
										@endif>
									</div>
									<input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
									<a href="{{asset('admin/news')}}" class="btn btn-danger">Hủy bỏ</a>
								</div>
							</div>
							@include('errors.note')
							{{ csrf_field() }}
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@endsection
	
	
