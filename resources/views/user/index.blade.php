<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>WEbudi</title>
</head>
<style>
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        margin: auto;
        text-align: center;
    }

    .title {
        color: grey;
        font-size: 18px;
    }

    button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
    }

    a {
        text-decoration: none;
        font-size: 22px;
        color: black;
    }

    button:hover,
    a:hover {
        opacity: 0.7;
    }
</style>

<body>
    <div class="container" style="margin-top: 50px">
        <div class="row">
            <div class="col-md-4">
                @foreach ($temp as $row)
                    <div class="card" style="width: 18rem;">
                        <img src="https://mosaic.scdn.co/640/ab67616d0000b2730938b01462c3292f814fd1dcab67616d0000b273467652a50e2990aeb49772f6ab67616d0000b2736167cf043ae2b1a02165ddd1ab67616d0000b273817db9af2e833ad59bf58e0f"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Playlist</h5>
                            <p class="card-text">{{ $row->name }}</p>
                            <a href="{{ route('albumList') }}" class="btn btn-primary">Go Playlist</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://i.scdn.co/image/ab67616d0000b2735c2e5d4406af77752de3de3e" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Cem Adrian</h5>
                        <p class="card-text">Album</p>
                        <a href="{{ route('albumSingle') }}" class="btn btn-primary">Go Album</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <link rel="stylesheet" href="#">
                <div class="card">
                    <img src="https://i.scdn.co/image/ab6775700000ee85f13780d75b5ead2d950e817e" alt="John"
                        style="width:100%; height:260px">
                    <h1>{{ $json_temp->display_name }}</h1>
                    <p>{{ $json_temp->email }}</p>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="https://open.spotify.com/user/lbrgzf0e2q94xk2xuy7605hlh" target="_blank"><button>Go
                            Profile</button></a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
