

{{-- 10. Pass And Display Data In Blade View --}}

{{--  can reflect the html tag --}} 
<p>{!! $data !!} </p>

{{--  can't reflect the html tag and filter the htmlcharacter, inhance security  --}}
<p>{{ $data }} </p>




