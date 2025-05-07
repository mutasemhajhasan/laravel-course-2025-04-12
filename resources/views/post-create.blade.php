<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post create</title>
</head>
<body>
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

</body>
</html>
