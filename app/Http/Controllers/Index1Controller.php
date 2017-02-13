<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Speciality;
use App\Menus;
use App\Administratia;
class Index1Controller extends Controller
{
   public function index(){
	   $message=Article::select(['id','title','content','author','description','date','image','views','tags'])->get();
           $specialt=Speciality::select(['denumire','nr'])->get();
           $num=0;
           $sidebar=Article::select(['id','title','date','image','description','views'])->orderBy('views','desc')->limit(2)->get();
           $latest_events=Article::select(['id','title','date','image','description','views'])->orderBy('date','desc')->limit(4)->get();
           foreach ($specialt as $total){ $num=$total->nr+$num;   }	   
//dump($num);
	   return view('index')->with(['articles'=>$message,'specialit'=>$specialt,'numar'=>$num,'sidebar'=>$sidebar,'recent_posts'=>$latest_events]);
	   
   }
   
   public function contact(){
       return view('contact');
   }
   public function show(){
       
     $article=Article::select(['id','title','content','author','description','date','image','views','tags'])->get();  
     $sidebar=Article::select(['id','title','date','image','description','views'])->orderBy('views','desc')->limit(3)->get();
     $sideb=Speciality::select(['denumire'])->get();
     return view('events')->with(['articles'=>$article,'sidebar'=>$sidebar,'sideb'=>$sideb]);
      
   }
   public function showarticle($id){
       $articl=Article::select(['id','title','content','author','description','date','image','views','tags'])->where('id',$id)->first();
        $art_M=Article::select(['id','title','content','author','description','date','image','views','tags'])->get();
      $sidebar=Article::select(['id','title','date','image','description','views'])->orderBy('views','desc')->limit(3)->get();
     $sideb=Speciality::select(['denumire'])->get();
       
    
       return view('more')->with(['article'=>$articl,'sidebar'=>$sidebar,'sideb'=>$sideb,'article_M'=>$art_M]);
       
   }
   
   public function showspecialities(){
       return view('specialities');
   }
   public function showmenu(){
      $menu=Menus::select(['menulist'])->get();
      //dump($articl);
       return view('welcome')->with(['menu'=>$menu]);
   }
   
 
      public function showadministratia(){
    $menu= Administratia::select(['id','nume','image'])->get();
       //dump($articl);
       return view('about')->with(['menu'=>$menu]);
        
       
       
   } 
   
   
   
}
