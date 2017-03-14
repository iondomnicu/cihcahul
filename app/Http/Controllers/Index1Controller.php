<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Speciality;
use App\Menu;
use App\Administratia;
use App\Carousel;
use App\Partener;

class Index1Controller extends Controller
{
   public function index(){
	   $message=Article::select(['id','title','content','author','description','date','image','views','tags'])->get();
           $specialt=Speciality::select(['denumire','id'])->get();
           $num=0;
           $sidebar=Article::select(['id','title','date','image','description','views'])->orderBy('views','desc')->limit(4)->get();
           $m_slider= Carousel::Select(['id','image'])->get();
           $latest_events=Article::select(['id','title','date','author','image','description','views'])->orderBy('date','desc')->limit(3)->get();
         $parten= Partener::Select(['id','image'])->get();
         
          $menu=Menu::select(['menulist','id'])->get();
         
           foreach ($specialt as $total){ $num=$total->nr+$num;   }	   
//dump($num);
	   return view('index')->with(['articles'=>$message,'specialit'=>$specialt,'numar'=>$num,'sidebar'=>$sidebar,'reccent'=>$latest_events,'slider'=>$m_slider,'partene'=>$parten,'menu'=>$menu]);
	   
   }
   
   public function contact(){
       $latest_events=Article::select(['id','title','date','image','author','description','views'])->orderBy('date','desc')->limit(3)->get();
       return view('contact')->with(['recent'=>$latest_events]);
   }
   public function show(){
       
     $article=Article::select(['id','title','content','author','description','date','image','views','tags'])->get();  
     $sidebar=Article::select(['id','title','date','image','description','views'])->orderBy('views','desc')->limit(4)->get();
     $sideb=Speciality::select(['denumire'])->get();
     $latest_events=Article::select(['id','title','date','image','description','views'])->orderBy('date','desc')->limit(3)->get();
     return view('events')->with(['articles'=>$article,'sidebar'=>$sidebar,'sideb'=>$sideb,'recent'=>$latest_events]);
      
   }
   public function showarticle($id){
       $articl=Article::select(['id','title','content','author','description','date','image','views','tags'])->where('id',$id)->first();
        $art_M=Article::select(['id','title','content','author','description','date','image','views','tags'])->get();
      $sidebar=Article::select(['id','title','date','image','description','views'])->orderBy('views','desc')->limit(3)->get();
     $sideb=Speciality::select(['id','denumire'])->get();
     $latest_events=Article::select(['id','title','date','image','description','views'])->orderBy('date','desc')->limit(3)->get();
       
    
       return view('more')->with(['article'=>$articl,'sidebar'=>$sidebar,'sideb'=>$sideb,'article_M'=>$art_M,'recent'=>$latest_events]);
       
   }
   
   public function showspecialities($id){
        $latest_events= Speciality::select(['id','denumire','content','nr'])->where('id',$id)->first();
         $latest_even=Article::select(['id','title','date','author','image','description','views'])->orderBy('date','desc')->limit(3)->get();
        $specialt=Speciality::select(['denumire','id'])->get();
         return view('specialities')->with(['recent'=>$latest_events,'reccent'=>$latest_even,'specialit'=>$specialt]);
   }
   public function showmenu(){
      $menu=Menu::select(['menulist'])->get();
      //dump($articl);
      $sidebar=Article::select(['id','title','date','image','description','views'])->orderBy('views','desc')->limit(3)->get();
       return view('welcome')->with(['menu'=>$menu,'sideb'=>$sidebar]);
   }
   
  
 
      public function showadministratia(){
    $menu= Administratia::select(['id','nume','functie','descriere','image'])->get();
       //dump($articl);
    $latest_events=Article::select(['id','title','date','image','description','views'])->orderBy('date','desc')->limit(3)->get();
       return view('about')->with(['menu'=>$menu,'recent'=>$latest_events]);
        
       
       
   } 
   
   
   
}
