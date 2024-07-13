<?php require 'inc/menu.php' ?>
<div class="main-content">
    <div class="container-fluid dashboard">
        <div class="row">
            <div class="col">
                <div class="sidebar-navigation">
                    <strong class="items-title thead-dark">Categories with Total Item Number</strong>
                    <ul>
                    <?php foreach ($categores as $key => $cat): ?>
                        <li><a class="text-success font-weight-bold"><?= htmlspecialchars($cat['category_name']??'') ?> <em class="mdi mdi-chevron-down">( <?= $cat['total_items'] ?> )</em></a>
                        <?php if (!empty($cat['children'])): ?>
                            <?= generateNestedCategory($cat['children']) ?>
                            <?php endif ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<?php require 'inc/footer.php' ?>
<?php
function generateNestedCategory($categories) {
    $html = '<ul>';
    foreach ($categories as $category) {
        $html .= '<li>' . htmlspecialchars($category['category_name']) .'<em class="mdi mdi-chevron-down"> (' . htmlspecialchars($category['total_items']).' ) </em>'. '</li>';   
        if (!empty($category['children'])) {
            $html .= generateNestedCategory($category['children']);
        }
    }
    $html .= '</ul>';
    
    return $html;
}