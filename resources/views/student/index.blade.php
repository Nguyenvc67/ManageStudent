<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/Student.js"></script>
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
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const successMessage = document.querySelector('.alert');
                if (successMessage) {
                    setTimeout(function() {
                        successMessage.style.display = 'none';
                    }, 5000);
                }
            });
        </script>
        @if(session('success'))
        <div class=" alert-primary position-absolute" style="width: 100%;">
            {{ session('success') }}
        </div>
        @endif
        <div class="container p-5">
            <div class="mb-5 d-flex justify-content-between">
                <h2><a href="/students" class="text-dark text-decoration-none">List Studens</a></h2>
                <form class="row g-3" action="{{ Request::url() }}" method="get">
                <div class="col-auto">
                    <h2>Search </h2>
                </div>
                <div class="col-auto">
                    <label for="inputPassword2" class="visually-hidden"></label>
                    <input type="type" class="form-control" id="inputPassword2" name="search" placeholder="Input Name Student...">
                </div>
                <div class="col-auto">
                    <button type="submit" class="mb-3 btn btn-primary">Confirm</button>
                </div>
            </form>
                <form action="/students/create" method="get">
                    @method('GET')
                    @csrf
                    <button type="submit" class="btn btn-success">CREATE</button>
                </form>
            </div>
            

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">FULL NAME</th>
                        <th scope="col">AGE</th>
                        <th scope="col">ADDRESS</th>
                        <th scope="col">CLASS</th>
                        <th scope="col">PHONE</th>
                        <th scope="col">STATUS</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col" class="d-flex justify-content-center ">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $students)
                    <tr class="m-1">
                        <th scope="row">{{ $students->id }}</th>
                        <td>{{$students->full_name}}</td>
                        <td>{{$students->dob}}</td>
                        <td>{{$students->address}}</td>
                        <td>{{$students->class_name}}</td>
                        <td>{{$students->phone}}</td>
                        <td>{{$students->status}}</td>
                        <td>{{$students->email}}</td>
                        <td class="d-flex justify-content-center">
                            <form action="/students/update/{{$students->id}}" method="get">
                                @method('GET')
                                @csrf
                                <button type="submit" class="btn btn-warning">UPDATE</button>
                            </form>
                            <form action="/students/delete/{{$students->id}}" method="get">
                                @csrf
                                <button type="submit" class="btn btn-danger text-dark">DELETE</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    </body>

    </html>

</body>

</html>