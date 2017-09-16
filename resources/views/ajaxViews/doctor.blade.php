<div class=" col-sm-12 pro_head2">
                            <h4>Doctor's Profile(Selected)</h4>
</div>
<div class="col-sm-12" align="center"> 
    <img src="{{ asset($Personal->img) }}" class="img-thumbnail" alt="Profile Pic" width="200" height="200">
</div>

<div class="col-sm-12">
    <div class="pro-info">
        <table class="table info_table">
            <tbody>
                <tr>
                  <td><strong>Name:</strong></td>
                  <td> <strong><a href="{{ route('Doc.View', ['id' => $Personal->id]) }}">{{$Personal->name}}</a></strong></td>
                </tr>
                <tr>
                  <td>Category:</td>
                  <td>{{$Personal->category}}</td>
                </tr>
                <tr>
                  <td>Doctor's Office:</td>
                  <td>{{{$Personal->Office}}}</td>
                </tr>
                <tr>
                  <td>Time :</td>
                  <td>At {{$Personal->duty_time}}</td>
                </tr>
                <tr>
                  <td>Total:</td>
                  <td>{{$Personal->Money}}tk</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>