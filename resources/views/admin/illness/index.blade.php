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

        .div_design {
            padding: 15px;
        }

        .th_deg {
            padding: 30px;
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
                <div class="center">
                    <h1>Add Diseases</h1>
                    <br>
                    <form action="" method="">
                        <table class="centertbl">
                            <tr>
                                <td class="th_deg">Name</td>
                                <td class="th_deg">Description</td>
                                <td class="th_deg">Image</td>
                                <td class="th_deg">Action</td>
                            </tr>

                            @foreach ($illness as $i)
                            <tr>
                                <td>{{ $i->name }}</td>
                                {{-- <td>{{ $i->writer }}</td> --}}
                                <td>{{ $i->description }}</td>
                                <td>
                                    <img src="/illness/{{ $i->image }}" alt="" width="250px" height="200px">
                                </td>
                                <td><a onclick="return confirm('U Sure')" href="{{ url('delete_illness', $i->id) }}"
                                        class="btn btn-danger">Delete</a>
                                </td>
                                <td><a href="{{ route('illness.edit', $i->id) }}" class="btn btn-success">Edit</a>
                                </td>
                            </tr>
                            @endforeach

                        </table>
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