<?php

namespace App\Interfaces;

interface categoryIterface{

    public function getAll();
    public function getCategoryById($id);
    public function storeCategory(array $categoryDetails);
    public function updateCategory($id, array $categoryDetails);
    public function deleteCategory($id);

}