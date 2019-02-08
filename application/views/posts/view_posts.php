<div class="col-md-12 p-0">
    <h2><?php echo $title;?></h2>
    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th>id</th>
                <th>Title</th>
                <th>Posted</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($posts as $post): ?>
            <tr class="odd gradeX">
                <td><?= $post['id'] ?></td>
                <td><?= $post['News_Title'] ?></td>
                <td><?= $post['Created_At'] ?></td>
                <td>
                <button class="btn btn-xs btn-info editPost" value="<?= $post['id'] ?>">Edit</button>
                <button class="btn btn-xs btn-danger deletePost" value="<?= $post['id'] ?>">Delete</button>
                </td>
            </tr>
        <?php endforeach;?>
    </table>
   
    <div class="col-md-12 align-content-center">
        <div class="btn-group" role="group" aria-label="...">
            <?php for($ii = 1; $ii <= $total_pages; $ii++):?>
                
                <button type="button" class="btn btn-sm btn-default postPage" value="<?= $ii?>"><?= $ii?></button>
            <?php endfor; ?>
        </div>
    </div>
</div>
