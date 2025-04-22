<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CKEditor com CKFinder</title>
    <script src="ckeditor/ckeditor.js"></script>
    <script src="ckfinder/ckfinder.js"></script>
</head>
<body>

    <h2>Editor de Texto com Upload</h2>

    <form action="#" method="post">
        <textarea name="editor1" id="editor1" rows="10" cols="80"></textarea>
    </form>

    <script>
        CKEDITOR.replace('editor1', {
            filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?type=Images',
            filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
        });
    </script>

</body>
</html>