<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="accordion" id="accordionExample">


                    <div class="accordion" id="accordionExample">
                        @foreach($userList as $key=>$user)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading{{$key+1}}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{$key+1}}" aria-expanded="{{($key==0?'true':'false')}}" aria-controls="collapse{{$key+1}}">
                                    {{$user->name}}
                                </button>
                            </h2>
                            <div id="collapse{{$key+1}}" class="accordion-collapse collapse {{($key==0?'show':'')}}" aria-labelledby="heading{{$key+1}}" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>{{$user->username}}</strong><br/>
                                    <strong>{{$user->email}}</strong><br/>
                                    <strong>{{$user->address->street}}</strong><br/>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

</html>
