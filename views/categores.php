<?php require 'inc/menu.php' ?>
<div class="main-content">
    <div class="container-fluid dashboard">
        <div class="row">
            <div class="col">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Total Items</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($categores as $key => $cat): ?>
                    <tr>
                        <th scope="row"><?= $key + 1 ?></th>
                        <td><?= htmlspecialchars($cat['category_name'])?></td>
                        <td><?= htmlspecialchars($cat['total_items'])?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>

<?php require 'inc/footer.php' ?>