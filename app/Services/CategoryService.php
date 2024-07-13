<?php
namespace App\Services;
class CategoryService {
    private $rows;

    public function __construct(array $rows) {
        $this->rows = $rows;
    }
    public function buildCategoryTreeWithTotalItems($parentId = null) {
        $tree = [];
        foreach ($this->rows as $key => $row) {
            if ($row['parent_category_id'] == $parentId) {
                $row = $this->processChildCategory($row, $parentId);
                $tree[] = $row;
            }
        }
        return $tree;
    }

    private function processChildCategory(array $node, $parentId) {
        $node['children'] = $this->buildCategoryTreeWithTotalItems($node['category_id']);
        $node['total_items'] = $this->calculateTotalItems($node, $parentId);
        return $node;
    }

    private function calculateTotalItems(array $node, $parentId) {
        $totalItems = $node['total_items'];
        foreach ($node['children'] as $child) {
            $totalItems += $child['total_items'];
        }
        return $totalItems;
    }

    public function getCategoryByDesc():array
    {
        $categores = $this->buildCategoryTreeWithTotalItems();
        $categoryList = array_map(function($data){
            return [
                'category_id'=> $data['category_id'] ?? 0,
                'category_name'=> $data['category_name'] ?? 0,
                'total_items'=> $data['total_items'] ?? 0,
            ];
        },$categores);
        usort($categoryList, function ($a, $b) { 
            return $b['total_items'] - $a['total_items']; 
        }); 
        return $categoryList;
    }

}