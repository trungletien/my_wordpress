<?php


// // Optimize image upload to guarantee that file always is below 1MB
add_filter('wp_generate_attachment_metadata', function ($metadata, $attachment_id) {
    $max_file_size = 524288;
    $file = get_attached_file($attachment_id);
    $type = get_post_mime_type($attachment_id);
    // Target jpeg images
    if (in_array($type, ['image/jpg', 'image/jpeg', 'image/png'])) {
        $original_size = $file_size = filesize($file);
        $quantity = 100;
        $timer = 1;
        while ($file_size > $max_file_size && $timer < 5) {
            $timer++;
            $quantity = $quantity - 10;

            if ($type == 'image/png') {
                $command = "pngquant --strip --force --quality=$quantity-$quantity --output $file $file";
                error_log($command);
                exec($command, $output, $returnCode);
                if ($returnCode === 0) {
                    clearstatcache(true, $file); // Clear file status cache
                    $file_size = filesize($file);
                    $metadata['filesize'] = filesize($file);
                } else {
                    error_log('Error compress png image!');
                    break;
                }
            } else {
                // Reduce more $quality because some large images need to reduce quality so much
                if ($original_size > 10485760) {
                    $quantity = $quantity - ($timer * 5);
                }
                $editor = wp_get_image_editor($file);
                if (!is_wp_error($editor)) {
                    // Set the new image quality
                    $result = $editor->set_quality($quantity);
                    // Re-save the original image file
                    if (!is_wp_error($result)) {
                        $editor->save($file);
                        $file_size = filesize($file);
                        $metadata['filesize'] = filesize($file);
                    } else {
                        error_log($result->get_error_message());
                        break;
                    }
                } else {
                    error_log($editor->get_error_message());
                }
            }
        }
    }

    return $metadata;
}, 10, 2);
