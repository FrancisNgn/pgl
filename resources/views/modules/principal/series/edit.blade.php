@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Serie
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($serie, ['route' => ['series.update', $serie->id], 'method' => 'patch']) !!}

                        @include('series.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection