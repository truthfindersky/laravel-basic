{{-- 14. foreach loop --}}

<select>
@foreach($DataKey as $CountryName)
<option>{{$CountryName}}</option>
@endforeach
</select>