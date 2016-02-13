@extends('base')

@section('content')

<div class="container">
	<br>
	<br>
   <div class="row">
         <!--contactt-->
   <div class="main-contact">
       <h3 class="head">CONTACTANOS</h3>
         <p>Mandanos un correo y te respondemos</p>
         <div class="col-md-offset-2 col-md-4">


       {!!Form::open(['route'=>'contacto.store','method'=>'POST'])!!}
            <div class="form-group">
              {!!Form::label('name','Nombre: ')!!}
              {!!Form::text('name',null,['id'=>'name','class'=>'form-control','placeholder' => 'Nombre'])!!}
             </div> 
             <div class="form-group">
              {!!Form::label('name','Correo: ')!!} 
              {!!Form::text('email',null,['placeholder' => 'Email','class'=>'form-control'])!!}
            </div> 
            <div class="form-group">
              {!!Form::textarea('mensaje',null,['placeholder' => 'Mensaje','class'=>'form-control'])!!}
            </div>
            <div class="form-group">
            {!!Form::submit('Enviar',['class'=>'btn btn-primary text-left'])!!}
           {!!Form::close()!!}
           </div>
       </div>
</div>


            <div class="col-md-offset-2 col-md-4">
                <h4>Detalles de Contacto</h4>
                <p><i class="glyphicon glyphicon-map-marker"></i>
                    IGUALDAD NO. 103 ZONA CENTRO TANTOYUCA VERACRUZ C.P. 92120<br>
                </p>
                <p><i class="glyphicon glyphicon-phone"></i> 
                    <abbr title="Phone">Tel</abbr>: (789)8930123 </p>
                <p><i class="glyphicon glyphicon-envelope"></i> 
                    <abbr title="Email">Correo</abbr>: <a href="mailto:cmp@centralmueblerapacheco.com"> cmp@centralmueblerapacheco.com</a>
                </p>
                <p><i class="glyphicon glyphicon-clock"></i> 
                    <abbr title="Hours">Horario</abbr>: Lunes - Domingo: 8:00 AM a 5:00 PM</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-face"></i></a>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
                
            </div>
        </div> 

   
</div>



@stop