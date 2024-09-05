<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="/user/simpan" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="" aria-describedby="helpId"
                placeholder="" />
            <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="" aria-describedby="helpId"
                placeholder="" />
            <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Password</label>
            <input type="text" class="form-control" name="password" id="" aria-describedby="helpId"
                placeholder="" />
            <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">barcode</label>
            <input type="text" class="form-control" name="barcode" id="" aria-describedby="helpId"
                placeholder="" />
            <small id="helpId" class="form-text text-muted">Help text</small>
        </div>

        <button type="submit">Simpan</button>

    </form>
</body>

</html>
