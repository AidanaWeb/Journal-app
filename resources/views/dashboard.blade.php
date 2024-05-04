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

        .journal-name- {
            margin-top: 5px;
            display: block;
            width: 90%;

            background-color: rgba(222, 222, 222, 1);
            color: rgb(101, 97, 97);
            border: none;

            text-align: start;
            padding-left: 20px;
            margin-left: 10px;

            max-height: 40px;
        }

        .journal-name-selected{
            margin-top: 5px;
            display: block;
            width: 90%;

            text-align: start;
            padding-left: 20px;
            margin-left: 10px;

            max-height: 40px;
        }

        .journal-name-group {
            margin-top: 20px;
        }
        
        #input-journal-name{
            border-radius: 10px;
        }

        #error-input-journal{
            font-size: 14px;
            margin-left: 10px;
            color: red;
        }

        /* ------------------------ */

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

            max-width: 100%;
        }

        pre{
            white-space: pre-wrap;
        }

        .text1{
            white-space: pre-wrap;
        }

        .nav-item{
            margin-right: 10px;
        }


        /* pseudo-classes */
        .entry-2:hover{
            /* background-color: rgb(204, 221, 224); */
            border-color: rgb(0, 0, 0);

            color: black;
        }

        .modal-title{
            font-weight: 600;
            font-size: x-large;
        }
        .modal-body{
            color: black;
        }

        #save-btn{
            background-color: black;
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

                {{-- <form action=" {{route('journals.store')}} " method="post">
                    @csrf
                    @method('post')
                    <button type="submit" class="btn btn-light add-journal">
                        + Добавить дневник
                    </button>

                    <input name="journal-name" id="input-journal-name" type="text" placeholder="Название">    
                </form> --}}

                

                <button type="submit" class="btn btn-light add-journal" data-bs-toggle="modal" data-bs-target="#createJournalModal">
                    + Добавить дневник
                </button>


                {{-- modal add journal --}}
                <div class="modal fade" id="createJournalModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Создать дневник</h5>
                          <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
              
                            {{-- Form --}}
                          <form action=" {{route('journals.store')}} " method="post" " method="post">
                            @csrf
                            @method('post')
              
                            <div class="mb-3">
                              <label for="recipient-name" class="col-form-label">Название:</label>
              
                                {{-- --}}
                              <input name="journal-name" type="text" class="form-control" id="recipient-name" placeholder="travel">
              
                            </div>
                            <div class="mb-3">
                             
              
                              {{-- Кнопка для сохранения --}}
              
                                 <input type="submit" id="save-btn" class="btn btn-dark" value="Сохранить"></input>
              
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                </div>


                @if (session()->has('errors'))
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li id="error-input-journal"> {{$error}} </li>
                        @endforeach
                    </ul>
                @endif

                <div class="left">

                    @include('components.dashboard.journal-name-group')

                </div>
            </div>




            <!-- entries -->
            <!-- Второй столбец ------------------------->
            <div class="col-lg-3">
                <br>
                
                @if (!empty($journal_id))
                    <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#createEntryModal">
                        + Добавить запись
                    </button>
                @else
                <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#errorCreateEntryModel">
                    + Добавить запись
                </button>
                @endif



                <br><br>

                @if (!empty($journal_id))
                    {{-- modal --}}
                <div class="modal fade" id="createEntryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Новая запись</h5>
                          <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            {{-- Form --}}
                          <form action=" {{route('entries.store', $journal_id)}} " method="post">
                            @csrf
                            @method('post')

                            <div class="mb-3">
                              <label for="recipient-name" class="col-form-label">Заголовок:</label>

                                {{-- --}}
                              <input name="entry-title" type="text" class="form-control" id="recipient-name">

                            </div>
                            <div class="mb-3">
                              <label for="message-text" class="col-form-label">Запись:</label>

                              {{-- --}}
                              <textarea name="entry-body" class="form-control" id="message-text" 
                              style="min-height: 350px"></textarea>
                            </div>
                            <div class="modal-footer">
                              <button class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
    
                              {{-- Кнопка для сохранения --}}

                                 <input type="submit" id="save-btn" class="btn btn-dark" value="Сохранить"></input>

                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                </div>
                @endif
                

                {{-- modal error --}}
                <div class="modal fade" id="errorCreateEntryModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Ошибка</h5>
                          <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Выберите дневник
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-dark" data-bs-dismiss="modal">ОК</button>
                        </div>
                      </div>
                    </div>
                </div>
              

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</x-app-layout>

