<?php
$mbmer=['A0001','mary']


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>練習題 </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>會員資料</h2>
        <p>請小心操作以免誤刪資料</p>
        <HR>
        </HR>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>序</th>
                    <th>ID</th>
                    <th>name</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <TD>1</TD>
                    <td>A00001</td>
                    <td>Doe</td>
                    <td> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                            DEL
                        </button></td>
                </tr>
                <tr>
                    <TD>2</TD>
                    <td>A00002</td>
                    <td>MARY</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                        DEL
                    </button></td>
                </tr>
                <tr>
                    <TD>3</TD>
                    <td>A00003</td>
                    <td>JULY</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                        DEL
                    </button></td>
                </tr>
                <tr>
                    <TD>4</TD>
                    <td>A00004</td>
                    <td>JOHN</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                        DEL
                    </button></td>
                </tr>
            </tbody>
        </table>
    </div>


    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">會員資料</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    會員資料已刪除完畢!
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">close</button>
                </div>

            </div>
        </div>
    </div>
</body>

</html>