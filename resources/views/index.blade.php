<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Hello, world!</title>
</head>
<body>

<!-- Optional JavaScript; choose one of the two! -->



<div class="container mt-5">

    <div class="row mt-5">

        <div class="col-sm">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" onclick="create()">
                Novo
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">

                    <div class="modal-content">


                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>


                        <div class="modal-body">

                           <div id="page" class="p-2">


                           </div>

                        </div>



                    </div>

                </div>

            </div>

        </div>


        <div class="col-sm mt-5" id="read">

        </div>


    </div>

</div>


<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>


<script !src="">

    $(document).ready(function () {
        read()
    });

    function read()
    {
        $.get("{{ route('produto.read') }}", {}, function (data, status){
            $("#read").html(data);
        });
    }

    function create() {
        $.get("{{ route('produto.create') }}", {}, function (data, status){
            $("#exampleModalLabel").html('Create Produt');
            $("#page").html(data);
            $("#exampleModal").modal('show');

        });
    }

    function store() {
        let name = $("#name").val();

        $.ajax({

           type: "GET",
            url: "{{ route('produto.store') }}",
            data: "name=" + name,
            success: function (data) {
                $(".close").click();
                read()
            }

        });
    }


</script>



</body>
</html>
