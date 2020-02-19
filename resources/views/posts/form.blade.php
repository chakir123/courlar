<div><label for="titre">titre
    </label
    ><input type="text" name="titre" id="titre" value="{{ old('auther',$post->titre ?? null)  }}">
    @if($errors->get('titre'))
                 
       @foreach($errors->get('titre') as $message)
         <li>{{ $message }}</li>
       @endforeach
   @endif
</div>
<div
><label for="auther">auther
    </label>
    <input type="text" name="auther" id="auther" value="{{ old('auther',$post->auther ?? null) }}">
    @if ($errors->get('auther'))
    @foreach ($errors->get('auther') as $message)
   <li>{{ $message }}</li>
    @endforeach
        
    @endif
</div>