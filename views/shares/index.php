<div>
    <?php if(isset($_SESSION['is_logged_in'])): ?>
        <a class="btn btn-success btn-share m-2" href="<?php echo ROOT_PATH; ?>shares/add">Share Something</a>
    <?php endif; ?>
    <?php foreach($viewModel as $item) :?>
        <div class="card m-2">
            <div class="card-header">
                <h3 class="card-title"><?php echo $item['title']?></h3>
            </div>
            <div class="card-body">
                <small><?php echo $item['create_date']; ?></small>
                <p class="card-text"><?php echo $item['body']; ?></p>
                <a class="btn btn-secondary" href="<?php echo $item['link']; ?>" target="_blank">Go To Website</a>
            </div>
        </div>
    <?php endforeach; ?>





</div>