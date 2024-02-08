<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet"/>
    <title>Data Table </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top:80px">
    <table class="table table-scriped">
        <thead>
            <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Airi Satou</td>
                <td>Account </td>
                <td>Tokyo</td>
                <td>30</td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Account </td>
                <td>Tokyo</td>
                <td>30</td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Account </td>
                <td>Tokyo</td>
                <td>30</td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Account </td>
                <td>Tokyo</td>
                <td>30</td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Account </td>
                <td>Tokyo</td>
                <td>30</td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Account </td>
                <td>Tokyo</td>
                <td>30</td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Account </td>
                <td>Tokyo</td>
                <td>30</td>
            </tr>
        </tbody>
    </table>
</div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"></script>
    <script>
    $(document).ready(function (){
        $('.table').DataTable();
    })
    </script>
</body>
</html>