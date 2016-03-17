@extends('layout')


@section('content')

   <div class="row">

   	<div class="col-md-6 col-md-offset-3">  
   	 <h1>{{ $card->title }}</h1>

     
     <ul class="list-group">
   	  @foreach($card->notes as $note)
       <li class="list-group-item">
         <a href="/notes/{{$note->id}}"> {{ $note->body }}</a>
         <a href="">{{$note->user->name}}</a>
   	   </li>

      @endforeach
     </ul>
    
    
    	<form method="POST" action="/cards/{{$card->id}}/notes">
    	  <div class="form-group">
    		<textarea name="body" class="form-control"></textarea>
    	  </div>	
    	
    	<div class="form-group">
    		<button type="submit" class="btn btn-primary">Add a note</button>
    	</div>
    	</form>
    </div>

   </div>  

@stop