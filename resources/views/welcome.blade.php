@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    @foreach($company as $c)
                        <div class="well">
                            <p>Contactpersoon:
                                {{ $c->name }}
                            </p>
                                <div class="well">
                                    @foreach($c->contacts as $co)
                                    <p>bedrijf:
                                        {{ $co->firstname }} {{ $co->surename }}
                                    </p>

                                        @foreach($co->internships as $internship)
                                            <div class="well">
                                            <a href="{{ route('internship.show', $internship->id) }}">
                                            <p>Stage:
                                                van {{ $internship->begin }} tot {{ $internship->end }}
                                            </p>

                                            <p>Status:
                                                {{ $internship->status->name }} {{ $internship->contact->firstname }}
                                            </p>
                                                <a href="{{ route('internship.edit', $internship->id) }}" class="btn btn-info">Verander</a>
                                                <a href="{{ route('internship.destroy', $internship->id) }}" data-token="{{ csrf_token() }}" class="delete btn btn-danger">verwijderen</a>
                                            </a>
                                            </div>
                                            @endforeach
                                    @endforeach
                                </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<script>
window.onload = function(){
var verwijder = $('.delete');
verwijder.click(function(e){
e.preventDefault();
var token = $(this).data('token');
var url = $(this).attr('href');
$.ajax({
type: "post",
url: url,
data: {_method: 'delete', _token: token }
}).success(function(response){
if(response == 1){
$(e.currentTarget).closest('div.well').fadeOut(500, function(){
$(this).remove();
})
}
});
});}
</script>
@endsection
