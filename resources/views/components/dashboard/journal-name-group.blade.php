

<div class="journal-name-group">
                        
    <button class="btn btn-secondary journal-name">Все записи</button>

    @foreach ($journals as $journal)
        <button class="btn btn-primary journal-name">
            <span style="float: left;"> {{$journal->journal_name}} </span>
            
            <span class="d-flex flex-row-reverse bd-highlight">
                <span class="badge bg-secondary badge"> {{$journal->entries_num}} </span>
            </span>
        </button>
    @endforeach

</div>




{{-- <button class="btn btn-primary journal-name">
    <span style="float: left;">Journal</span>

    <span class="d-flex flex-row-reverse bd-highlight">
        <span class="badge bg-secondary badge">1234567890</span>
    </span>
</button>




<button type="button" class="btn btn-primary journal-name">
    Notifications <span class="badge bg-secondary badge">400</span>
</button> --}}