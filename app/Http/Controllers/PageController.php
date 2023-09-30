<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('admin.page');
       }
       public function create(Request $req){
        $data=new Page();
        $data->author_id = $req->author_id;
       
        $data->title=$req->title;
       
        $data->excerpt=$req->excerpt;
        $data->body=$req->body;
        $image=$req->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $req->image->move('images',$imagename);
        $data->image=$imagename;
        $data->slug=$req->slug;
        $data->meta_description=$req->meta_description;
        $data->meta_keywords=$req->meta_keywords;
        $data->status=$req->status;
        
        $data->save();
        return redirect('/pages');
    }
    public function pages(){
        $pages=Page::all();
        return view('admin.pages',compact('pages'));
    }
    public function delete($id)
{
     $page=Page::find($id);
     $page->delete();
     return redirect('/pages');
}
public function update($id){
    $page=Page::find($id);
    return view('admin.pageUpdate',compact('page'));
}
public function edit(Request $req,$id){
    $data=Page::find($id);
    $data->author_id = $req->author_id;
       
    $data->title=$req->title;
   
    $data->excerpt=$req->excerpt;
    $data->body=$req->body;
    $image=$req->image;
    if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $req->image->move('images',$imagename);
        $data->image=$imagename;
    }
   
    $data->slug=$req->slug;
    $data->meta_description=$req->meta_description;
    $data->meta_keywords=$req->meta_keywords;
    $data->status=$req->status;
    
    $data->save();
    return redirect('/pages');
}
public function view($id){
    $page=Page::find($id);
    return view('admin.pageDetails',compact('page'));
}
}
