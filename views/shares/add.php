<div class="card">
    <div class="card-header">
        <h5 class="card-title">Share Something!</h5>
    </div>

    <div class="card-body">
        <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
            <div class="form-group">
                <label for="title_id">Share Title</label>
                <input type="text" name="title" class="form-control" id="title_id" />
            </div>

            <div class="form-group">
                <label for="body_id">Body</label>
                <textarea id="body_id" class="form-control" name="body"></textarea>
            </div>

            <div class="form-group">
                <label for="link_id">Link</label>
                <input type="text" name="link" class="form-control" id="link_id" />
            </div>
            <input type="submit" name="submit" value="Submit" class="btn btn-primary" />
            <a class="btn btn-danger" href="<?php echo ROOT_PATH?>shares">Cancel</a>
        </form>
    </div>
</div>
