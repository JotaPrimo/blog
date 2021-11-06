@extends('welcome')
@section('conteudo')


    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="Stylesheet" type="text/css" />



    <h2>Carbon Datas</h2>


<div class="grid">

    <div class="row mt-5">



        <div class="col-lg-3">
            <select class="form-control get-placa" type="text"  name="campo1" maxlength='4'>
                <option></option>
                <option value='Campo1'>Campo1</option>
                <option value='Campo2'>Campo2</option>
            </select>
        </div>

        <div class="col-lg-3">
            <label for="ex1">Pegando Value do Select:</label>
            <input type="text" class="form-control campo2" maxlength="14"  name="campo2"><br><!-- Input CNPJ -->
        </div>

        <div class="col-4"> </div>

        <div class="col-4">
            <form action="{{ route('carbon.store') }}" method="post">

                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="date"  id="datepicker" class="form-control" name="date" aria-describedby="emailHelp">

                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="text" name="teste" class="form-control" id="exampleInputPassword1">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <div class="col-4"> </div>
    </div>


</div>



        <script type="text/javascript">
            $(document).on('change', '.get-placa', function () {
            var value = $(this).val();
            $('.close').trigger('click');
            $('.campo2').val(value);
        });

            $(function() {
                $("#datepicker" ).change({ dateFormat: "yy-mm-dd" });
                $("#datepicker").click("change",function(){
                    var selected = $(this).val();
                    alert(selected);
                });
            });


    </script>



@stop
