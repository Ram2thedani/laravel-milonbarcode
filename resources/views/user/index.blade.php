<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            -webkit-print-color-adjust: exact !important;
            /* Chrome, Safari 6 – 15.3, Edge */
            color-adjust: exact !important;
            /* Firefox 48 – 96 */
            print-color-adjust: exact !important;
            /* Firefox 97+, Safari 15.4+ */
        }
    </style>
</head>

<body>

    <div class="table-responsive">

        <table class="table table-primary" border=1>
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Barcode</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $u)
                    <tr class="">
                        <td scope="row">{{ $u->name }}</td>
                        <td>{{ $u->email }}</td>
                        <td align="center">{!! DNS1D::getBarcodeHTML("$u->barcode", 'C39') !!}{{ $u->barcode }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/user/adduser">Add User</a>
    </div>
</body>

</html>
