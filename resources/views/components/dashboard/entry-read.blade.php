

<div class="card entry-read">

    @if (!empty($entry))

        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>

        <h3 class="entry-read-title"> {{$entry->entry_title}} </h3>
        <pre class="entry-read-body">
            {{$entry->entry_body}}
        </pre>
    @endif 
    
</div>