@if ($errors->any())
    <div class = "alert alert-danger alert dismissible fade show" role="alert">
        @foreach ($errors->all() as $error)
            <i class="fa fa-check-circle"></i>
            <span>{{$error}}</span>
            
        @endforeach
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span arian-hidden="true">&times;</span>
        </button>        
    </div>
    
@endif