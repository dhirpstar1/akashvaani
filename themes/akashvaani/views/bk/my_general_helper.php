<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//ini_set('display_errors', 'On');
function get_category_name($catid)
{
    return CI::db()->where('id', $catid)->get('categories')->row()->name;
}

  function resizedUrl($file, $width, $height, $quality = 100){
        # We define the image dir include Theme support
        $imageDir = FCPATH.'uploads/images/caches/';
		
		$file = str_replace(base_url(), '', $file);
				
        # We find the right file
        $pathinfo   = pathinfo(trim($file, '/'));
	
        $file       = FCPATH . trim($file, '/');
		
        $output     = $pathinfo['filename'] . '_' . $width . 'x' . $height . '.' . $pathinfo['extension'];

        if (!file_exists($imageDir . $output)) {

            # Setting defaults and meta
            $info                         = getimagesize($file);
            list($width_old, $height_old) = $info;

            # Create image ressource
            switch ( $info[2] ) {
                case IMAGETYPE_GIF:   $image = imagecreatefromgif($file);   break;
                case IMAGETYPE_JPEG:  $image = imagecreatefromjpeg($file);  break;
                case IMAGETYPE_PNG:   $image = imagecreatefrompng($file);   break;
                default: return false;
            }

            # We find the right ratio to resize the image before cropping
            $heightRatio = $height_old / $height;
            $widthRatio  = $width_old /  $width;

            $optimalRatio = $widthRatio;
            if ($heightRatio < $widthRatio) {
                $optimalRatio = $heightRatio;
            }
            $height_crop = ($height_old / $optimalRatio);
            $width_crop  = ($width_old  / $optimalRatio);

            # The two image ressources needed (image resized with the good aspect ratio, and the one with the exact good dimensions)
            $image_crop = imagecreatetruecolor( $width_crop, $height_crop );
            $image_resized = imagecreatetruecolor($width, $height);

            # This is the resizing/resampling/transparency-preserving magic
            if ( ($info[2] == IMAGETYPE_GIF) || ($info[2] == IMAGETYPE_PNG) ) {
                $transparency = imagecolortransparent($image);
                if ($transparency >= 0) {
                    $transparent_color  = imagecolorsforindex($image, $trnprt_indx);
                    $transparency       = imagecolorallocate($image_crop, $trnprt_color['red'], $trnprt_color['green'], $trnprt_color['blue']);
                    imagefill($image_crop, 0, 0, $transparency);
                    imagecolortransparent($image_crop, $transparency);
                    imagefill($image_resized, 0, 0, $transparency);
                    imagecolortransparent($image_resized, $transparency);
                }elseif ($info[2] == IMAGETYPE_PNG) {
                    imagealphablending($image_crop, false);
                    imagealphablending($image_resized, false);
                    $color = imagecolorallocatealpha($image_crop, 0, 0, 0, 127);
                    imagefill($image_crop, 0, 0, $color);
                    imagesavealpha($image_crop, true);
                    imagefill($image_resized, 0, 0, $color);
                    imagesavealpha($image_resized, true);
                }
            }

            imagecopyresampled($image_crop, $image, 0, 0, 0, 0, $width_crop, $height_crop, $width_old, $height_old);
            imagecopyresampled($image_resized, $image_crop, 0, 0, ($width_crop - $width) / 2, ($height_crop - $height) / 2, $width, $height, $width, $height);


            # Writing image according to type to the output destination and image quality
            switch ( $info[2] ) {
              case IMAGETYPE_GIF:   imagegif($image_resized, $imageDir . $output, $quality);    break;
              case IMAGETYPE_JPEG:  imagejpeg($image_resized, $imageDir . $output, $quality);   break;
              case IMAGETYPE_PNG:   imagepng($image_resized, $imageDir . $output, 9);    break;
              default: return false;
            }
        }
        return base_url('uploads/images/caches/'.$output);
}

function selectoption($function, $start=0, $end=0) {

$returns ='';

        switch ($function) {
             case 'monthselect':   
             case 'girlmonthselect': 
                $short = array(
                  'Jan', 
                  'Feb', 
                  'Mar', 
                  'Apr', 
                  'May', 
                  'Jun', 
                  'Jul', 
                  'Aug', 
                  'Sep', 
                  'Oct', 
                  'Nov', 
                  'Dec'
                );      
                foreach ( $short as $key => $value  ) {
                    $returns .= '<a id="'.sprintf("%02d", ($key+1)).'" class="dropdown-item waves-effect waves-light" onClick="'.$function.'(this.id)">'.$value.'</a>';
                }                
             break;
             case 'yearselect':   
             case 'girlyearselect': 

              for($i = $start ; $i <= date('Y'); $i++){
                       $returns []= '<a id="'.$i.'" class="dropdown-item waves-effect waves-light" onClick="'.$function.'(this.id)">'.$i.'</a>';
                    }

            $returns = implode('', array_reverse($returns));
             break;       
            default:
            while( $start <= $end) {
            $returns .= '<a id="'.sprintf("%02d", $start).'" class="dropdown-item waves-effect waves-light" onClick="'.$function.'(this.id)">'.sprintf("%02d", $start).'</a>';
             $start++;
            }
        }

        
        
        return $returns;
}


function get_key_data($key, $location='IN', $opt=false) {

    $ci=& get_instance();
    $ci->load->database();
    $ci->db->select('constant_key, constant_value, constant_optional_value');
    $ci->db->where('constant_key', $key);
    $ci->db->where('constant_location', $location);
    if($opt){
      return $ci->db->get('constants')->row()->constant_optional_value;
    }else{
      return $ci->db->get('constants')->row()->constant_value;
    }
}
function get_currency() {
    return (\CI::session()->userdata('country_code') == 'US') ? "$" : "INR";
  }