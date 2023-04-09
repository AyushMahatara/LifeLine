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
                    <h1>Edit Medicine</h1>


                    <br>

                    <form action="{{ route('medicine.update', $medicine->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="div_design">
                            <label for="">Medicine Name :</label>
                            <input class="input_color" type="text" name="name" value="{{ $medicine->name }}" required>
                        </div>
                        <br>
                        <div class=" div_design">
                            <label for="">Medicine Description :</label>
                            <textarea class="input_color" name="description" id="" cols="30"
                                rows="10">{{ $medicine->name }}</textarea>
                        </div><br>

                        <div class="div_design">
                            <input type="submit" value="Update Medicine" class="btn btn-primary">
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