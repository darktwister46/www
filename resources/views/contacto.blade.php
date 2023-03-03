@extends('layouts.nav')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" action="/">
                    <fieldset>
                        <legend class="text-center header">Contactanos</legend>

                        <div class="form-group" style="margin-left: 25%">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="fname" name="name" type="text" placeholder="Nombre" class="form-control">
                            </div>
                        </div>
                        <div class="form-group" style="margin-left: 25%">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="lname" name="name" type="text" placeholder="Apellidos" class="form-control">
                            </div>
                        </div>

                        <div class="form-group" style="margin-left: 25%">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" placeholder="Email" class="form-control">
                            </div>
                        </div>

                        <div class="form-group" style="margin-left: 25%">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="phone" name="phone" type="text" placeholder="Telefono" class="form-control">
                            </div>
                        </div>

                        <div class="form-group" style="margin-left: 25%">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="message" name="message" placeholder="Introduce un mensaje." rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group" style="">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
