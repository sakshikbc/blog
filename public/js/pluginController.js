

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

