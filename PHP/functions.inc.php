<?php
    function curPageURL() {
        $isHTTPS = (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on");
        $port = (isset($_SERVER["SERVER_PORT"]) && ((!$isHTTPS && $_SERVER["SERVER_PORT"] != "80") || ($isHTTPS && $_SERVER["SERVER_PORT"] != "443")));
        $port = ($port) ? ':'.$_SERVER["SERVER_PORT"] : '';
        $url = ($isHTTPS ? 'https://' : 'http://').$_SERVER["SERVER_NAME"].$port.$_SERVER["REQUEST_URI"];
        return $url;
}
    


    function saveThumb($src, $path, $maxSize) {
        
        $imgsrc = loadImage($src); 
        $width = imagesx($imgsrc);
        $height = imagesy($imgsrc);
        
        if($width > $height) {
            $width_new = $maxSize;
            $height_new = $maxSize/$width*$height; 
        }
        
        if($height > $width) {
            $height_new = $maxSize;
            $width_new = $maxSize/$height*$width;
        }
        
        $thumb = imagecreatetruecolor($width_new, $height_new);
        
        // Transparenz behandeln
        imagesavealpha($thumb, true);
        $trans_color = imagecolorallocatealpha($thumb, 255,255,255,127);
        imagefill($thumb, 0,0, $trans_color);
        
        imagecopyresampled($thumb, $imgsrc, 0,0,0,0, $width_new, $height_new, $width, $height);
        
        imagejpeg($thumb, $path.basename($src));
    }

    function saveWatermark($src, $path, $watermark){
        $imgsrc = loadImage($src);
        $width = imagesx($imgsrc);
        $height = imagesy($imgsrc);
        
        $imgWZ = loadImage($watermark);
        $widthWZ = imagesx($imgWZ);
        $heightWZ = imagesy($imgWZ);
        
        
        //bool imagecopyresampled ( resource $dst_image , resource $src_image , int $dst_x , int $dst_y , int $src_x , int $src_y , int $dst_w , int $dst_h , int $src_w , int $src_h )
        imagecopyresampled($imgsrc, $imgWZ, $width-($widthWZ/4), $height-($heightWZ/4), 0, 0, $widthWZ/4, $heightWZ/4, $widthWZ, $heightWZ);
        imagejpeg($imgsrc, $path.basename($src));
    }

    function loadImage($src) {
        $path_parts = pathinfo($src);
        $ext = strtolower($path_parts['extension']);
        
        if($ext == "jpeg" || $ext == "jpg") $imgsrc = imagecreatefromjpeg($src);
        else if($ext == "png") $imgsrc = imagecreatefrompng($src); 
        else if($ext == "gif") $imgsrc = imagecreatefromgif($src); 
        else $imgsrc = imagecreatefrompng("wasserzeichen.png");
        return $imgsrc;
    }


    function createGalleryPage() {
        $projectId = str_replace(' ', '_', $_POST['projectID']);
        
        // read gallery template to String
        $template = "http://mt141028.students.fhstp.ac.at/semesterprojekt/PHP/gallery-template.txt";
        $templatecode = file_get_contents($template);

        // create new gallery page using the template
        $newPage = fopen("../".$projectId.".php", 'x');
        fwrite($newPage, $templatecode);
        fclose($newPage);
        
    }

?>