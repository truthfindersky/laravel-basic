{{-- 17. loop --}}

<h4>The index of the current loop iteration (starts at 0)</h4>
@foreach($DataKey as $Country)
{{$loop->index}}
@endforeach

<h4>Loop count</h4>
@foreach($DataKey as $Country)
{{$loop->count}}
@endforeach

<h4>Loop count with break</h4>
@foreach($DataKey as $Country)
{{$loop->count}}
@break
@endforeach

<h4>Loop even</h4>
@foreach($DataKey as $Country)
@if($loop->even)
{{$Country}}
@endif
@endforeach

<h4>Loop odd</h4>
@foreach($DataKey as $Country)
@if($loop->odd)
{{$Country}}
@endif
@endforeach

<h4>Loop first</h4>
@foreach($DataKey as $Country)
@if($loop->first)
{{$Country}}
@break
@endif
@endforeach

<h4>Loop last</h4>
@foreach($DataKey as $Country)
@if($loop->last)
{{$Country}}
@break
@endif
@endforeach


<h4>For Loop in Blade Template</h4>
@for($i=0; $i<10; $i++)
<button>text {{$i}} </button>
@endfor

<h4>Another Example</h4>
@for($i=0; $i<10; $i++)
<img style="width:50px;height:30px" src="https://laravel.rabbil.com/images/class1.svg">
@endfor





