<!-- Includes -->
<?php 
        include 'sources/database/db_conn.php';
        include 'sources/functions/create.php';
        include 'sources/Handling/server.php';
    ?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="container-fluid w-100 h-100 my-4 ">
        <div class="container ">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card min-Hcard" style="width: 18rem;">
                        <div class="">
                            <div>
                                <h5 class="card-title pb-5 d-flex justify-content-center py-3">Card title</h5>
                            </div>
                            <div class="input-group mb-3 rounded-0">
                                <button class="input-group-text rounded-0" id="inputGroup-sizing-default">Add</button>
                                <input type="text" class="rounded-0 form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default">
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card min-Hcard" style="width: 18rem;">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <div id="starter" class="">
                                <span><i onclick="show()" class=" display-4 fa-solid fa-plus"></i></span>
                            </div>
                            <div id='mainCard' class="d-none">
                                <form method="post">
                                    <div class="input-group">
                                        <input type="text" class="form-control text-center" placeholder="Titel"
                                            name="NameOfList">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input class="btn btn-primary w-100 mt-2" type="submit" value="Submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>

    <script src="script.js" async defer></script>
</body>

</html>