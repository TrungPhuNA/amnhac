<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Menu;
use Illuminate\Http\Request;

class ArticleController extends FrontendController
{
	public function __construct()
	{
		parent::__construct();
	}
	
    // danh sach bai viet
    public function getListArticle()
	{
		$articles = Article::orderBy('id','DESC')->simplePaginate(5);
		$articleHot = Article::where('a_hot',Article::HOT)->get();
		
		return view('article.index',compact('articles','articleHot'));
	}

	public function getListArticleByMenu($slug)
    {
        $menu = Menu::where('m_slug', $slug)->first();
        if (!$menu) return redirect()->to('/');

        $articles = Article::where('a_category_id', $menu->id)->orderBy('id','DESC')->simplePaginate(5);
        $articleHot = Article::where('a_hot',Article::HOT)->get();
        return view('article.index',compact('articles','articleHot'));
    }

    // chi tiet bai viet
	public function getDetailArticle(Request $request)
	{
		$arrayUrl = (preg_split("/(-)/i",$request->segment(2)));
		$id = array_pop($arrayUrl);
		
		if ($id)
		{
			$articleDetail = Article::find($id);
			$articles = Article::orderBy("id","DESC")->paginate(10);
			
			$viewData = [
				'articles'      => $articles,
				'articleDetail' => $articleDetail,
			];
			
			return view('article.detail',$viewData);
		}
		
		return redirect('/');
	}
}
