<?php
    include_once("../includes/header.php");
?>

<!-- CKEditor -->
<script src="ckeditor/ckeditor.js"></script>

<!-- CKFinder -->
<script src="ckfinder/ckfinder.js"></script>

<!-- Área de edição -->
<textarea name="editor1" id="editor1"></textarea>

<script>
    // Inicializa o CKEditor e conecta com o CKFinder
    CKEDITOR.replace('editor1', {
        filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
        filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?type=Images',
        filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
    });
</script>

<?php
    $baseUrl = '/uploads/'; // Caminho onde os arquivos serão salvos
    $baseDir = resolveUrl($baseUrl); // Caminho real no servidor
    
    $config['authentication'] = function () {
        return true; // Coloque uma verificação real depois
    };    
?>