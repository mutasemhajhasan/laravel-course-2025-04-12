<div>
   <h1>Create a new post</h1>
   <form action="/posts" method="post" >
    @csrf
<textarea name="content" id="content" cols="30" rows="10">

</textarea>
{{-- <input type="file" name="file" id="file"> --}}
<input type="submit" value="Send">
</form>
</div>
