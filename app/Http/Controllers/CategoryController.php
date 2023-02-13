<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\CategoryModel;
use App\Interfaces\CategoryIterface;

use DB;

class CategoryController extends Controller
{
    private $categoryRepository;

    public function __construct(CategoryIterface $categoryRepository) 
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index(){
        $data=$this->categoryRepository->getAll();

         return view('category.category_list',compact('data')); 
    }

    public function create(){

        return view('category.create');
    }

     //Category Store method.....
     public function store(Request $request){
        $validatedData = $request->validate([
            'category_name' => 'required|unique:categories|max:55',        
        ]);

        //Eloquent Orm
        $this->categoryRepository->storeCategory($request->all());   

        $notification=array(
            'message'=>'Category Inserted!',
            'alert-type'=>'success',
        );

        return redirect()->route('category_list')->with($notification);       
    }

    //Category edit method.....
    public function edit($id) {
        $data=$this->categoryRepository->getCategoryById($id);
        return view('category.edit',compact('data'));
    }

    //Category update method.....
    public function update(Request $request){
        $validatedData = $request->validate([
            'category_name' => 'required',           
        ]);
        $slug=Str::slug($request->category_name, '-');
        $data=array();
        $data['category_name']=$request->category_name;
        $data['category_slug']=$slug;
 
        $this->categoryRepository->updateCategory($request->id,$data); 

        $notification=array(
            'message'=>'Category Updated!',
            'alert-type'=>'success',
        );

        return redirect()->route('category_list')->with($notification); 
    }


    //Category Delete method.....
    public function delete($id){

        $this->categoryRepository->deleteCategory($id);
        //Eloquent ORM
               
        $notification=array(
            'message'=>'Category Deleted!',
            'alert-type'=>'success',
        );
        return redirect()->back()->with($notification);
    }
}
