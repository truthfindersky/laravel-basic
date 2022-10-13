{{-- 22. Laravel Raw SQL Queries | Basic CURD Operation --}}

@foreach($select as $item)
<table>
    <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->group}}</td>
        <td>{{$item->roll}}</td>
    </tr>
</table>
@endforeach