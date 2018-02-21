@extends('layouts.master')

@section('content')
<h2>Create a blog</h2>
<hr>
<form method="POST" action="/posts" enctype="multipart/form-data">
  {{ csrf_field() }}
  @include('layouts.errors')
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" required>

  </div>
  <div class="form-group">
    <label for="body">Body</label>



<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0"/>
   {{-- <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
  tinymce.ini({
    selector:'#myTextarea',
    height: 400,
    plugins: 'code image',
    toolbar: 'undo redo | image code',
    images_upload_url: '/posts',
    images_upload_handler: function(blobInfo, success, failure){
        vax xhr, formData;
        xhr = new XMLHttpRequest();
        xhr.withCredentials = false;
        xhr.open('POST', 'upload.blade.php');

        xhr.onload = function() {
          var json;
          if (xhr.status != 200){
            failure('HTTP Error : ' + xhr.status);
            return;
          }
          json = JSON.parse(xhr.responseText);
          if(!json || typeof json.location != 'string'){
            failure('Invalid JSON: ' + xhr.responseText);
            return;
          }
          success(json.location);
        };
        formData = new FormData();
        formData.append('file', blobInfo.blob(), blobInfo.filename());
        xhr.send(formData);
    }
  });
</script> --}}
<body>
  <div id="editor">
  {{-- 
    <div  style="margin-top: 30px;"> --}}
    <textarea class="form-control" name="body" id='edit'></textarea>

     {{--  <img class="fr-fir fr-dii" src="https://www.froala.com/assets/editor/docs/photo14.jpg" alt="Old Clock" width="200"/>
      <h1>Custom Image Button</h1>

      <p>Click on the image to see the custom image button.</p>

      <p>An example of custom button for the image editing popup. More details about defining a custom image button can be found in the <a href="https://www.froala.com/wysiwyg-editor/docs/concepts/custom/button" title="Custom Button Concept" target="_blank">Custom Button</a> concept.</p>

      <p>After defining custom buttons you need to add them to the image popup buttons list, using the <a href="https://www.froala.com/wysiwyg-editor/docs/options#imageEditButtons" title="imageEditButtons" target="_blank">imageEditButtons</a> option.</p> --}}
    {{-- </div> --}}
  </div>



{{-- <textarea name="content" class="form-control my-editor">{!! old('content', 'test editor content') !!}</textarea> --}}

        {{-- <textarea id="my-editor" name="content" class="form-control">{!! old('content', 'test editor content') !!}</textarea> --}}
    {{-- <textarea class="form-control" id="summary-ckeditor" name="body"></textarea> --}}
  <div class="form-group">
    <input type="file" name="file" accept=".jpg, .png, .jpeg, .pdf, image" multiple="true">
  </div>

  {{-- <textarea id="body" name="body" class="form-control" required></textarea> --}}
  <div class="form-group">
    <label for="title">Meta Keywords</label>
    <input type="text" class="form-control" name="meta_keywords" required>
  </div>
  <div class="form-group">
    <label for="title">Meta Description</label>
    <input type="text" class="form-control" name="meta_desc" required>
  </div>
  <div class="form-group">
    <label for="title">Author Name</label>
    <input type="text" class="form-control" name="author_name" required>
  </div>
   <div class="form-group">
    <label for="title">Seo Title</label>
    <input type="text" class="form-control" name="seo_title" required>
  </div>
   <div class="form-group">
    <label for="title">Url</label>
    <input type="text" class="form-control" name="url" required>
  </div>
   <div class="form-group">
                <label>Post Date</label>
                <input type="date" name="post_date" min="2018-02-10">
              </div>
              <div class="form-group">
                <label>Post Time</label>
                <input type="time" name="post_time" min="00:00">
              </div>

  <button type="submit" class="btn btn-primary">Publish</button>
</form>
{{-- <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
  CKEDITOR.replace( 'summary-ckeditor' );
</script> --}}
{{-- <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
  var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  };
</script>
<script>
CKEDITOR.replace('my-editor', options);
</script> --}}
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
{{-- <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea.my-editor",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media  ",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script>
<script>
$('textarea.my-editor').ckeditor(options);
</script> --}}

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0//js/froala_editor.pkgd.min.js"></script>
<script type="text/javascript">
        function ValidateSize(file) {
            for(var i = 0 ; i<=5; i++){
                var FileSize = file.files[i].size / 1024 / 1024;
                if (FileSize > 2) {
                    alert('File size exceeds 2 MB');
                    $(file).val('');
                } else {

                }
            }
        }
        </script>
<script type="text/javascript">
  $(function(){
  $.FroalaEditor.DefineIcon('imageInfo', {NAME: 'info'});
  $.FroalaEditor.RegisterCommand('imageInfo', {
    title: 'Info',
    focus: false,
    undo: false,
    refreshAfterCallback: false,
    callback: function () {
      var $img = this.image.get();
      alert($img.attr('src'));
    }
  });
  $(function() {
    $('.selector').editable({
      // Set the image upload URL.
      imageUploadURL: '/posts',

      imageUploadParams: {
        id: 'edit'
      }
    })
  });
//   $(function() {
//     $('#edit')
//       .froalaEditor({
//         // Set the save param.
//         saveParam: 'content',
 
//         // Set the save URL.
//         saveURL: 'http://example.com/save',
 
//         // HTTP request type.
//         saveMethod: 'POST',
 
//         // Additional save params.
//         saveParams: {id: 'my_editor'}
//       })
//       .on('froalaEditor.save.before', function (e, editor) {
//         // Before save request is made.
//       })
//       .on('froalaEditor.save.after', function (e, editor, response) {
//         // After successfully save request.
//       })
//       .on('froalaEditor.save.error', function (e, editor, error) {
//         // Do something here.
//       })
//   });
 
//   $('#saveButton').click (function () {
//     $('#myEditor').froalaEditor('save.save')
//   })

  $('#edit').froalaEditor({
    imageEditButtons: ['imageDisplay', 'imageAlign', 'imageInfo', 'imageRemove']
  })
//     $('#edit').froalaEditor({toolbarInline: false})

});
</script>

@endsection

