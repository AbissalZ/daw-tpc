@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <ul class="list-unstyled ">
                        <li>
                            <a href="/#">Postar</a>
                            <a href="/#">Listar Post</a>
                        </li>
                    </ul>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- {{ __('You are logged in!') }} -->
                 <div class="container">
                    <!-- <ul class="list-unstyled">
                        <li class="media">
                            <i class="bi bi-person-circle"></i>
                            <div class="media-body">
                            <h5>Abissal</h5>
                            <p>
                                hbdhhddhdbdshdlhdjd.cjkdbjcjdsk;
                                dcd dkj.ndlvjdn c.jd c j djdsj 
                                v.knndjvnjk.dnvjnjnn;vndjk
                                dscdskcvdsjkvndnjdnkdjnjkdnc;jdn
                            </p>
                            </div>
                        </li>
                    </ul> -->
                    <form method="post" action="{{route('salvarPost')}}" accept-charset="UTF-8">
                        {{csrf_field()}}    
                    <label for="msg_post">Novo Post</label>
                        <input type="text" name="postagem">
                        <button type="submit">Postar</button>
                    </form>
                    
                 </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
