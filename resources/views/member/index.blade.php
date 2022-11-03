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


        <div class="row d-flex justify-content-center">
            <div class="col-md-8 order-md-1 ">

                @if (count($errors) > 0)
                <div class="alert alert-danger my-5">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if ($message = Session::get('success'))
                <div class="alert alert-success notification" style="color: green;" role="alert">
                    {{ $message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                <form action="{{ url('store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="telp" class="col-sm-2 col-form-label">Handphone</label>
                        <div class="col-sm-10">
                            <input type="number" name="telp" class="form-control" id="telp">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama" class="form-control" id="nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea type="text" name="alamat" rows="3" class="form-control" id="alamat"
                                placeholder="ketikan alamat..."></textarea>
                        </div>
                    </div>
                    <fieldset class="form-group row">
                        <legend class="col-form-label col-sm-2 float-sm-left pt-0">Agama</legend>
                        <div class="col-sm-10 d-flex">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="agama" id="agama1" value="Islam"
                                    checked>
                                <label class="form-check-label mr-3" for="agama1">
                                    Islam
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="agama" id="gridRadios2"
                                    value="Kristen">
                                <label class="form-check-label mr-3" for="gridRadios2">
                                    Kristen
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="agama" id="gridRadios2"
                                    value="hindu">
                                <label class="form-check-label mr-3" for="gridRadios2">
                                    Hindu
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="agama" id="gridRadios2"
                                    value="budha">
                                <label class="form-check-label mr-3" for="gridRadios2">
                                    Budha
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group row">
                        <label for="hobi" class="col-sm-2 col-form-label">Hobi</label>
                        <div class="col-sm-10 mt-2">
                            <div class="form-check">
                                <input class="form-check-input" value="Musik" name="hobi[]" type="checkbox"
                                    id="gridCheck1">
                                <label class="form-check-label" for="gridCheck1">
                                    Musik
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="Olahraga" name="hobi[]" type="checkbox"
                                    id="gridCheck2">
                                <label class="form-check-label" for="gridCheck2">
                                    Olahraga
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="Kesenian" name="hobi[]" type="checkbox"
                                    id="gridCheck3">
                                <label class="form-check-label" for="gridCheck3">
                                    Kesenian
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="Games" name="hobi[]" type="checkbox"
                                    id="gridCheck4">
                                <label class="form-check-label" for="gridCheck4">
                                    Games
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="Otomotif" name="hobi[]" type="checkbox"
                                    id="gridCheck5">
                                <label class="form-check-label" for="gridCheck5">
                                    Otomotif
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="Makan" name="hobi[]" type="checkbox"
                                    id="gridCheck6">
                                <label class="form-check-label" for="gridCheck6">
                                    Makan
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="Tidur" name="hobi[]" type="checkbox"
                                    id="gridCheck7">
                                <label class="form-check-label" for="gridCheck7">
                                    Tidur
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tahun" class="mr-2 ml-3">Tahun Lahir</label>
                        <div class="col-sm-4">
                            <select id="tahun" name="tahun_lahir" class="form-control">
                                <option value="">Pilih...</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                            </select>
                        </div>
                        <label for="umur">Umur</label>
                        <div class="col-sm-4">
                            <input type="number" name="umur" class="form-control" id="umur">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10 ">
                            <button type="submit" class="btn btn-primary mt-5">Simpan Data</button>
                            <a href="{{url('show')}}" class="btn btn-success ml-3 mt-5">Cetak Data</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
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