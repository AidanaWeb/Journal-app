

<div class="card entry-read">

    @if (!empty($entry))

        <ul class="nav justify-content-end">
            <li class="nav-item">
                <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#updateModal">Изменить</button>
            </li>
            <li class="nav-item">
                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Удалить</button>
            </li>
        </ul>

        <h3 class="entry-read-title"> {{$entry->entry_title}} </h3>
        <pre class="entry-read-body">
            {{$entry->entry_body}}
        </pre>
    @endif 
    
</div>


{{-- modal delete --}}
@if(!empty($entry))
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5>Danger</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
        <div class="modal-body">
          Удалить запись?
        </div>
        <div class="modal-footer">
            <form action="{{route('entries.destroy', ['journal' => $entry->journal_id, 'entry' => $entry->id])}} " method="post">
                @csrf
                @method('delete')

                <button class="btn btn-danger" data-bs-dismiss="modal">ДА</button>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endif


{{-- modal update --}}
@if (!empty($entry))
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Изменить запись</h5>
          <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            {{-- Form --}}
          <form action=" {{route('entries.update', ['journal' => $entry->journal_id, 'entry' => $entry->id])}} " method="post">
            @csrf
            @method('put')

            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Заголовок:</label>

                {{-- --}}
              <input name="entry-title" type="text" class="form-control" id="recipient-name" value=" {{$entry->entry_title}} ">

            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Запись:</label>

              {{-- --}}
                <textarea name="entry-body" class="form-control" id="message-text" 
                style="min-height: 350px">
                    {{ $entry->entry_body }}
                </textarea>
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
