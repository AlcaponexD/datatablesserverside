<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Server side</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/s/bs-3.3.5/jq-2.1.4,dt-1.10.10,r-2.0.0,se-1.1.0/datatables.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <table class="table table-striped table-bordered table-hover datatable" id="datatable" width="100%">
                    <thead>
                        <tr>
                            <th>Part_number</th>
                            <th>Nomenclature</th>
                            <th>Type</th>
                            <th>Manufacturer</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
            </table>
        </div>
    </div>
    <script type="text/javascript" src="https://cdn.datatables.net/s/bs-3.3.5/jq-2.1.4,dt-1.10.10,r-2.0.0,se-1.1.0/datatables.js"></script>
    <script src="js/datatable.init.js"></script>
</body>
</html>