@extends('layouts.app')
@section('content')


    <section class="contained">
        <h1 class="myaccount">{{$title}}</h1>
        <div>
            @if(!Auth::user()->subscription && !Auth::user()->enterprise_user)
                @if(!Auth::user()->trial_expiry_date)
                    <a href="{{URL::to('/')}}/free-subscription">Try <b><?php echo get_free_trial_days(); ?> Days</b>
                        free
                        trial and convert your audios for free</a>
                @elseif(Auth::user()->trial_expiry_date<time())
                    Your trial period is expired
                @else
                    Your trial period will expire on {{ date("m/d/Y",Auth::user()->trial_expiry_date) }}
                @endif
            @endif
        </div>
    </section>
@endsection

