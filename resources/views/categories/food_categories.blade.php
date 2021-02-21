@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="row">

            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-6">
                                <h4 class="card-title">Food Type</h4>
                                <form class="forms-sample" id="insert-form" method="post"
                                    action="{{ route('foodcat.store') }}">
                                    @csrf
                                    <table class="table " id="table_field">
                                        <thead>
                                            <tr>
                                                <th> Category </th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" id="title" name="food_cat[]"
                                                        required>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-info mr-2" id="add"><i
                                                            class="mdi mdi-plus-circle-outline"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <input type="submit" class="btn btn-gradient-primary mr-2 btn-success" name="submit"
                                        id="submit" value="Submit" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Food Type</h4>
                        <table class="table table-hover" id="table2">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Food Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($foodcat->count() == !0)
                                    @foreach ($foodcat as $foodcat)
                                        <tr>
                                            <td>{{ $foodcat->id }}</td>
                                            <td>{{ $foodcat->food_cat }}</td>
                                            <td>
                                                <form class="insert-form" id="insert-form" method="post"
                                                    action="{{ route('foodcat.destroy', $foodcat->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button name="submit" class="btn btn-danger btn-sm" id="submit"><i
                                                            class="mdi mdi-delete-forever"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="3" class="text-center">No Data Found</td>
                                    <tr>
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#table2').DataTable({
                "paging": true,
                "autoWidth": true,

            });
        });

    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var html = '<tr>\n' +
                '         <td><input type="text" class="form-control" id="title" name="food_cat[]" required></td>\n' +
                '         <td><button name="remove" class="btn btn-danger btn-sm" id="remove"><i class="mdi mdi-delete-forever"></i> </button> </td>\n' +
                '       </tr>';

            var x = 1;
            $("#add").click(function() {
                $("#table_field").append(html);
            });
            $("#table_field").on('click', '#remove', function() {
                $(this).closest('tr').remove();
            });
        });

    </script>

@endsection
