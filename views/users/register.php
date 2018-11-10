<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Register User</h5>
            </div>

            <div class="card-body">
                <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
                    <div class="form-group">
                        <label for="name_id">User Name</label>
                            <input type="text" name="name" class="form-control" id="name_id" />
                    </div>

                    <div class="form-group">
                        <label for="email_id">Email</label>
                        <input type="text" name="email" class="form-control" id="email_id" />
                    </div>

                    <div class="form-group">
                        <label for="password_id">Password</label>
                        <input type="password" name="password" class="form-control" id="password_id" />
                    </div>
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary" />
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
