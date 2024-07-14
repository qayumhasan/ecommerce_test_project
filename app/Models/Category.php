<?php

namespace App\Models;

use App\Core\DB;

class Category
{
        public static string $table_name = 'category';

        public static function all()
        {

                $sql = "SELECT c.Id                     AS category_id,
                        c.Name                          AS category_name,
                        COUNT(icr.ItemNumber)           AS total_items,
                        cr.ParentcategoryId             AS parent_category_id,
                        (SELECT Name 
                        FROM category 
                        WHERE Id = cr.ParentcategoryId) AS parent_category_name
                        FROM category c 
                        LEFT JOIN Item_category_relations icr 
                                ON c.Id = icr.categoryId 
                        LEFT JOIN catetory_relations cr 
                                ON c.Id = cr.categoryId 
                        GROUP BY c.Id, c.Name, cr.ParentcategoryId
                        ORDER BY total_items DESC";
                return DB::query($sql)->run();
        }

}