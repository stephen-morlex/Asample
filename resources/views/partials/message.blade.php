
  <!-- notify user of success sent or failure -->
@if(count($errors) >0)
  @foreach($errors->all() as $error)
   <div class="alert callout">
   	  {{$error}}
   </div>
   @endforeach
@endif

   @if(session('success'))
       <div class="success callout">
       	{{session('success')}}
       </div>
   @endif

   @if(session('error'))
       <div class="alert callout">
       	{{session('error')}}
       </div>
   @endif
