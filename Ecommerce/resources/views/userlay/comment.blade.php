<section style="background-color: rgba(128,128,128,0.36);">
    <div class="container my-5 py-5 text-dark">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="d-flex flex-start w-100">
                            <img class="rounded-circle shadow-1-strong me-3"
                                 src="home/images/1.png" alt="avatar" width="50"   style="height: 50px ; padding: 8px"
                                 height="65" />
                            <div class="w-100">
                                <h5>Add a comment</h5>
                                <form action="{{url('comment')}}" method="post">
                                    @csrf
                                    <div class="form-outline">
                                        <textarea class="form-control"  name="comment" id="textAreaExample" rows="4"></textarea>
                                        <label class="form-label" for="textAreaExample">What is your view?</label>
                                    </div>
                                    <div class="d-flex justify-content-between mt-3">
                                        <input type="submit" value="comment" class="btn btn-success">
                                        <br>

                                    </div>
                                </form>
                            </div>

                        </div>

                        <h1 style="padding-bottom: 50px;padding-top: 50px;font-size: 20px;text-align: center  ">All Comments </h1>


                        <div class="w-70" style="padding-left: 100px">

                                @foreach($comments as $comment)
                                <div style="padding-bottom: 50px">
                                    <b>{{$comment->name}}</b>
                                    <div>{{$comment->comment}} </div>

                                    <a  href="javascript::void (0);" class="btn btn-info" onclick="reply(this) " data-name="{{$comment->id}} ">Reply</a>
                                    @foreach($reply as $r)
                                        @if($r->comment_id == $comment->id)
                                            <div style="padding-left: 3%;padding-bottom: 10px">
                                                <b>{{$r->name}}</b>
                                                <p>{{$r->reply}}</p>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="replyDiv" style="padding-left: 20px ; padding-top: 20px;display: none"  >
    <form action="{{url('reply')}}" method="post">
        @csrf
    <input type="text" id="commentId" name="commentId" hidden>
    <div class="form-outline">
        <textarea class="form-control" name="reply" id="textAreaExample" rows="4"></textarea>
    </div>
        <input type="submit" value="add" style="float: right">
    </form>
</div>
