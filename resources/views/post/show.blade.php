<x-layout>

    <x-slot name="title">
		{{ $id }}
	</x-slot>
          
   <x-slot name="dop">
        @foreach ($links as $key => $value)
            <a href="{{ $value['href'] }}"> {{ $value['text'] }}</a>                 
        @endforeach    
   </x-slot>
   
   <x-slot name="footer"> 
       
        <?php 
             $currentDateTime = date('d F Y, H:i:s');
            
             echo $currentDateTime;

        ?>
       
       @if($isAuth)
        <p class="text-success">Authenticated</p>
        @else
        <p class="text-danger">Unauthenticated</p>
       @endif
   </x-slot>
</x-layout>