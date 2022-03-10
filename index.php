<!-- Includes -->
<?php 
        include 'sources/database/db_conn.php';
        include 'sources/functions/add.php';
        include 'sources/functions/select.php';
        include 'sources/functions/iconFunctionality.php';
        addTask();
        $res = selectAll();
    
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
                    <form method="post">
                        <div class="form-group">
                            <label for="TaskName">Task name</label>
                            <input name="addTaskName" type="text" class="form-control" id="TaskName"
                                placeholder="TaskName">
                        </div>
                        <div class="form-group">
                            <label for="ExecptedTime">Execpted time <br> <span class="text-muted">*In minutes every 60 =
                                    1 hour.</span></label>
                            <input name="addTaskTime" type="text" class="form-control" id="ExecptedTime"
                                placeholder="Execpted time">
                        </div>
                        <div class="form-group">
                            <label for="description
                            .">description</label>
                            <textarea name="addTaskDesc" class="form-control" id="description" rows="3"></textarea>
                        </div>
                        <div class="form-group d-flex justify-content-end">
                            <input name="submit" type="submit" class="btn btn-primary" value="add task">
                        </div>
                    </form>

                </div>
                <div class="col-lg-8">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Task</th>
                                <th scope="col">Created</th>
                                <th scope="col">Time</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            foreach($res as $index => $value){
                            ?>
                            <tr class="<?=(!$value['Status'] ? "Strikeout" : '');?>">
                                <th scope="row" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                                    <?= $value['Name']?>
                                </th>
                                <td><?=date("d-m-y",strtotime($value['created']))?></td>
                                <td><?=date('G:i', mktime(0, $value['time']));?></td>
                                <td><?=($value['Status'] ? "Open" : 'Closed');?></td>
                                <td class="d-flex justify-content-around"><span><a href="index.php?p=<?=$value['id']?>"class="fa-solid fa-trash-can"></a></span>
                                <span>
                                    <?php
                                    if($value['Status']){
                                        echo "<a href='index.php?y={$value['id']}' class='fa-solid fa-check'></a>";
                                    }else{
                                        echo "<a href='index.php?z={$value['id']}' class='fa-solid fa-rotate-left'></a>";
                                    }
                                    ?>
                                </span>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="script.js" async defer></script>
</body>

</html>