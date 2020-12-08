<div class="container">
<form action="{{action('App\Http\Controllers\InterestingpathController@store')}}" method="POST">
@csrf
<input type="hidden" id="user_id" name="user_id" value="{{Auth::id()}}"><br><br>
<label for="fname">Enlace:</label>
<input type="text" id="path" name="path"><br><br>
<label for="lname">Descripción:</label>
<textarea id="description" name="description"></textarea>
<button type="submit" value="Submit">Post</button> 
</form>
</div>
