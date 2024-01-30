<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <div class="container p-5">
            <h2 class="text-center">Edit Studen</h2>
            <form action="/students/update/{{ $students->id }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Name</label>
                    <input type="text" name="full_name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" value="{{ $students->full_name }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputbirthday1" class="form-label">Birthday</label>
                    <input type="text" name="dob" class="form-control" id="exampleInputbirthday1" value="{{$students->dob}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputaddress1" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" id="exampleInputaddress1" value="{{$students->address}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputclass_name1" class="form-label">Class name</label>
                    <input type="text" name="class_name" class="form-control" id="exampleInputclass_name1" value="{{$students->class_name}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputemail1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputemail1" value="{{$students->email}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputphone1" class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" id="exampleInputphone1" value="{{$students->phone}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputstatus1" class="form-label">Status</label>
                    <input type="text" name="status" class="form-control" id="exampleInputstatus1" value="{{$students->status}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button class="btn btn-secondary"><a href="/students" class="text-dark text-decoration-none">BACK</a></button>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>

    </html>

</body>

</html>