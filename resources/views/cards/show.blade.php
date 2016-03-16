@extends('layout')


@section('content')

   <div class="row">

   	<div class="col-md-6 col-md-offset-3">  
   	 <h1>{{ $card->title }}</h1>

     
     <ul class="list-group">
   	  @foreach($card->notes as $note)
   	   <li class="list-group-item">{{ $note->body }}</li>
      @endforeach
     </ul>
    
    
    	<form method="POST">
    	  <div class="form-group">
    		<textarea name="body" class="form-control"></textarea>
    	  </div>	
    	</form>
    	<div class="form-group">
    		<button class="btn btn-primary">Add a note</button>
    	</div>
    	
    </div>

   </div>  

@stop