

{!! Form::open(['onsubmit'=>" rate({'description':$('#coffeeCommentInput').val(),'id':".$coffee_id.",'model':'coffee' });  event.preventDefault();event.stopPropagation(); return false;"])  !!}
{!! Form::text('description',null,['id'=>'coffeeCommentInput','class'=>'form-control']) !!}
{!! Form::close() !!}
@if(count($coffeeRate))

@foreach($coffeeRate as $rate)



    <section class="reviews">
        <strong>{{$rate->users->first_name}}  </strong>
        <p>  {{$rate->description}} </p>
        <span style="float:right;"> {{$rate->created_at}}</span>
    </section>
    @endforeach

    @endif
