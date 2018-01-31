<?php

include './config_mysqli.php'; 
function make_thumb($src, $dest, $desired_width,$file_extension) {

    /* read the source image */
    if($file_extension == 'image/jpeg')
    {
        $source_image = imagecreatefromjpeg($src);    
    }
    elseif ($file_extension == "image/png") {
        $source_image = imagecreatefrompng($src);   
    }
    else
    {
        $source_image = imagecreatefromgif($src);
    }
    $width = imagesx($source_image);
    $height = imagesy($source_image);
    
    /* find the "desired height" of this thumbnail, relative to the desired width  */
    $desired_height = floor($height * ($desired_width / $width));
    
    /* create a new, "virtual" image */
    $virtual_image = imagecreatetruecolor($desired_width, $desired_height);
    
    /* copy source image at a resized size */
    imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);
    
    /* create the physical thumbnail image to its destination */
    imagejpeg($virtual_image, $dest);
}

function update_user_details()
{
    global $conn;
    if(isset($_POST['submit']))
    {
    $id = $_POST['id'];    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $mob = $_POST['mob'];
    $dob = $_POST['dob'];


    $file_tmp = $_FILES['update_image']['tmp_name'];
    $file_type = $_FILES['update_image']['type'];
    $file_ext  = strtolower(end(explode('.',$_FILES['update_image']['name'])));
    $image_name = $_FILES['update_image']['name'];
    if (empty($image_name)) {
        $image_name = $_POST['img'];
    }
    // $image_name = uniqid().".".$file_ext;
    $file_dest = "../task1/images/original/".$image_name;
    if(move_uploaded_file($file_tmp,$file_dest))
                    {
                        $file_src = $file_dest;
                        make_thumb($file_src,'../task1/images/100x100/'.$image_name, 100, $file_type);
                        make_thumb($file_src,'../task1/images/600x600/'.$image_name, 600, $file_type);
                        //echo "success";
                    }
                    else
                    {
                        echo "File not uploaded";
                    }
                  
    
    echo $update_user_details = "UPDATE register_user set fname = '{$fname}', lname = '{$lname}', email ='{$email}',mob = '{$mob}', dob = '{$dob}', photo ='{$image_name}' where id = $id";

    $update_exe = mysqli_query($conn,$update_user_details);
    if (!$update_user_details) {
        die("Failed".mysqli_error($conn));
    } else{
        echo "success";
    }
    header('Location:index2.php');
    }
}




?>