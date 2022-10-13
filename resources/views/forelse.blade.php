{{-- 15. forelse loop --}}

@forelse($DataKey as $Name)
{{$Name}}
@empty
<p>No data found</p>
@endforelse
