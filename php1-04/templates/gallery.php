<?php
//загрузим на страницу то, что уже имеем
  renderGallery();

  echo '<div class="gallery">
          <div class="gallery-wrapper">';
            if($dir = opendir(UPLOADS_DIR_FULL)){
              while($file = readdir($dir)) {
                if(is_dir($file)) {
                  if ($file == "." || $file == "..") continue;
                } else {
                  $src = UPLOADS_DIR."{$file}";
                  $dest = UPLOADS_MIN_DIR."min.{$file}";
                  $width = "200px";
                  $height = "300px";
                  img_resize($src, $dest, $width, $height);
                  echo '<a class="gallery__image-wrapper" href="'.$src.'" target="_blank">
                          <img class="gallery__image-file" src="'.$dest.'" alt="image">
                        </a>';
                }
              }
            };
    echo '</div>';
    include TEMPLATES_DIR . "upload_form.php";
  echo '</div>';
?>