<?php if(isset($categories)):?>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Category</th>
            <th>Action</th>
        </tr>
        <?php foreach($categories as $cat): ?>
        <tr>
            <td><?= $cat['id'] ?></td>
            <td><?= $cat['Categories'] ?></td>
            <td>
            <button class="btn btn-xs btn-info"  value="<?= $cat['id']?>" id="editCategory">Edit</button>
            <button class="btn btn-xs btn-danger" value="<?= $cat['id']?>" id="delCategory">Delete</button>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
<?php else: ?>

    <div class="row">
        <h2>Add/Remove Categories</h2>
        <div class="col-md-4">
            <div class="form-group">
                <label for="catType"></label>
                <select class="form-control" id="catType">
                    <option value="">Type</option>
                    <option value="1">Local</option>
                    <option value="2">International</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" id="catText" class="form-control" placeholder="Add Category">
            </div>
            <div class="form-group">
                <button class="btn btn-secondary" id="catAdd">Add Category</button>
            </div>
        </div>
        <div class="col-md-8" id="catTable">
        </div>
    </div>

<?php endif; ?>