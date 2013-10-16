
    <div class="container">

      <h1 class="pull-left"><?php echo $title; ?></h1>

    </div>

       <!-- content -->

        <div class="container" id="maindiv">
            <table id="userList" class="table">
            </table>

            <form class="form-inline" role="form" id="createNewUser" method="post">

                <div class="form-group">
                  <label class="sr-only" for="inputName">Name</label>
                  <input type="text" class="form-control" id="inputName" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                  <label class="sr-only" for="inputEmail">Email</label>
                  <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
                </div>
                <button type="submit" class="btn btn-default">Create user</button>

            </form>

            <div id="result">
                <!-- div for tests. To be removed. -->
            </div>

        </div>
