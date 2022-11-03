<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>
        <?php $te = isset($data) ? $data['title'] : 'Data Member'; echo $te;?>
    </title>
</head>

<body>
    <div class="container">
        <div class="py-5 text-center justify-content-center">
            <h2>Data Member</h2>
        </div>


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Handphone</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Hobi</th>
                    <th scope="col">Tahun Lahir</th>
                    <th scope="col">Umur</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($member as $item)
                <tr>
                    <th scope="row">
                        <?= $no++ ?>
                    </th>
                    <td>
                        <?= $item->telp ?>
                    </td>
                    <td>
                        <?= $item->nama ?>
                    </td>
                    <td>
                        <?= $item->alamat ?>
                    </td>
                    <td>
                        <?= $item->agama ?>
                    </td>
                    <td>
                        <?= $item->hobi ?>
                    </td>
                    <td>
                        <?= $item->tahun_lahir ?>
                    </td>
                    <td>
                        <?= $item->umur ?>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{url('/')}}" class="btn btn-primary mt-5">Kembali</a>
    </div>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

</body>

</html>