

{!! Form::open(['onsubmit'=>" rate({'description':$('#shopCommentInput').val(),'id':".$shop_id.",'model':'shop' });  event.preventDefault();event.stopPropagation(); return false;"])  !!}
{!! Form::text('description',null,['id'=>'shopCommentInput','class'=>'form-control']) !!}
{!! Form::close() !!}
@if(count($shopRate))

@foreach($shopRate as $rate)



    <section class="reviews">
        <strong>{{$rate->users->first_name}}  </strong>
        <p>  {{$rate->description}} </p>
        <span style="float:right;"> {{$rate->created_at}}</span>
    </section>
    @endforeach

    @endif
