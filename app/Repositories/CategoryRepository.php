<?php 

namespace App\Repositories;
use App\Interfaces\CategoryIterface;
use App\Models\CategoryModel;

class CategoryRepository implements categoryIterface{

    public function getAll(){
        return CategoryModel::all();
    }

    public function getCategoryById($id){
        return CategoryModel::findorfail($id);
    }
    
    public function storeCategory(array $categoryDetailes){

        return CategoryModel::create($categoryDetailes);
    }

    public function updateCategory($id,array $categoryDetailes){

        return CategoryModel::where('id',$id)->update($categoryDetailes);
    }

    public function deleteCategory($id)
    {
        return CategoryModel::destroy($id); 
    }
    
}