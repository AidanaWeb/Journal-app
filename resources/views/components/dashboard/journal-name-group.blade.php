

<div class="journal-name-group">
    
    <a href=" {{route('dashboard')}} ">
        <button class="btn btn-secondary journal-name-">Все записи</button>
    </a>

    @foreach ($journals as $journal)
        <a href=" {{route('journals.entries.index', $journal)}} ">

            @if (!empty($journal_id))
                <button class="btn btn-dark journal-name-{{$journal->id == $journal_id ? 'selected' : ''}}">
                    <span style="float: left;"> {{$journal->journal_name}} </span>
                        
                    {{-- <span class="d-flex flex-row-reverse bd-highlight">
                        <span class="badge bg-secondary badge"> {{$journal->entries_num}} </span>
                    </span> --}}
                </button>     
            @else
                <button class="btn btn-dark journal-name-">
                    <span style="float: left;"> {{$journal->journal_name}} </span>
                        
                    {{-- <span class="d-flex flex-row-reverse bd-highlight">
                        <span class="badge bg-secondary badge"> {{$journal->entries_num}} </span>
                    </span> --}}
                </button>
            @endif
            
        </a>
        @endforeach
        

        {{-- @if (session('journal_create'))
            <form action="">
                <button class="btn btn-dark journal-name-">
                    <input type="text" style="float: left;">
                        
                    
                </button>  
            </form>
        @endif --}}

    </div>
    
    

    

{{-- <button class="btn btn-primary journal-name-{{$journal->id == $journal_id ? 'selected' : ''}}">
    <span style="float: left;"> {{$journal->journal_name}} </span>
            
    <span class="d-flex flex-row-reverse bd-highlight">
        <span class="badge bg-secondary badge"> {{$journal->entries_num}} </span>
    </span>
</button> --}}


{{-- <button class="btn btn-primary journal-name">
    <span style="float: left;">Journal</span>

    <span class="d-flex flex-row-reverse bd-highlight">
        <span class="badge bg-secondary badge">1234567890</span>
    </span>
</button>


<button type="button" class="btn btn-primary journal-name">
    Notifications <span class="badge bg-secondary badge">400</span>
</button> --}}