<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="text-center fs-3 m-5 text-primary">
        <h1>Shopping List</h1>
    </div>
    <div class="m-5">
        <form action="{{route('saveList')}}" method="post">
            @csrf
            <label class="form-label">Shopping Items</label><br>
            <input type="text" class="form-control" name="shplist">
            <br>
            <button type="submit"  class="btn btn-primary ">save</button>

        </form>
    </div>

    <div class="m-5">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">S.N</th>
                    <th scope="col">Items</th>
                    <th scope="col">Action</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach($list as $value)
                <tr>
                    <th scope="row">{{$value->id}}</th>
                    <td>{{$value->title}}</td>
                    <td><a href="/edit/{{$value->id}}" type="button" class="btn btn-success">Edit</a></td>
                    <td><a href="/delete/{{$value->id}}"  class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach

            </tbody>
        </table>

    </div>
</body>

</html>