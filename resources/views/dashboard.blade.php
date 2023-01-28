
        @extends('adminlte::page')

        @section('title', 'Dashboard')




        @php
            $heads = [

            ['label' => 'Photo', 'width' => 10],
            ['label' => 'Name', 'width' => 15],
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

$employee = App\Models\Employee::all()->toArray();

       foreach($employee as $date){

    $b = array_slice($date,1,6 );




}

$config = [
    'data' => [$b]
    //['<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>']
     // [19, 'Sophia Clemens', '+99 (987) 987654321', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
        //[3, 'Peter Sousa', '+69 (555) 12367345243', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
    ,
    'order' => [[1, 'asc']],
    'columns' => [null, null, null, ['orderable' => false]],
];

        @endphp

        @section('content')
            <p>Welcome to this beautiful admin panel.</p>
            <x-adminlte-datatable id="table1" :heads="$heads">
                @foreach($config['data'] as $row)
                    <tr>
                        @foreach($row as $cell)
                            <td>{!! $cell !!}</td>
                        @endforeach
                            <td>{!!  $btnEdit !!}</td>
                            <td>{!! $btnDelete !!}</td>

                    </tr>
                @endforeach
            </x-adminlte-datatable>

        @stop








