<title>Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <style>
        * {
            box-sizing: border-box;
            font-family: monospace;
        }

        body {
            color: rgb(49, 49, 49);

            overflow-y: auto;
        }

        .right {
            overflow-y: scroll;

            height: 520px
        }
        .left{
            overflow-y: scroll; 
            height: 550px;
        }


        .journals button {
            border: none;
        }

        .add-journal {
            width: 100%;

            background-color: transparent;
            text-align: start;

            margin-top: 20px
        }

        .journal-name {
            margin-top: 5px;
            display: block;
            width: 90%;

            background-color: rgba(222, 222, 222, 1);
            color: black;
            border: none;

            text-align: start;
            padding-left: 20px;
            margin-left: 10px;

            max-height: 40px;
        }

        .journal-name-group {
            margin-top: 20px;
        }

        .entries {
            margin-top: 20px;
        }

        .entry-image {
            width: 100%;
            height: 100%;
            max-width: 300px;
            max-height: 200px;

        }


        /* -------------------- */
        .entry-2 {
            height: 100px;
            overflow: hidden;

            font-size: 14px;
            
            line-height: 1;

            padding: 5px;
        }

        .badge {
            padding: 5px;
            margin-top: 2px;
        }


        /* ----------------------------------- */
        .entries-read{
            margin-top: 20px;
        }
        .entry-read{
            background-color: rgb(231, 228, 228); 
            border: none;
            min-height: 600px; 
            overflow-y:scroll;
            
            padding: 20px;
        }

        .card-title{
            font-weight: bold;
        }

        .entry-read-title{
            font-weight: bold;
            font-size: 30px;

            margin-top: 20px;
        }
        .entry-read-body{
            margin-top: 20px;
        }


        /* pseudo-classes */
        .entry-2:hover{
            /* background-color: rgb(204, 221, 224); */
            border-color: rgb(0, 0, 0);

            color: black;
        }

    </style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        </h2>
    </x-slot>
    
    <div class="container-fluid">
        <div class="row">

            <!-- journals -->
            <!-- Первый столбец --------------------------->
            <div class="col-lg-2">
                <button class="btn btn-light add-journal">
                    + Добавить дневник
                </button>
                <div class="left">

                    @include('components.dashboard.journal-name-group')

                </div>
            </div>




            <!-- entries -->
            <!-- Второй столбец ------------------------->
            <div class="col-lg-3">
                <br>
                <button class="btn btn-dark">
                    + Добавить запись
                </button>
                <br><br>

                @include('components.dashboard.right-entries-group')

            </div>




            <!-- entry-read -->
            <!-- Третий столбец ------------------------->
            <div class="col-lg-7">
                <div class="entries-read">

                    @include('components.dashboard.entry-read')

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

