<div>
    <h1 class="text-center font-weight-light">Exapmle 2 : Live Search by submit a form</h1>    
    <h2>Find a Contact</h2>
    @if(session()->has('message'))
        <div class="alert alert-info">
            {{ session('message') }}
        </div>
    @endif
    <form wire:submit.prevent="searchByName">
        <div class="input-group mb-3">
            <input type="text" wire:model="name" class="form-control" placeholder="Friend's name" aria-label="Friend's name" aria-describedby="basic-addon2" autocomplete="off">
            <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">&#128217;</span>
            </div>
        </div>
    </form>
    <div wire:loading wire:target="searchByName">
        Loading ...
    </div>
    @if(count($contacts) > 0)
    <div class="list-group mt-2">
        @foreach( $contacts as $contact )
        <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{$contact['name']}}</h5>
                <small class="text-muted">{{$contact['email']}}</small>
            </div>
            <p class="mb-1">{{$contact['city']}}</p>
            <small class="text-muted">{{$contact['phone']}}</small>
        </a>
        @endforeach
    </div>
    @endif

</div>
