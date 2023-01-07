
        @extends('adminlte::page')

        @section('title', 'Dashboard')




        @php
            $heads = [

            ['label' => 'Photo', 'width' => 10],
            ['label' => 'Name', 'width' => 15],
            ['label' => 'Positions', 'width' => 40],
            ['label' => 'Employment date', 'width' => 40],
            ['label' => 'Phone nubmer', 'width' => 40],
            ['label' => 'Email', 'width' => 40],
            ['label' => 'Salary', 'width' => 40],
            ['label' => 'Actions', 'no-export' => true, 'width' => 5],
            ];

            $btnEdit = '<button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                <i class="fa fa-lg fa-fw fa-pen"></i>
            </button>';
            $btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                <i class="fa fa-lg fa-fw fa-trash"></i>
            </button>';
            $btnDetails = '<button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                <i class="fa fa-lg fa-fw fa-eye"></i>
            </button>';


$employee = App\Models\Employee::all()->toArray();//->toArray()
$positions = \App\Models\Position::all();
//$output = array_slice($user,5, true);

 ?>
    <table>
<?php

foreach ($employee as $data)
{
    $b = array_slice($data, 0,6 );
    print_r($b);
}


dd($positions)
    //echo "<tr>";
  //  foreach ($family as $user)
//{ $b=array_slice($family,1,true);
 //  dd( $b);
//    echo "<td>$user</td>";
     // dd($user);}
   // echo "</tr>";}


 //dd($user);
//$b=array_slice($user,2,true);

?>
</table>

<?php

$config = [
    'data' => [
        [ '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
        [19, 'Sophia Clemens', '+99 (987) 987654321', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
        [3, 'Peter Sousa', '+69 (555) 12367345243', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
    ],
    'order' => [[1, 'asc']],
    'columns' => [null, null, null, ['orderable' => false]],
];
        @endphp

        {{-- Minimal example / fill data using the component slot --}}
        <x-adminlte-datatable id="table1" :heads="$heads">
            @foreach($config['data'] as $row)
                <tr>
                    @foreach($row as $cell)
                        <td>{!! $cell !!}</td>
                    @endforeach
                </tr>
            @endforeach
        </x-adminlte-datatable>





        @section('content')
            <p>Welcome to this beautiful admin panel.</p>


        @stop








