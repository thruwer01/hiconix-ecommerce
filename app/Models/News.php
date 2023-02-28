<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    public function anonsImage ()
    {
        if ($this->anons_img) {
            return $this->anons_img;
        } else {
            $htmlDom = new \DOMDocument;
            $content = $this->html;
            if ($content) {
                @$htmlDom->loadHTML($content);

                $imageTags = $htmlDom->getElementsByTagName('img');
                $extractedImages = array();
                foreach($imageTags as $imageTag){
                    $extractedImages[] = $imageTag->getAttribute('data-webp-src');
                }
    
                if (count($extractedImages) > 0) {
                    return $extractedImages[0];
                } else {
                    return null;
                }    
            } else {
                return null;
            }
            
        }
    }

    public function getHumanGroup()
    {
        if ($this->group == "actions") {
            return "Акция";
        }
        if ($this->group == "articles") {
            return "Статья";
        }
        if ($this->group == "news") {
            return "Новость";
        }
        if ($this->group == "video") {
            return "Видео";
        }

        return null;
    }
}
