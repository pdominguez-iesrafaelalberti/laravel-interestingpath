<div class="container">
<form action="{{action('App\Http\Controllers\InterestingpathController@store')}}" method="POST">

@csrf
<table class='table table-dark'>
<input type="hidden" id="user_id" name="user_id" value="{{Auth::id()}}"><br><br>
<tr>
<td>
<label for="fname">Enlace:</label>
</td>
<td>
<input type="text" id="path" name="path"><br><br>
</td>
<tr>
<td>
<label for="lname">Descripción:</label>
</td>
<td>
<textarea id="description" name="description"></textarea>
</td>
</tr>
<td>
<button type="submit" value="Submit">Post</button> 
</td>
</form>
</div>
