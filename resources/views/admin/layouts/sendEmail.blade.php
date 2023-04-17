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
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.layouts.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include('admin.layouts.navigation')

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="center">
                        <h1>Send Email to {{ $data->email }} <h1>
                                <br>

                                <form action="{{ route('send_user_email', $data->id) }}" method="POST">
                                    @csrf
                                    <div class="div_design">
                                        <label for="">Email Greeting :</label>
                                        <input class="input_color" type="text" name="greeting"
                                            placeholder="Greeting text" required>
                                    </div>
                                    <br>
                                    <div class="div_design">
                                        <label for="">Email Body :</label>
                                        <input class="input_color" type="text" name="body" placeholder="write email">
                                    </div>
                                    <br>

                                    <div class="div_design">
                                        <label for="">Email Button Name :</label>
                                        <input class="input_color" type="text" name="button" placeholder="click me">
                                    </div>
                                    <br>
                                    <div class="div_design">
                                        <label for="">Email url :</label>
                                        <input class="input_color" type="text" name="url" placeholder="link">
                                    </div>
                                    <br>
                                    <div class="div_design btn btn badge-outline-success">
                                        <input type="submit">
                                    </div>
                                </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.layouts.script')
    <script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>
    <!-- End custom js for this page -->
</body>

</html>