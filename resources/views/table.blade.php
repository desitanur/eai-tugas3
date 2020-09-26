<html>
<head>
    <title>Update Data</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>

<h1 style="text-align: center; margin-top: 100px">TAMPILKAN DATA</h1>

<div class="container" style="margin-top: 50px">
    <div class="row">
        <div class="col">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Tahun Terbit</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @if($buku_mysql->count() !== 0)
                    @foreach($buku_mysql as $data)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $data->judul }}</td>
                            <td>{{ $data->penulis }}</td>
                            <td>{{ $data->tahun }}</td>
                            <td>
                                <a href="{{ route('update.view', $data->id) }}" role="button" class="btn btn-primary">Update</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>


        <div class="col">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Tahun terbit</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @if($buku_pgsql->count() !== 0)
                    @foreach($buku_pgsql as $data)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $data->judul }}</td>
                            <td>{{ $data->penulis }}</td>
                            <td>{{ $data->tahun }}</td>
                            <td>{{ $data->penerbit }}</td>
                            <td>
                                <a href="{{ route('update.view', $data->id) }}" role="button" class="btn btn-primary">Update</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>

</html>
