<html>

<style>
    .formulir {
        margin: auto;
        margin-top: 50px;
        max-width: 750px;
    }
</style>
<head>
    <title>Insert Data</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>

<h1 style="text-align: center; margin-top: 100px">DATA BUKU</h1>

<div class="formulir">
    <form action="{{ route('insert.post') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="JudulBuku">Judul Buku</label>
            <input type="text" name="judul" class="form-control" id="">
        </div>
        <div class="form-group">
            <label for="PenulisBuku">Penulis</label>
            <input type="text" name="penulis" class="form-control" id="">
        </div>
        <div class="form-group">
            <label for="TahunTerbit">Tahun Terbit</label>
            <input type="number" name="tahun" class="form-control" id="">
        </div>
        <div class="form-group">
            <label for="PenerbitBuku">Penerbit Buku</label>
            <input type="text" name="penerbit" class="form-control" id="">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

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
