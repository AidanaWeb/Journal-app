

<div class="card entry-read">

    @if (!empty($entry))

        <ul class="nav justify-content-end">
            <li class="nav-item">
                <button class="btn btn-dark">Изменить</button>
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
