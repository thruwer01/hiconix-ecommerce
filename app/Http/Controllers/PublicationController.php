<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function getGroupRu($group)
    {
        if ($group === "news") $groupNameRu = 'Новости';
        if ($group == 'articles') $groupNameRu = 'Статьи';
        if ($group == 'video') $groupNameRu = 'Видео';
        if ($group == 'actions') $groupNameRu = 'Акции';

        return $groupNameRu ?: null;
    }

    public function index($group, $code)
    {
        $news = News::where('code', $code)->get()->first();

        $groupNameRu = $this->getGroupRu($group);
        $date = $news->date;
        $title = $news->h1;
        $content = htmlspecialchars_decode($news->html);
        $banner_img = $news->content_img;

        return view('pages.publications.article', compact('banner_img','title', 'content', 'date', 'group', 'groupNameRu'));
    }
    
    public function all()
    {
        $all = News::orderBy('date', 'DESC')->where('is_active', true)->paginate(15);
        
        $title = "Все публикации";

        return view('pages.publications.all', compact('title', 'all'));
    }

    public function group($group)
    {
        $groupNews = News::where('group', $group)->orderBy('date', 'DESC')->where('is_active', true)->paginate(15);
        $groupNameRu = $this->getGroupRu($group);
        
        $title = $groupNameRu . " компании Хиконикс";

        return view('pages.publications.group', compact('title', 'group', 'groupNameRu', 'groupNews'));
    }
}
