@if(count($errors) > 0)

      <div class="alert alert-danger" id="Warning">
      	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <ul>
         @foreach($errors->all() as $error)
            <li><span class="fa fa-info-circle"></span>
                {{ $error }}
            </li>
          @endforeach
        </ul>
    </div>

@endif


