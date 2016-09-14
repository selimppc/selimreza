@extends('layouts/default')
{{-- Page title --}}
@section('title')
Chat | SelimReza.com
@parent
@stop

@section('content')

<script src="{{ asset('assets/chat/jquery-1.11.2.min.js') }}"></script>
<script src="{{ asset('assets/chat/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ asset('assets/chat/socket.io-1.3.4.js') }}"></script>

<script type="text/javascript">
/*   $(window).load(function(){
        $('#myModal').modal('show');
    });*/
    $(document).ready(function() {
        $('#myModal').modal('show');


        $("#DoSubmit").submit(function(e){
            e.preventDefault();
            var nameValue = document.getElementById("uniqueID").value; 
            document.getElementById("chat_name").value = nameValue;
            $('#myModal').modal('hide');

            $(".online_user").append("<p>"+nameValue+"</p>");
        });
    });

</script>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">  
<div class="modal-dialog" role="document">
    <div class="modal-content">
    <form name="myform" id="DoSubmit">
      <div class="modal-header">
        <h4 class="modal-title">Submit Your Name to start Chatting </h4>
      </div>
      <div class="modal-body">
        <p>Type you name : </p>
        <input type="text" name="user_name" class="form-control"  id="uniqueID" required="required">
      </div>
      <div class="modal-footer">
        <input type="submit" id="mySubmitButton" class="btn btn-primary" value="Submit">
      </div>
    </form>  
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<style type="text/css">
    #messages{
        border: 1px solid #aaa;
        height: 300px;
        margin-bottom: 8px;
        overflow: scroll;
        padding: 5px;
    }
</style>

<div class="container spark-screen">
    <div class="row">

        <div class="col-md-10 col-md-offset-1">
        <p>&nbsp;</p>
        <p>Real time Chat messaging </p>
            <div class="panel panel-default">
                <div class="panel-heading">Chat With me | SelimReza.com</div>
                <div class="panel-body">
 
                <div class="row">
                    <div class="col-lg-8" >
                      <div id="messages" ></div>
                    </div>
                    <div class="col-lg-4" >
                        <p>User Online</p>
                        <div class="online_user"> </div>
                    </div>
                    <div class="col-lg-8" >
                            <form action="sendmessage" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                                <input type="hidden" name="user" id="chat_name" >
                                <textarea class="form-control msg"></textarea>
                                <br/>
                                <input type="button" value="Send" class="btn btn-success send-msg">
                            </form>
                    </div>

                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var socket = io.connect('http://localhost:8890');
    socket.on('message', function (data) {
        data = jQuery.parseJSON(data);
        console.log(data.user);
        $( "#messages" ).append( "<strong>"+data.user+":</strong><p>"+data.message+"</p>" );
      });
    $(".send-msg").click(function(e){
        e.preventDefault();
        var token = $("input[name='_token']").val();
        var user = $("input[name='user']").val();
        var msg = $(".msg").val();
        if(msg != ''){
            $.ajax({
                type: "POST",
                url: '{!! URL::to("sendmessage") !!}',
                dataType: "json",
                data: {'_token':token,'message':msg,'user':user},
                success:function(data){
                    console.log(data);
                    $(".msg").val('');
                }
            });
        }else{
            alert("Please Add Message.");
        }
    })
</script>
@endsection