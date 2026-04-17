<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Muruga Traders-Category Master </title>
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="main-wrapper">
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Master</h4>
                            <span class="ml-1">Category Master</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Category Master</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="post" action="/admin/category.php">
                                        <div class="form-group">
                                            <input type="text" class="form-control input-default" required placeholder="category name" id="txtCategorynameID" name="txtCategoryname">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary" name="btnSave">Save</button>
                                            <button type="reset" class="btn btn-primary" name="btnReset">Reset</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table primary-table-bordered">
                            <thead class="thead-primary">
                                <tr>
                                    <th scope="col">S.No</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><th>8</th><th>CARPENTER</th>
                                    <td><span><a href="categoryedit.php?Sid=8" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i></a></span></td>
                                </tr>
                                <tr><th>7</th><th>CEMENTS</th>
                                    <td><span><a href="categoryedit.php?Sid=7" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i></a></span></td>
                                </tr>
                                <tr><th>6</th><th>PVC PIPE</th>
                                    <td><span><a href="categoryedit.php?Sid=6" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i></a></span></td>
                                </tr>
                                <tr><th>5</th><th>ELECTRICALS</th>
                                    <td><span><a href="categoryedit.php?Sid=5" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i></a></span></td>
                                </tr>
                                <tr><th>4</th><th>HARDWARES</th>
                                    <td><span><a href="categoryedit.php?Sid=4" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i></a></span></td>
                                </tr>
                                <tr><th>3</th><th>PVC</th>
                                    <td><span><a href="categoryedit.php?Sid=3" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i></a></span></td>
                                </tr>
                                <tr><th>2</th><th>PAINT</th>
                                    <td><span><a href="categoryedit.php?Sid=2" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i></a></span></td>
                                </tr>
                                <tr><th>1</th><th>STEEL</th>
                                    <td><span><a href="categoryedit.php?Sid=1" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i></a></span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="astonishinfotech.com" target="_blank">Astonish InfoTech</a> 2024</p>
            </div>
        </div>
    </div>
    <script src="vendor/global/global.min.js"></script>
    <script src="js/quixnav-init.js"></script>
    <script src="js/custom.min.js"></script>
</body>
</html>