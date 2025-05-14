<?php include("Views/front/templates/Head.php")
?>
    <form class="container w-50" action="DataRegister.php" method="post">
        <p class="text-light bg-primary text-center p-2 rounded mt-2">Form Register</p>
        <div class="form-group">
            <label for="exampleInputEmail1">Name :</label>
            <input type="text" name="name" class="form-control" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email :</label>
            <input type="email" name="email" class="form-control" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword">Password : </label>
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Phone :</label>
            <input type="tel" name="phone" class="form-control" placeholder="Enter tel">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>