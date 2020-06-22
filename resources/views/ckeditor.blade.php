<!DOCTYPE html>
<html>
<head>
    <title>Laravel 7 Ckeditor Image Upload Example</title>
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
</head>
<body>
  
<h1>Laravel 7 Ckeditor Image Upload Example</h1>
<textarea name="editor1"></textarea>
<script type="text/javascript">
    CKEDITOR.replace('editor1', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>
</body>
</html>