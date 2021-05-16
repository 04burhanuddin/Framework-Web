<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        {{-- bootsrap css V.4 --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        {{-- title --}}
        <title>Welcome | Test Daring</title>

    </head>

    <body>
        <div class="container">
            <div class="row justify-content-center" style="margin-top: 10rem;">
                <div class="card h-100 w-100 col-md-5 mx-4 px-4" style="border-radius: 1rem">
                    {{-- begin form --}}
                    <form>
                        <div class="form pt-5">
                            <div class="form-group text-center">
                                <h2>Sistem Test Daring</h2>
                            </div>
                        </div>
                        <div class="form">
                            <div class="form-group">
                                <label for="nim">Nomor</label>
                                <input type="text" class="form-control" id="nim" placeholder="Nomor Mahasiswa">
                            </div>
                        </div>
                        <div class="form">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap">
                            </div>
                        </div>
                        <div class="form">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="form">
                            <label class="mb-1" for="PilihanKelas">Kelas</label>
                            <select class="custom-select my-1 mr-sm-2" id="PilihanKelas">
                                <option selected>Pilih Kelas</option>
                                <option value="1">1. Informatika-1</option>
                                <option value="2">2. Informatika-2</option>
                                <option value="3">3. Informatika-3</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-warning mb-5 mt-3">Mulai Exam</button>
                    </form>
                    {{-- end form --}}
                </div>
            </div>
        </div>

        {{-- optional javascript --}}
        {{-- jQuery first, then Popper.js, then Bootstrap JS --}}
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>

</html>