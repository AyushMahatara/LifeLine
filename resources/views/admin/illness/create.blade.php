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
                    <h1>Add Illness/Diseases</h1>


                    <br>

                    <form action="{{ route('illness.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="div_design">
                            <label for="">Illness Name :</label>
                            <input class="input_color" type="text" name="name" placeholder="write a title" required>
                        </div>
                        <br>
                        <div class="div_design">
                            <label for="">Illness Description :</label>
                            <textarea name="description" cols="30" rows="10" id="editor"></textarea>
                        </div><br>

                        <div class="div_design">
                            <label for="">Illness Image :</label>
                            <input class="input_color" type="file" name="image" required>
                        </div>
                        <br>
                        <div class="div_design">
                            <input type="submit" value="Add Illness" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>
        <script>
            ClassicEditor
                    .create( document.querySelector( '#editor' ) )
                    .then( editor => {
                            console.log( editor );
                    } )
                    .catch( error => {
                            console.error( error );
                    } );
        </script>
        <style>
            .ck.ck-editor__main>.ck-editor__editable {
                background: rgb(0, 0, 0);
                border-radius: 0;
            }
        </style>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.layouts.script')

    <!-- End custom js for this page -->
</body>

</html>