
        @extends('adminlte::page')

        @section('title', 'Dashboard')

        @section('content_header')
            <h1> <x-slot name="header">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Dashboard') }}
                    </h2>
                </x-slot></h1>
        @stop

        @section('content')
            <p>Welcome to this beautiful admin panel.</p>
            @foreach($data as $date)
                <form>
                    <div class="alert alert-info">
                       
                        {{ $date->Name }}
                        {{ $date->Positions }}
                        {{ $date->EmploymentDate }}
                        {{ $date->PhoneNubmer}}
                        {{ $date->Email}}
                        {{ $date->PhoneNubmer}}
                        {{ $date->Salary}}

                    </div>
                </form>
            @endforeach
        @stop
        @php
            $heads = [
            'Photo',
            'Name',
            'Positions',
            'Employment date',
            'Phone nubmer',
            'Email',
            'Salary',

            ['label' => 'Photo', 'width' => 40],
            ['label' => 'Name', 'width' => 40],
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

            $config = [
            'data' => [
            [22, 'John Bender', '+02 (123) 123456789', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
            [19, 'Sophia Clemens', '+99 (987) 987654321', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
            [3, 'Peter Sousa', '+69 (555) 12367345243', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
            ],
            'order' => [[1, 'asc']],
            'columns' => [null, null, null, ['orderable' => false]],
            ];
        @endphp


        <x-adminlte-datatable id="table1" :heads="$heads">
            @foreach($config['data'] as $row)
                <tr>
                    @foreach($row as $cell)
                        <td>{!! $cell !!}</td>
                    @endforeach
                </tr>
            @endforeach
        </x-adminlte-datatable>

        <x-adminlte-datatable id="table2" :heads="$heads" head-theme="dark" :config="$config"
                              striped hoverable bordered compressed/>

        @section('css')
            <link rel="stylesheet" href="/css/admin_custom.css">
        @stop

        @section('js')
            <script> console.log('Hi!'); </script>
        @stop




