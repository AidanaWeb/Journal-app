<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>
    

    <div class="" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <input name="journal-title" type="text" class="form-control" id="recipient-name" placeholder="travel">

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



      {{--  --}}
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>