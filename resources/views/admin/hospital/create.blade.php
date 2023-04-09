<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.layouts.css')
    <Style>
        .center {
            text-align: center;
            padding-top: 40px;
        }

        .input_color {
            color: black;
        }

        .centertbl {
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 30px;
            border: 3px solid white;
        }

        label {
            display: inline-block;
            width: 200px
        }
    </Style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.layouts.sidebar')
        <!-- partial -->
        <!-- partial:partials/_navbar.html -->
        @include('admin.layouts.navigation')
        <div class="main-panel">
            <div class="content-wrapper">
                @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    {{ session()->get('message') }}

                </div>
                @endif
                <div class="center">
                    <h1>Add Hospital</h1>


                    <br>

                    <form action="{{ route('hospital.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="div_design">
                            <label for="">Hospital Title :</label>
                            <input class="input_color" type="text" name="title" placeholder="write a title">
                        </div>
                        <br>
                        <div class="div_design">
                            <label for="">Hospital Name :</label>
                            <input class="input_color" type="text" name="name" placeholder="write a title" required>
                        </div>
                        <br>
                        <div class="div_design">
                            <label for="">Hospital Description :</label>
                            <textarea class="input_color" name="description" id="" cols="30" rows="10"></textarea>
                        </div><br>

                        <div class="div_design">
                            <label for="">Hospital Image :</label>
                            <input class="input_color" type="file" name="image" required>
                        </div>
                        <br>
                        <div class="div_design">
                            <input type="submit" value="Add Hospital" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.layouts.script')

    <!-- End custom js for this page -->
</body>

</html>